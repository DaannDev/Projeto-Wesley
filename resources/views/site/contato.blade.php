@extends('site.master.layout')

@section('content')

<div class="jumbotron">
    <div class = container text-center>
  <h1 class="display-4"> 😀 Contatos 😀</h1>
  <hr class="my-4">
  <p class="lead">🤗Preencha com suas informações🤗</p>
  <small id="emailHelp" class="form-text text-muted">🤨Nós nunca vamos pedir seus dados pessoais🤨</small>
</div>


<div class="container py-5">
<form action="/contato" method="post">
<div class="form-floating mb-3">
    <label for="email">Email 📨</label>
    <input type="email" class="form-control" name="email" >     
  </div>
  <div class="form-group">
    <label for="nome">Nome 👥</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="form-group">
   <label for="telefone">telefone 📞</label>
   <input type="text" class="form-control" name="telefone">
  </div>
  <button type="submit" class="btn btn-primary">Enviar Solicitação</button>
</form>
</div>
@endsection

