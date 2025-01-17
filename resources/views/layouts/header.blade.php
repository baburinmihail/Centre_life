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
          </ul>
          <button class="btn btn-outline-success" type="button">Авторизация</button>
        </div>
      </div>
    </nav>
</header>