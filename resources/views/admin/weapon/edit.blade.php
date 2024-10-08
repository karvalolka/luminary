@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;"><a href="{{route('admin.main.index')}}">Главная</a>
                            </li>
                            <li style="display: inline; margin-left: 10px;"><a
                                    href="{{route('admin.weapon.index')}}">Оружия</a></li>

                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Редактирование Оружия</h1>
                </div>
                <form action="{{route('admin.weapon.update', $weapon->id)}}" method="POST"
                      class="col-xl-12 col-md-6 mb-4" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Введите название"
                                   value="{{ old('name', $weapon->name) }}">
                            @error('name')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="power">Введите показатель урона</label>
                            <input type="number" id="power" class="form-control" name="power"
                                   placeholder="Введите значение" min="1" step="1"
                                   value="{{ old('power', $weapon->power) }}">

                            @error('power')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="attack_rates_id">Выбрать тип урона</label>
                            <select id="attack_rates_id" name="attack_rates_id" class="form-control">
                            <option value="" selected>Не выбрано</option>
                                @foreach($attackRates as $attackRate)
                                    <option
                                        value="{{ $attackRate->id }}" {{ old('attack_rates_id', $weapon->attack_rates_id) == $attackRate->id ? 'selected' : '' }}>{{ $attackRate->rate }}</option>
                                @endforeach
                            </select>
                            @error('attack_rates_id')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Добавить изображение</label>
                            <div>
                                <td style="text-align: center;">
                                    @if ($weapon->image && Storage::exists('public/' . $weapon->image))
                                        <img class="col-10" src="{{ asset('storage/' . $weapon->image) }}" alt="image">
                                    @else
                                        <span>Нет изображения</span>
                                    @endif
                                </td>
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label">Выберите изображение</label>
                                </div>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Обновить">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
