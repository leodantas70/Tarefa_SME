@extends('templates.template')
@section ('body')
<h1 class="text-center"> Ordem de Serviço </h1>
<div class="container-fluid"><br/><br/>
    <h2 class="text-center display-4">Chamado</h2>
    </div>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
        <th>Numero Protocolo</th>
        <th>Usuario</th>
        <th>Date</th>
        <th>Status</th>
        <th>Mensagem</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($nprotocolo as $msg)
                
            
        <tr data-widget="expandable-table" aria-expanded="false">
        <td>{{$msg->nprotocolo}}</td>
        <td>{{$protocolo->email}}<</td>
        <td>{{$protocolo->created_at}}</td>
        <td>{{$protocolo->ativo}}</td>
        <td>{{$msg->mensagem}}</td>
        </tr>
        @endforeach
        </tbody>
        
    </table>

    <h1 class="text-center"> Enviar mensagem </h1>
    <div class="text-center">
        <form name="formmsg" id="formmsg" method="POST" action="{{url("mostrarordemm")}}">
        @csrf
        <input class ="form-control" type="text" name="mensagem" id="mensagem" placeholder="Mensagem:">      
        <input class ="form-control" type="hidden" name="protocolo" id="protocolo" value="{{ $protocolo->protocolo }}">  
        <input class ="btn btn-primary" type="submit" value="Enviar">
        </form>
    </div> 

    <a href="{{url("")}}">  <br/>
        <div class="text-center"> 
        <button  type="submit" class="btn btn-primary">Voltar</button><br/>  
        </a></div>
@endsection