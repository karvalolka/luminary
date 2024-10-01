@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Добавление Итемов</h1>
                </div>
                <form action="{{route('admin.item.store')}}" method="POST" class="col-xl-12 col-md-6 mb-4">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Введите Название">
                            @error('name')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="fraction">Выбрать оружие</label>
                            <select name="attack_rates_id" class="form-control">
                                <option value="" selected>Не выбрано</option>
                                @foreach($weapons as $weapon)
                                    <option value="{{ $weapon->id }}">{{ $weapon->name }}</option>
                                @endforeach
                            </select>
                            @error('attack_rates_id')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="fraction">Выбрать броню</label>
                            <select name="attack_rates_id" class="form-control">
                                <option value="" selected>Не выбрано</option>
                                @foreach($armors as $armor)
                                    <option value="{{ $armor->id }}">{{ $armor->name }}</option>
                                @endforeach
                            </select>
                            @error('attack_rates_id')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
