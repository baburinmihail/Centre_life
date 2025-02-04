@extends('layouts.app')

@section('main')
  <div class="container">
    <main class="form w-200 m-auto">
      <form   style="margin-top: 5%;" method="POST">
        <h2>Просмотр статьи №  {{ $acrtical['id'] }}</h2>
        <div class="mb-3"> 
          <label for="exampleFormControlInput1" class="form-label">Название</label>
          <input  type="text" name="name_acrtical" class="form-control " id="name_acrtical" placeholder="Название" disabled  value="{{ $acrtical['name_acrtical'] }}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
          <textarea class="form-control  " name="description"  id="description" rows="3" placeholder="Описание" disabled   value="">{{ $acrtical['description'] }}</textarea>
        </div>
        <div class="mb-3">
          <label for="formFileMultiple" class="form-label">Фотографии к статье</label>
          @foreach ($path_images as $pathImage)
            <textarea class="form-control  " name="description"  id="description" rows="3" placeholder="Описание" disabled   value="">{{ $pathImage }}</textarea>
          @endforeach  
        </div>
      </form>
  </main>
  </div>
  <script>artikal_list.classList.add('active');</script>
  <script>admin_panel.classList.add('active');</script>
@endsection


