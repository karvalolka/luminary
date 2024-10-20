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
                            <li style="display: inline; margin-left: 10px;">{{ $user->name }}
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
                        <h3 class="card-title mb-0">{{ $user->name }}</h3>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('personal.user.edit', ['user' => Auth::id()]) }}" class="text-success mr-2">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr style="text-align: center;">
                                <td class="col-2">ID</td>
                                <td>{{$user->id}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Ник</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Email</td>
                                <td style="text-align: center;">{{$user->email}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Роль</td>
                                <td style="text-align: center;">{{\App\Models\User::getRoles()[$user->role]}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
