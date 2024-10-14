@extends('layouts.main')
@section('content')
    <main class="flex-fill">
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @if (auth()->check())
                        @foreach ($chars as $char)
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                         alt="..."/>
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder">{{ $char->nickname }}</h5>
                                            <p>{{$char->getRaceName()}}</br></p>
                                            <p>{{$char->getGradeName()}}</br></p>
                                            <p>{{$char->getFractionName()}}</br></p>
                                            <p style="text-align: center;">
                                                <td class="col-2">Уровень</td>
                                                <td>#</td>
                                            </p>
                                            <p style="text-align: center; background-color: #d9d9d9;">
                                                <td class="col-2">Опыт</td>
                                                <td>{{$char->exp}}</td>
                                            </p>
                                            <p style="text-align: center; background-color: #ffcccc;">
                                                <td class="col-2">HP</td>
                                                <td>{{$char->hp}}</td>
                                            </p>
                                            <p style="text-align: center; background-color: #cce5ff;">
                                                <td class="col-2">MP</td>
                                                <td>{{$char->mp}}</td>
                                            </p>
                                            <p style="text-align: center;">
                                                <td class="col-2">Атака</td>
                                                <td>{{$char->attack_power + ($characterWeapons[$char->id]->power ?? 0)}}</td>
                                            </p>
                                            <p style="text-align: center;">
                                                <td class="col-2">Защита</td>
                                                <td>{{$char->def_power}}</td>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <a class="btn btn-outline-dark mt-auto" href="{{ route('profile.show', $char->id) }}">
                                                Выбрать
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center mt-5">
                            <h5>Авторизуйтесь или <a href="{{ route('login') }}" class="text-primary">войдите</a> / <a
                                    href="{{ route('register') }}" class="text-primary">зарегистрируйтесь</a></h5>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </main>

@endsection
