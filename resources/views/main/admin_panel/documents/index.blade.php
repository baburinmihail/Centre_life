@extends('layouts.app')

@section('main')
  <main>
    <div class="container marketing" style="margin-top: 2%">
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <h2>Список документов</h2>
          @if (session('success'))
            <h5><i class="icon fa fa-check"></i>{{ session('success') }}</h5>
          @endif
          <thead>
            <tr>
              <th scope="col">№</th>
              <th scope="col">Название</th>
              <th scope="col">Путь</th>
              <th scope="col" class=""><a class=""  href="{{route('documents.create')}}">Загрузить</a></th>
            </tr>
          </thead >
          @foreach ($documents_all as $docoment)
            <tr>
              <td>{{ $docoment['id'] }}</td>
              <td>{{ $docoment['name_document'] }}</td>
              <td>{{ $docoment['file_document'] }}</td>
              <td>
                <form action="{{ route( 'documents.destroy' , $docoment['id'] ) }}" target="_blank" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn-close" aria-label="Close"></button>
                </form>
              </td>
            </tr>
          @endforeach
        </table>
      </div>
    </div>  
  </main>
  <script>dockument_list.classList.add('active');</script>
  <script>admin_panel.classList.add('active');</script>
@endsection


