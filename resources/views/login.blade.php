@extends('templates.template')
@section ('body')
<div  style=" padding-top: 10%;">
<div class="card card-info col-md-4 container">
  <div class="card-header">
  <h3 class="card-title conteiner "style="padding-left: 40%;">Administrador</h3>
  </div>  
  <form class="form-horizontal">
  <div class="card-body">
  <div class="form-group row">
  <label for="email" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
  <input type="email" class="form-control" id="email" placeholder="Email">
  </div>
  </div>
  <div class="form-group row">
  <label for="senha" class="col-sm-2 col-form-label">Senha</label>
  <div class="col-sm-10">
  <input type="password" class="form-control" id="senha" placeholder="Senha">
  </div>
  </div>
  <div class="form-group row">
  <div class="offset-sm-2 col-sm-10">
  <div class="form-check">
  <a href="{{url("")}}">Esqueceu a senha?</a>
  </div>
  </div>
  </div>
  </div>  
  <div class="card-footer">
  <button type="submit" class="btn btn-info">Entrar</button>  
  <a type="submit" class="btn btn-default float-right" href="{{url("")}}">Voltar</a>
  </div>  
  </form>
  </div>
</div>
  @endsection