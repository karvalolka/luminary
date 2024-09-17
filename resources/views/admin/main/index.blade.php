@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
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

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
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

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <a href="{{route('admin.grade.index')}}" class="small-box-footer">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Класссы
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div
                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$data['gradesCount']}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="nav-icon fab fa-korvue"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
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
    </div>
@endsection
