@extends('templates.template')
@section ('body')



<h1 class="text-center"> Abrir Chamado </h1>
    <div class="text-center">
        <form name ="formcad" id= "formcad" method="POST">
        @csrf
        <input class ="form-control" type="text" name="nome" id="nome" placeholder="Nome:">
        <input class ="form-control" type="text" name="email" id="email" placeholder="Email:">
        <input class ="form-control" type="text" name="mensagem" id="mensagem" placeholder="Mensagem:">      
        <input class ="form-control" type="hidden" name="protocolo" id="protocolo" value="{{ $numero_protocolo }}">  
        <input class ="btn btn-primary" type="submit" value="Enviar">
        </form>
    </div> 
@endsection 
