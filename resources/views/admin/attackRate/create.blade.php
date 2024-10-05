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
                                    href="{{route('admin.attackRate.index')}}">Тип атаки</a>
                            </li>

                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div>
                <div class="col-xl-12 col-md-6 mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Добавление Типа атаки</h1>
                </div>
                <form action="{{route('admin.attackRate.store')}}" method="POST" class="col-xl-12 col-md-6 mb-4">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" class="form-control" name="rate"
                                   placeholder="Введите Название типа атаки">
                            @error('rate')
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
