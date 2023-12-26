@extends('templates.template')
@section ('body')
<br>
<h1 class="text-center"> Abrir Chamado </h1><br><br>
    <div class="text-center">
        <div class="col-md-3 container-fluid">
        <form name ="formcad" id= "formcad" method="POST">
        @csrf
        <input class ="form-control" type="text" name="email" id="email" placeholder="Email:"><br>
        </div>
        <textarea name="mensagem" id="mensagem" placeholder="Mensagem:" rows="5" cols="60"></textarea>      
        <input class ="form-control" type="hidden" name="protocolo" id="protocolo" value="{{ $numero_protocolo }}">  <br>
        <input class ="btn btn-primary" type="submit" value="Enviar">
        </form>
        <a href="{{url("")}}">  
            <div class="text-center"> <br>
            <button  type="submit" class="btn btn-primary">Voltar</button>
            </a>
    </div> 
    
@endsection 
