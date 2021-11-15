<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Kibom Sorveteria</title>
</head>
<body>
  <main>
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3 text-center">Cadastro</h1>
        <p class="col-lg-10 fs-4">Preencha os dados para criar sua conta</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action="{{ url('/register/new')}}" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
            @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" >
            <label for="name">Nome</label>
          </div>  
        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" >
            <label for="email">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password">
            <label for="password">Senha</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Cadastrar</button>
          <hr class="my-4">
        </form>
      </div>
    </div>
  </div>
  </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>