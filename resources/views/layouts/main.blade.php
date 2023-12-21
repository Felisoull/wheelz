<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">


  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <title>Document</title>
</head>

<body>
  <div>
    <div class="row">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarNav">
            <a class="nav-link" href="{{route('main.index')}}"><img src="{{url('/images/logo.png')}}" alt=""></a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{route('auto.index')}}">Автопарк</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact.index')}}">Контакты</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('condition.index')}}">Условия</a></a>
              </li>
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Регистрация</a></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Вход</a></a>
              </li>
              @endguest
              @auth
              <li  class="nav-item">
              <a href="{{ route('user.index') }}" class="nav-item nav-link">Личный кабинет</a>
            </li>
              <form action="{{ route('logout') }}" method="POST" class="form-inline">

                @csrf
                <li  class="nav-item">
                <input type="submit" class="btn btn-outline-dark" value="Выход"></li>
              </form>
              @endauth
            </ul>
          </div>
        </div>
      </nav>
    </div>
    @yield('content')
 
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>