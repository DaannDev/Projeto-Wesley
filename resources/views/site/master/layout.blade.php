
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://127.0.0.1:8000/style.css">
</head>
<body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/">🍮 Sorveteria Kibom 🍮</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('site.home')}}">Home 🍧</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{route('site.servicos')}}">Quem Somos 🍦</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{route('site.contato')}}">Contato 🍡</a>
        </li>
        @auth
        <li class="nav-item active" >
          <a class="nav-link" href="{{route('site.admin')}}">Administração 🧁</a>
        </li>
        @endauth
      </ul>
      <div class="px-3 py-2 border-bottom mb-3">
        <div class="text-end">
          <a href="/pagelogin" class="btn btn-success text-white me-2" style="text-decoration: none; color: black" >
            Login
          </a>
          <a href="/pageregister" class="btn btn-primary text-white me-2" style="text-decoration: none; color: black" >
            Cadastrar
          </a>
        </div>
      </div>
    </div>
    </div>
  </nav>
</header>

<main role="main">

  @yield('content')

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; <?= date('Y')?> Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>