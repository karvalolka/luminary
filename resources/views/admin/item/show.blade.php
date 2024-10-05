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
                            <li style="display: inline; margin-left: 10px;"><a href="{{route('admin.item.index')}}">Итемы</a>
                            </li>
                            <li style="display: inline; margin-left: 10px;">{{ $item->name }}
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
                        <h3 class="card-title mb-0">{{ $item->name }}</h3>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('admin.item.edit', $item->id) }}" class="text-success mr-2">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('admin.item.delete', $item->id) }}" method="POST"
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
                                <td>{{$item->id}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Название</td>
                                <td>{{$item->name}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
