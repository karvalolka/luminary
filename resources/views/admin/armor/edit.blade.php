@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Редактирование Защиты</h1>
                </div>
                <form action="{{route('admin.armor.update', $armor->id)}}" method="POST" class="col-xl-12 col-md-6 mb-4" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Введите название"
                                   value="{{ old('name', $armor->name) }}">
                            @error('name')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="power">Введите показатель защиты</label>
                            <input type="number" class="form-control"  id="power" name="power" placeholder="Введите значение"
                                   min="1" step="1" value="{{ old('power', $armor->power) }}">
                            @error('power')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="protection_area_id">Выбрать область защиты</label>
                            <select id="protection_area_id" name="protection_area_id" class="form-control">
                                <option value="" selected>Не выбрано</option>
                                @foreach($protectionAreas as $protectionArea)
                                    <option
                                        value="{{ $protectionArea->id }}" {{ old('protection_area_id', $armor->protection_area_id) == $protectionArea->id ? 'selected' : '' }}>{{ $protectionArea->area }}</option>
                                @endforeach
                            </select>
                            @error('protection_area_id')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Добавить изображение</label>
                            <div>
                                <img class="col-2 mb-2" src="{{asset('storage/' . $armor->image)}}" alt="image">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label">Выберите изображение</label>
                                </div>
                                @error('image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Обновить">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
