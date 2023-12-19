@extends('templates.template')
@section ('body')
<h1 class="text-center"> Ordem de Serviço </h1>
<div class="container-fluid"><br/><br/>
    <h2 class="text-center display-4">Pesquisar Chamado</h2>
    <div class="row">
    <div class="col-md-8 offset-md-4">
        <form name ="formp" id= "formp" method="POST">
            @csrf
            <input class="center col-md-2 offset-md-1" type="text" name="nprotocolo" id="nprotocolo" placeholder="Numero de protocolo:">
            <input class ="btn btn-primary" type="submit" value="Enviar">
            </form>
    </div>
    </div>
    </div>

    
@endsection