@extends('layouts.app')

@section('main')
  <div class="container">
    <main class="form w-200 m-auto">
        <form action="{{ route('documents.store') }}" enctype="multipart/form-data"   style="margin-top: 5%;" method="POST">
        @csrf
          <h2>Выберите новый документ</h2>
          <div class="mb-3"> 
            <label for="exampleFormControlInput1" class="form-label">Название</label>
            <input  type="text" name="name_document" class="form-control @error('name_document') is-invalid @enderror" id="name_document" placeholder="Название" value="{{ old('name_document') }}">
            @error('name_document')
            <div id="name_document_error" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Выбрать документ</label>
            <input class="form-control  @error('file_document') is-invalid @enderror" name="file_document" type="file" id="file_document"  value="{{ old('file_document') }}">
            @error('file_document')
            <div id="file_document_error" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="d-grid gap-2 col-2 ">
            <button class="btn btn-success" type="submit">Сохранить</button>
          </div>
        </form>
    </main>
  </div>
  <script>dockument_list.classList.add('active');</script>
  <script>admin_panel.classList.add('active');</script>
@endsection


