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
              <th scope="col"> <a  href="{{route('artikals.create')}}"><img src="{{ asset('assets/img/icon/create/plus-circle.svg') }}" width="25px"></a></th>
              <th scope="col"></th>
            </tr>
          </thead >
          <tbody>
            <tr>
              <td>1</td>
              <td>name1</td>
              <td><a href="tel:+1234567890"><img src="{{ asset('assets/img/icon/update/pencil.svg') }}" width="20px"></a></td>
              <td><button type="button" class="btn-close" aria-label="Close"></button></td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>  
  </main>
  <script>artikal_list.classList.add('active');</script>
  <script>admin_panel.classList.add('active');</script>
@endsection


