@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Добавление Оружия</h1>
                </div>
                <form action="{{route('admin.weapon.store')}}" method="POST" class="col-xl-12 col-md-6 mb-4" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Введите название">
                            @error('name')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="fraction">Введите показатель урона</label>
                            <input type="number" class="form-control" name="power" placeholder="Введите значение"
                                   min="1" step="1">
                            @error('power')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="fraction">Выбрать тип урона</label>
                            <select name="attack_rates_id" class="form-control">
                                <option value="" selected>Не выбрано</option>
                                @foreach($attackRates as $attackRate)
                                    <option value="{{ $attackRate->id }}">{{ $attackRate->rate }}</option>
                                @endforeach
                            </select>
                            @error('attack_rates_id')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Добавить изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label">Выберите изображение</label>
                                </div>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
