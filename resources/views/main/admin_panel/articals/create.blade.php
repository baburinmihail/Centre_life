@extends('layouts.app')

@section('main')
  <div class="container">
    <main class="form w-200 m-auto">
        <form action="{{ route('artikals.store') }}" enctype="multipart/form-data"   style="margin-top: 5%;" method="POST">
        @csrf
          <h2>Создание новой статьи</h2>
          <div class="mb-3">
            
            <label for="exampleFormControlInput1" class="form-label">Название</label>
            <input  type="text" name="name_acrtical" class="form-control" id="name_acrtical" placeholder="Название">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
            <textarea class="form-control" name="description"  id="description" rows="3" placeholder="Описание"></textarea>
          </div>
          <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Фотографии к статье</label>
            <input class="form-control" name="file_path[]" type="file" id="file_path" multiple>
          </div>
          <div class="d-grid gap-2 col-2 ">
            <button class="btn btn-success" type="submit">Создать</button>
          </div>
        </form>
    </main>
  </div>
  <script>artikal_list.classList.add('active');</script>
  <script>admin_panel.classList.add('active');</script>
@endsection


