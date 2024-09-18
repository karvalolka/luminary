@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Добавление Брони</h1>
                </div>
                <form action="{{route('admin.armor.store')}}" method="POST" class="col-xl-12 col-md-6 mb-4">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Введите название">
                            @error('name')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="fraction">Введите показатель защиты</label>
                            <input type="number" class="form-control" name="power" placeholder="Введите значение"
                                   min="1" step="1">
                            @error('power')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="fraction">Выбрать область защиты</label>
                            <select name="protection_area_id" id="protection_area" class="form-control">
                                <option value="" selected>Не выбрано</option>
                                @foreach($protectionAreas as $protectionArea)
                                    <option value="{{ $protectionArea->id }}">{{ $protectionArea->area }}</option>
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
