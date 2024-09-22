@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">{{ $user->name }}</h3>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('admin.user.edit', $user->id) }}" class="text-success mr-2">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('admin.user.delete', $user->id) }}" method="POST"
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
                                <td>{{$user->id}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Email</td>
                                <td style="text-align: center;">{{$user->email}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Роль</td>
                                <td style="text-align: center;">#</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
