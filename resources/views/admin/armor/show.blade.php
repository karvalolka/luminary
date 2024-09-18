@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">{{ $armor->name }}</h3>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('admin.armor.edit', $armor->id) }}" class="text-success mr-2">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('admin.armor.delete', $armor->id) }}" method="POST"
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
                                <td>{{$armor->id}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Название</td>
                                <td>{{$armor->name}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Область</td>
                                <td style="text-align: center;">{{$armor->protectionArea->area}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Значение</td>
                                <td style="text-align: center;">{{$armor->power}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Вид</td>
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
