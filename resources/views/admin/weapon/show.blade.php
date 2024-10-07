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
                            <li style="display: inline; margin-left: 10px;"><a href="{{route('admin.weapon.index')}}">Оружия</a>
                            </li>
                            <li style="display: inline; margin-left: 10px;">{{ $weapon->name }}
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
                        <h3 class="card-title mb-0">{{ $weapon->name }}</h3>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('admin.weapon.edit', $weapon->id) }}" class="text-success mr-2">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('admin.weapon.delete', $weapon->id) }}" method="POST"
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
                                <td>{{$weapon->id}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Название</td>
                                <td>{{$weapon->name}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Тип атаки</td>
                                <td style="text-align: center;">{{$weapon->attackRate->rate}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2">Урон</td>
                                <td style="text-align: center;">{{$weapon->power}}</td>
                            </tr>
                            <tr style="text-align: center;">
                                <td class="col-2" style="text-align: center; vertical-align: middle;">Вид</td>
                                <td style="text-align: center;">
                                    @if ($weapon->image && Storage::exists('public/' . $weapon->image))
                                        <img class="col-10" src="{{ asset('storage/' . $weapon->image) }}" alt="image">
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
