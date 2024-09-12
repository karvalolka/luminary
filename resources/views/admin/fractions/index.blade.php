@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-2 col-md-6 mb-4">
                <a href="{{route('admin.fraction.create')}}" class="btn btn-block btn-primary">Добавить</a>
            </div>
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Фракции</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">id</th>
                                <th>Название</th>
                                <th style="text-align: center;">Кол-во</th>
                                <th>Контраст числинности</th>
                                <th class="col-1" style="text-align: center;">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($fractions as $fraction)
                                <tr>
                                    <td>{{$fraction->id}}</td>
                                    <td>{{$fraction->name}}</td>
                                    <td class="col-1" style="text-align: center;">{{ $fraction->char->count() }}</td>
                                    <td>
                                        @php
                                            $percentage = $totalChars > 0 ? round(($fraction->characters_count / $totalChars) * 100, 2) : 0;
                                        @endphp
                                        {{ $percentage }}%
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger"
                                                 style="width: {{ $percentage }}%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <a href="{{ route('admin.fraction.show', $fraction->id) }}" class="btn btn-link p-1">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.fraction.edit', $fraction->id) }}" class="btn btn-link text-success p-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('admin.fraction.delete', $fraction->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-link p-1 text-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
