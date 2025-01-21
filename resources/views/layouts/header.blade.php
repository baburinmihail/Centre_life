<header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Центр жизни</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a id="nav_link_home" class="nav-link" aria-current="page" href="{{route('home')}}">Главная</a>
            </li>
            <li class="nav-item">
              <a id="nav_link_about" class="nav-link" href="{{route('about')}}">О нас</a>
            </li>
            <li class="nav-item">
              <a id="nav_link_register" class="nav-link" href="{{route('users.create')}}">Регистрация</a>
            </li>
            <li class="nav-item dropdown">
              <a id="admin_panel" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="true">Админ панель</a>
              <ul class="dropdown-menu" data-bs-popper="static">
                <li><a id="artikal_list" class="dropdown-item" href="{{route('artikals.index')}}">Список статей</a></li>
                <li><a id="dockument_list" class="dropdown-item" href="{{route('dockument.list')}}">Список нормативной документации</a></li>
                <li><a id="rekomend_list" class="dropdown-item" href="{{route('rekomend.list')}}">Список Рекомендации</a></li>
              </ul>
            </li>  
          </ul>
          <a id="login_btn" href="{{route('users.index')}}" class="btn btn-outline-success">Авторизация</a>
        </div>
      </div>
    </nav>
</header>

