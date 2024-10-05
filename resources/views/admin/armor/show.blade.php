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
                            <li style="display: inline; margin-left: 10px;"><a href="{{route('admin.armor.index')}}">Защита</a>
                            </li>
                            <li style="display: inline; margin-left: 10px;">{{ $armor->name }}
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
                                <td class="col-2" style="text-align: center; vertical-align: middle;">Вид</td>
                                <td style="text-align: center;">
                                    @if ($armor->image && Storage::exists('public/' . $armor->image))
                                        <img class="col-10" src="{{ asset('storage/' . $armor->image) }}" alt="image">
                                    @else
                                        <span>Нет изображения</span>
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
