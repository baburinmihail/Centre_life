@extends('layouts.app')

@section('main')

<main>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/slider/cute-family-playing-park_3959x1025.jpg" width="100%" height="100%" style="object-fit: cover; object-position: bottom;" aria-hidden="true" alt="альтернативный текст"  focusable="false">
          <!--<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>-->
          <!--<img src="assets/img/slider/vector_famaly_1.svg" alt="triangle with all three sides equal" height="100%" width="100%" />-->
          <div class="container">
            <div class="carousel-caption text-start">
              <h1 >Глаза и улыбка.</h1>
              <p class="opacity-75">Счастливые семьи можно узнать по глазам и улыбке.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/slider/cute-family-playing-summer-field_5735x1537.jpg" width="100%" height="100%" style="object-fit: cover; object-position: bottom;" aria-hidden="true" alt="альтернативный текст"  focusable="false">
          <div class="container">
            <div class="carousel-caption">
              <h1>Взаимопонимание</h1>
              <p>Взаимопонимание — кирпичик, на котором держится хрупкое семейное счастье.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/slider/family-with-cute-kids-autumn-park 3959x1025.jpg" width="100%" height="100%" style="object-fit: cover; object-position: bottom;" aria-hidden="true" alt="альтернативный текст"  focusable="false">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Семья</h1>
              <p>Семья — это уютное и тёплое место на Земле. И в этом местечке ты по-настоящему счастлив!</p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
  
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
  
    <div class="container marketing">
  
      <!-- Three columns of text below the carousel -->
      <div class="row">

        @foreach ($articals as $acrtical)
          <div class="col-lg-4">
            <img src="{{ $acrtical['mainFoto'] }}" width="140" height="140"  aria-hidden="true" alt="альтернативный текст" style="border-radius: 50%;"  focusable="false">
            <h2 class="fw-normal">{{ $acrtical['name_acrtical'] }}</h2>
            <p>{{ $acrtical['description'] }}</p>
            <p><a class="btn btn-secondary" href="{{ route( 'artikals.show' , $acrtical['id'] ) }}">Посмотреть детали &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        @endforeach
        
        <!--
        <div class="col-lg-4">
          <img src="assets/img/article/article_def.jpg" width="140" height="140"  aria-hidden="true" alt="альтернативный текст" style="border-radius: 50%;"  focusable="false">
          <h2 class="fw-normal">Статья 6</h2>
          <p>Здесь располагается краткое описание статьи 6. Для того , что бы увидеть полный текст перейдите по ссылке</p>
          <p><a class="btn btn-secondary" href="#">Посмотреть детали &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <!--</div><!-- /.row -->
      

      <!-- START THE FEATURETTES -->
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Счастливые лица родных — то,  <span class="text-body-secondary">ради чего хочется жить и работать</span></h2>
          <p class="lead">Здесь подразумеваются , какие-то основные тезисы, принцы фирмы, и смысл существования фирмы</p>
        </div>
        <div class="col-md-5">
          <img src="assets/img/main_card/standart_main.jpg" width="350" height="500"  aria-hidden="true" alt="альтернативный текст"  focusable="false">
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Время, проведённое вместе всей семьёй, — это подарок»  <span class="text-body-secondary">(Джоанна Гейнс)</span></h2>
          <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="assets/img/main_card/def_500x500.jpg" width="350" height="500"  aria-hidden="true" alt="альтернативный текст"  focusable="false">
        </div>
      </div>
      <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->
  </main>
  <script>nav_link_home.classList.add('active');</script>
  @endsection


