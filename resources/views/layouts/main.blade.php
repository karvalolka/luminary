<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Luminary</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}"/>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet"/>
</head>
<body class="d-flex flex-column min-vh-100">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand">
            Добро пожаловать
            @if(Auth::check())
                {{ Auth::user()->name }}
            @endif
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                @if(Auth::check())
                @if(Auth::user()->role === \App\Models\User::ROLE_ADMIN)
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('admin.main.index') }}">Админка</a></li>
                @else
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('personal.main.index') }}">Личный кабинет</a></li>
                @endif
                @endif
            </ul>

            <form action="{{ route('logout') }}" method="post">
                @csrf
                @if(Auth::check())
                <button class="btn btn-outline-dark" type="submit">
                    Выйти
                </button>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-dark">Войти</a>
                @endif
            </form>

        </div>
    </div>
</nav>
<!-- Header-->
<header style="background-image: url('/storage/images/Jason-Statham.jpg'); background-size: cover; background-position: center; width: 100%; height: 50vh;" class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Кто приготовился к бою, тот его наполовину выиграл</h1>
            <p class="lead fw-normal mb-0"> (с) Джейсон Стейтем</p>
        </div>
    </div>
</header>



<!-- Section-->
@yield('content')
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Конец страницы</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>

