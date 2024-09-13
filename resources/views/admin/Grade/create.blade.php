@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Добавление Класса</h1>
                </div>
                <form action="{{route('admin.grade.store')}}" method="POST" class="col-xl-12 col-md-6 mb-4">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Введите название">
                            @error('name')
                            <div class="text-danger">Заполни поле</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>Выбрать Расу</label>
                                <select class="form-control">
                                    @foreach($races as $race)
                                    <option>{{$race->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
