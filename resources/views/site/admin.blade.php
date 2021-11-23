<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <header>
</head>
<body>
<center><a class="navbar-brand" href="/"> 😁 Voltar </a><center>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($mensagens as $message)
                    <tr>
                    <th scope="row">{{$message['email']}}</th>
                    <td>{{$message['nome']}}</td>
                    <td>{{$message['telefone']}}</td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>