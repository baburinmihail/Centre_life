@extends('layouts.app')

@section('main')
  <div class="container">
    <main class="form w-200 m-auto">
        <form action="{{ route('users.store') }}"   style="margin-top: 5%;" method="POST">
        @csrf
          <h2>Изменить статью Name1</h2>
          <div class="mb-3">
            
            <label for="exampleFormControlInput1" class="form-label">Название</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Название">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Описание"></textarea>
          </div>
          <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Фотографии к статье</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
          </div>
        </form>
    </main>
  </div>
  <script>artikal_list.classList.add('active');</script>
  <script>admin_panel.classList.add('active');</script>
@endsection

