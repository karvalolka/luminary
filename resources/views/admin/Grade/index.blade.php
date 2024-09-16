@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-md-6 mb-4">
                <a href="{{route('admin.grade.create')}}" class="btn btn-block btn-primary">Добавить</a>
            </div>
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Классы</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">id</th>
                                <th>Название</th>
                                <th>Принадлежность</th>
                                <th class="col-1" style="text-align: center;">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($grades as $grade)
                                <tr>
                                    <td>{{$grade->id}}</td>
                                    <td>{{$grade->name}}</td>
                                    <td>
                                        @foreach ($grade->races as $race)
                                            {{ $race->name }}@if (!$loop->last), @endif
                                        @endforeach
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <a href="{{ route('admin.grade.show', $grade->id) }}"
                                               class="btn btn-link p-1">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.grade.edit', $grade->id) }}"
                                               class="btn btn-link text-success p-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('admin.grade.delete', $grade->id) }}" method="POST">
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
