@extends('layouts.app')

@section('main')
  <main>
    <div class="container marketing" style="margin-top: 2%">
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <h2>Список статей</h2>
          @if (session('success'))
            <h5><i class="icon fa fa-check"></i>{{ session('success') }}</h5>
          @endif
          <thead>
            <tr>
              <th scope="col">№</th>
              <th scope="col">Название</th>
              <th scope="col" class=""><a class=""  href="{{route('artikals.create')}}">Создать</a></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead >
          <tbody>
              <tr>
                <td>1</td>
                <td>name</td>
                <td><a href="">Просмотреть</a></td>
                <td><a href="">Редактировать</a></td>
                <td>
                  <button type="submit" class="btn-close" aria-label="Close"></button>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>  
  </main>
  <script>artikal_list.classList.add('active');</script>
  <script>admin_panel.classList.add('active');</script>
@endsection


