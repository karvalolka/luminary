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
                            <li style="display: inline; margin-left: 10px;"><a href="{{route('admin.char.index')}}">Персонажи</a>
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
                        <h3 class="card-title mb-0">{{ $char->name }}</h3>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('admin.char.edit', $char->id) }}" class="text-success mr-2">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('admin.char.delete', $char->id) }}" method="POST"
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
                                <td>{{$char->name}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Роль</td>
                                <td style="text-align: center;">#</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Email</td>
                                <td style="text-align: center;">{{$char->email}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
