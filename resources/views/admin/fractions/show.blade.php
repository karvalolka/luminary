@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="card-title mb-0">{{ $fraction->name }}</h3>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('admin.fraction.edit', $fraction->id) }}" class="text-success mr-2">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('admin.fraction.delete', $fraction->id) }}" method="POST" class="mb-0">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-link p-0 text-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr style="text-align: center;">
                                <td class="col-2" >ID</td>
                                <td>{{$fraction->id}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2" >Название</td>
                                <td>{{$fraction->name}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2" >Численность</td>
                                <td style="text-align: center;">{{ $fraction->char->count() }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
