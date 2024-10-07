@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right;">
                    <nav aria-label="Breadcrumb">
                        <ol style="display: inline; padding: 0; margin: 0; list-style: none;">
                            <li style="display: inline; margin-left: 10px;">Главная</li>
                        </ol>
                    </nav>
                </td>
            </tr>
        </table>

        <!-- Персонаж -->
        <hr class="sidebar-divider my-0">
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Персонаж
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <a href="{{route('admin.user.index')}}" class="small-box-footer">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Пользователи
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data['usersCount']}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="nav-icon fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <a href="{{route('admin.user.index')}}" class="small-box-footer">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Персонажи
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data['usersCount']}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="nav-icon far fa-id-card"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <a href="{{route('admin.race.index')}}" class="small-box-footer">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Расы
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data['racesCount']}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="nav-icon fab fa-ravelry"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <a href="{{route('admin.grade.index')}}" class="small-box-footer">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Классы
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data['gradesCount']}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="nav-icon fab fa-korvue"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <a href="{{route('admin.fraction.index')}}" class="small-box-footer">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Фракции
                                    </div>
                                    <div
                                        class="h5 mb-0 font-weight-bold text-gray-800">{{$data['fractionsCount']}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="nav-icon fab fa-facebook-f"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Инвентарь -->
        <hr class="sidebar-divider my-0">
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Инвентарь
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <a href="{{route('admin.weapon.index')}}" class="small-box-footer">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Оружие
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data['weaponsCount']}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="nav-icon fas fa-khanda"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <a href="{{route('admin.armor.index')}}" class="small-box-footer">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Броня
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data['armorsCount']}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="nav-icon fas fa-shield-alt"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <a href="{{route('admin.fraction.index')}}" class="small-box-footer">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Прочие итемы
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data['itemsCount']}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="nav-icon fas fa-briefcase"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Прочее -->
        <hr class="sidebar-divider my-0">
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Прочее
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <a href="{{route('admin.protectionArea.index')}}" class="small-box-footer">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Области защиты
                                    </div>
                                    <div
                                        class="h5 mb-0 font-weight-bold text-gray-800">{{$data['protectionAreasCount']}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="nav-icon fas fa-user-shield"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <a href="{{route('admin.attackRate.index')}}" class="small-box-footer">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Типы атаки
                                    </div>
                                    <div
                                        class="h5 mb-0 font-weight-bold text-gray-800">{{$data['attackRatesCount']}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="nav-icon fas fa-wrench"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
