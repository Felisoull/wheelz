@extends('layouts.main')

@section('content')

<div class="login_page ">
    <img src="{{'images/login.png'}}" alt="">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1>Авторизация</h1>
        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input-box-shadow:red" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                        ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        Запомнить меня
                    </label>
                </div>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-light">
                  Авторизоваться
                </button>

                @if (Route::has('password.request'))
                <a class= href="{{ route('password.request') }}">
                    Забыли пароль?
                </a>
                @endif
            </div>
        </div>
    </form>

</div>
@endsection
