@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{$fraction->name}}</h3>
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
