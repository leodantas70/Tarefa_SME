@extends('templates.template')
@section ('body')
<h1 class="text-center"> Bem vindo a Tarefa_SME </h1>
    <div class="text-center">
    <a href="{{ url ("ordem") }} ">  <br/>
        <button  type="submit" class="btn btn-primary">Abrir Chamado</button><br/>  
    </a>
    </div>   

    <div class="container-fluid"><br/><br/>
            <h2 class="text-center display-4">Pesquisar Chamado</h2>
            <div class="text-center">
                <a href="{{ url ("mostrarordem") }}">
                    <button  type="submit" class="btn btn-primary">Pesquisar Chamado</button><br/>  
                </a>
            </div>
    </div>
    <div class="container-fluid"><br/><br/>
        <h2 class="text-center display-4">Painel Admin</h2>
        <div class="text-center">
            <a href="{{ url ("login") }}">
                <button  type="submit" class="btn btn-primary">Entrar</button><br/>  
            </a>
        </div>
    </div>
@endsection