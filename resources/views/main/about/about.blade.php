@extends('layouts.app')

@section('main')
<main>

  <div class="container marketing" style="margin-top: 2%">
    <main>
      <h1 class="text-body-emphasis">О нас</h1>
      <p class="fs-5 col-md-8">Сдесь планируется или форма обратной связи или какое либо описание</p>
  
      <hr class="col-3 col-md-2 mb-5">
  
      <div class="row g-5">
        <div class="col-md-6">
          <h2 class="text-body-emphasis">Список нормативной документации</h2>
          <ul class="list-unstyled ps-0">
            <li>
              <a class="icon-link mb-1" href="https://github.com/twbs/examples/tree/main/icons-font" rel="noopener" target="_blank">
                <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
                Документ 1
              </a>
            </li>
            <li>
              <a class="icon-link mb-1" href="https://github.com/twbs/examples/tree/main/parcel" rel="noopener" target="_blank">
                <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
                Документ 2
              </a>
            </li>
            <li>
              <a class="icon-link mb-1" href="https://github.com/twbs/examples/tree/main/vite" rel="noopener" target="_blank">
                <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
                Документ 3
              </a>
            </li>
            <li>
              <a class="icon-link mb-1" href="https://github.com/twbs/examples/tree/main/webpack" rel="noopener" target="_blank">
                <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
                Документ 4
              </a>
            </li>
          </ul>
        </div>
  
        <div class="col-md-6">
          <h2 class="text-body-emphasis">Рекомендации</h2>
          <p>Здесь планируется размещения рекомендаций для возможной помощи </p>
          <ul class="list-unstyled ps-0">
            <li>
              <a class="icon-link mb-1" href="../getting-started/introduction/">
                <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
                Рекомендация 1
              </a>
            </li>
            <li>
              <a class="icon-link mb-1" href="../getting-started/webpack/">
                <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
                Рекомендация 2
              </a>
            </li>
            <li>
              <a class="icon-link mb-1" href="../getting-started/parcel/">
                <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
                Рекомендация 3
              </a>
            </li>
            <li>
              <a class="icon-link mb-1" href="../getting-started/vite/">
                <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
                Рекомендация 4
              </a>
            </li>
            <li>
              <a class="icon-link mb-1" href="../getting-started/contribute/">
                <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
                Рекомендация 5
              </a>
            </li>
          </ul>
        </div>
      </div>
    </main>
  </div><!-- /.container -->
</main>
  <script>nav_link_about.classList.add('active');</script>
@endsection


