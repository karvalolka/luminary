<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.main.index') }}">
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

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Персонаж
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.user.index')}}">
            <i class="nav-icon fas fa-users"></i>
            <span>Пользователи</span></a>
    </li>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.char.index')}}">
            <i class="nav-icon far fa-id-card"></i>
            <span>Персонажи</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.race.index')}}">
            <i class="nav-icon fab fa-ravelry"></i>
            <span>Расы</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.grade.index')}}">
            <i class="nav-icon fab fa-korvue"></i>
            <span>Классы</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.fraction.index')}}">
            <i class="nav-icon fab fa-facebook-f"></i>
            <span>Фракции</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Инвентарь
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.weapon.index')}}">
            <i class="nav-icon fas fa-khanda"></i>
            <span>Оружие</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.armor.index')}}">
            <i class="nav-icon fas fa-shield-alt"></i>
            <span>Броня</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.item.index')}}">
            <i class="nav-icon fas fa-briefcase"></i>
            <span>Прочие итемы</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Прочее
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.protectionArea.index')}}">
            <i class="nav-icon fas fa-user-shield"></i>
            <span>Области защиты</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.attackRate.index')}}">
            <i class="nav-icon fas fa-wrench"></i>
            <span>Типы атаки</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
