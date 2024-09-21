@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Добавление Персонажа</h1>
                </div>

                <form action="{{route('admin.char.store')}}" method="POST" class="col-xl-12 col-md-6 mb-4">
                    @csrf
                    <div>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Введите Ник">
                            @error('name')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="fraction">Выбрать фракцию</label>
                            <select name="fraction_id" id="fraction" class="form-control">
                                <option value="" selected>Не выбрано</option>
                                @foreach($fractions as $fraction)
                                    <option value="{{ $fraction->id }}">{{ $fraction->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" id="race-container" style="display: none;">
                            <label for="race">Выбрать расу</label>
                            <select name="race_id" id="race" class="form-control">
                                <option value="">Сначала выберите фракцию</option>
                            </select>
                        </div>

                        <div class="form-group" id="grade-container" style="display: none;">
                            <label for="grade">Выбрать Класс</label>
                            <select name="grade_id" id="grade" class="form-control">
                                <option value="">Сначала выберите расу</option>
                            </select>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const fractionSelect = document.getElementById('fraction');
            const raceSelect = document.getElementById('race');
            const gradeSelect = document.getElementById('grade');
            const raceContainer = document.getElementById('race-container');
            const gradeContainer = document.getElementById('grade-container');

            fractionSelect.addEventListener('change', () => {
                const fractionId = fractionSelect.value;
                raceSelect.innerHTML = '<option value="">Загрузка...</option>';
                gradeSelect.innerHTML = '<option value="">Сначала выберите расу</option>';
                gradeContainer.style.display = 'none'; // Hide grade container

                if (fractionId) {
                    fetch(`/api/races?fraction_id=${fractionId}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(`HTTP error! status: ${response.status}`);
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.races && data.races.length > 0) {
                                raceSelect.innerHTML = '<option value="">Выберите расу</option>';
                                data.races.forEach(race => {
                                    const option = document.createElement('option');
                                    option.value = race.id;
                                    option.textContent = race.name;
                                    raceSelect.appendChild(option);
                                });
                                raceContainer.style.display = 'block'; // Show race container
                            } else {
                                raceSelect.innerHTML = '<option value="">Нет доступных рас</option>';
                                raceContainer.style.display = 'none'; // Hide race container
                            }
                        })
                        .catch(error => {
                            console.error('Ошибка:', error);
                            raceSelect.innerHTML = '<option value="">Ошибка загрузки рас</option>';
                            raceContainer.style.display = 'none'; // Hide race container
                        });
                } else {
                    raceSelect.innerHTML = '<option value="">Сначала выберите фракцию</option>';
                    raceContainer.style.display = 'none'; // Hide race container
                    gradeContainer.style.display = 'none'; // Hide grade container
                }
            });

            raceSelect.addEventListener('change', () => {
                const raceId = raceSelect.value;
                gradeSelect.innerHTML = '<option value="">Загрузка...</option>';

                if (raceId) {
                    fetch(`/api/grades?race_id=${raceId}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(`HTTP error! status: ${response.status}`);
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.grades && data.grades.length > 0) {
                                gradeSelect.innerHTML = '<option value="">Выберите класс</option>';
                                data.grades.forEach(grade => {
                                    const option = document.createElement('option');
                                    option.value = grade.id;
                                    option.textContent = grade.name;
                                    gradeSelect.appendChild(option);
                                });
                                gradeContainer.style.display = 'block'; // Show grade container
                            } else {
                                gradeSelect.innerHTML = '<option value="">Нет доступных классов</option>';
                                gradeContainer.style.display = 'none'; // Hide grade container
                            }
                        })
                        .catch(error => {
                            console.error('Ошибка:', error);
                            gradeSelect.innerHTML = '<option value="">Ошибка загрузки классов</option>';
                            gradeContainer.style.display = 'none'; // Hide grade container
                        });
                } else {
                    gradeSelect.innerHTML = '<option value="">Сначала выберите расу</option>';
                    gradeContainer.style.display = 'none'; // Hide grade container
                }
            });
        });
    </script>
@endsection
