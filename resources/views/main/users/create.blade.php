@extends('layouts.app')

@section('main')
<div class="container">
    <main class="form-signin w-100 m-auto">
        <form action="{{ route('users.store') }}"   style="margin-top: 40%;" method="POST">
        @csrf
          <!--<img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
          <h1 class="h3 mb-3 fw-normal">Регистрация</h1>
      
          <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com"  name="email" value="{{ old('email') }}">
            <label for="floatingInput">Email</label>
            @error('email')
                <div id="email_error" class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="password" name="password">
            <label for="floatingPassword">Пароль</label>
            @error('password') 
                <div id="password_error" class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
          <button class="btn btn-success w-100 py-2" type="submit">Зарегистрироваться</button>
        </form>
    </main>
</div>
  <script>nav_link_register.classList.add('active');</script>
@endsection


