@extends('layouts.app')

@section('main')
  <main>
    <div class="container marketing" style="margin-top: 2%">
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <h2>Список статей</h2>
          <thead>
            <tr>
              <th scope="col">№</th>
              <th scope="col">Название</th>
              <th scope="col"> </th>
              <th scope="col"><a  href="{{route('artikals.create')}}">Добавить</a></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>name1</td>
              <td>редактировать</td>
              <td>удалить</td>
            </tr>
            <tr>
              <td>2</td>
              <td>name2</td>
              <td>редактировать</td>
              <td>удалить</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>  
  </main>
  <script>artikal_list.classList.add('active');</script>
  <script>admin_panel.classList.add('active');</script>
@endsection


