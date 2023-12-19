@extends('templates.template')
@section ('body')
<h1 class="text-center"> Bem vindo a Tarefa_SME </h1>
<h2 class="text-center"> O seu numero de protocolo é:
    <div class="text-center"> 
    <input class="text-center" type="text" name="protocolo" id="protocolo" value="{{ $protocolo }}"></h2>  
    <a href="{{url("")}}">  <br/>
    <div class="text-center"> 
    <button  type="submit" class="btn btn-primary">Voltar</button><br/>  
    </a></div>
    </div>

    

@endsection