@extends('personal.layouts.main')
@section('content')
    <div class="container-fluid">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;"><a href="{{route('personal.main.index')}}">Главная</a>
                            </li>
                            <li style="display: inline; margin-left: 10px;"><a href="{{route('personal.char.index')}}">Персонажи</a>
                            </li>
                            <li style="display: inline; margin-left: 10px;">{{ $char->nickname }}
                            </li>

                        </ol>
                    </nav>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">{{ $char->nickname }}</h3>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('personal.char.edit', $char->id) }}" class="text-success mr-2">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('personal.char.delete', $char->id) }}" method="POST"
                                  class="mb-0">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-link p-0 text-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr style="text-align: center;">
                                <td class="col-2">ID</td>
                                <td>{{$char->id}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Ник</td>
                                <td>{{$char->nickname}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Раса</td>
                                <td>{{$char->race->name}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Класс</td>
                                <td>{{$char->grade->name}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Фракция</td>
                                <td>{{$char->fraction->name}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Уровень</td>
                                <td>#</td>
                            </tr>
                            <tr style="text-align: center; background-color: #d9d9d9;">
                                <td class="col-2">Опыт</td>
                                <td>{{$char->exp}}</td>
                            </tr>
                            <tr style="text-align: center; background-color: #ffcccc;">
                                <td class="col-2">HP</td>
                                <td>{{$char->hp}}</td>
                            </tr>
                            <tr style="text-align: center; background-color: #cce5ff;">
                                <td class="col-2">MP</td>
                                <td>{{$char->mp}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Атака</td>
                                <td>{{$char->attack_power}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Защита</td>
                                <td>{{$char->def_power}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
