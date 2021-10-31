@extends('site.master.layout')

@section('content')

<div class="jumbotron">
    <div class = container text-center>
  <h1 class="display-4">Contatos</h1>
  <hr class="my-4">
  <p class="lead">Preencha com suas informações</p>

</div>


<div class="container py-5">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu endereço Email">
    <small id="emailHelp" class="form-text text-muted">Nós nunca vamos pedir seus dados pessoais</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu Nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefone</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite seu Telefone de Contato">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Cheque Aqui</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar Solicitação</button>
</form>
</div>
@endsection
