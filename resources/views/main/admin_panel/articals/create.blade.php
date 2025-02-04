@extends('layouts.app')

@section('main')
  <div class="container">
    <main class="form w-200 m-auto">
        <form action="{{ route('artikals.store') }}" enctype="multipart/form-data"   style="margin-top: 5%;" method="POST">
        @csrf
          <h2>Создание новой статьи</h2>
          <div class="mb-3"> 
            <label for="exampleFormControlInput1" class="form-label">Название</label>
            <input  type="text" name="name_acrtical" class="form-control @error('name_acrtical') is-invalid @enderror" id="name_acrtical" placeholder="Название" value="{{ old('name_acrtical') }}">
            @error('name_acrtical')
            <div id="name_acrtical_error" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
            <textarea class="form-control  @error('description') is-invalid @enderror" name="description"  id="description" rows="3" placeholder="Описание"  value="">{{ old('description') }}</textarea>
            @error('description')
            <div id="description_error" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Фотографии к статье</label>
            <input class="form-control  @error('images.*') is-invalid @enderror" name="imagesPath[]" type="file" id="imagesPath" multiple value="{{ old('images') }}">
            @error('images.*')
            <div id="images_error" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
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


