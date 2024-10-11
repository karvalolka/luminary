<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('personal.main.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Главная</div>
    </a>
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-globe"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Сайт</div>
    </a>

    <li class="nav-item">
        <a class="nav-link" href="{{route('personal.user.update', ['user' => Auth::id()])}}">
            <i class="nav-icon far fa-id-card"></i>
            <span>Изменить ник</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Персонаж
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('personal.char.index')}}">
            <i class="nav-icon far fa-id-card"></i>
            <span>Персонажи</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Инвентарь
    </div>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="nav-icon fas fa-khanda"></i>
            <span>Оружие</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="nav-icon fas fa-shield-alt"></i>
            <span>Броня</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="nav-icon fas fa-briefcase"></i>
            <span>Прочие итемы</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
