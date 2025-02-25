@extends('layouts.app')

@section('main')
  <div class="container marketing" style="margin-top: 2%">
    <main>
      <h1 class="text-body-emphasis">О нас</h1>
      <p class="fs-5 col-md-8">Сдесь планируется или форма обратной связи или какое либо описание</p>
  
      <hr class="col-3 col-md-2 mb-5">
  
      <div class="row g-5">
        <div class="col-md-6">
          <h2 class="text-body-emphasis">Список нормативной документации</h2>
          <ul class="list-unstyled ps-0">
            @foreach ($documents_all as $docoment)
            <li>
              <a class="icon-link mb-1" href="http://127.0.0.1:8000{{ $docoment['file_document'] }}" rel="noopener" target="_blank">
                <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
                {{ $docoment['id'] }}. {{ $docoment['name_document'] }}
              </a>
            </li>
          @endforeach
          </ul>
        </div>
        
        
      </div>
    </main>
  </div><!-- /.container -->
  <script>nav_link_about.classList.add('active');</script>
@endsection


