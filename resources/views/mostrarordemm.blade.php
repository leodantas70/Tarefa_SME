@extends('templates.template')
@section ('body')
<h1 class="text-center"> Ordem de Serviço </h1>
<div class="container-fluid "><br/><br/>
    <h2 class="text-center display-4">Chamado</h2>
</div>
    <div class ="col-md-8 container-fluid">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
        <th>Numero Protocolo</th>
        <th>Usuario</th>
        <th>Date</th>
        <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($Chamados as $Chamado)            
        <tr data-widget="expandable-table" aria-expanded="false">
        <td>{{$Chamado->protocolo}}</td>
        <td>{{$Chamado->email}}<</td>
        <td>{{$Chamado->created_at}}</td>
        <td>{{$Chamado->ativo}}</td>
        @endforeach
        </tr>
    </tbody>
        <thead>
            <tr>
            <th>Mensagens</th>
            </tr>
        </thead>
            <tbody>
        @foreach ($Mensagens as $Mensagem)
        <tr class="list-group-item list-group-item-success"><td>{{$Mensagem->mensagem}}</td></tr>
        @endforeach
    </tbody>        
    </table>
    </div>
    <h1 class="text-center"> Enviar mensagem </h1>
    <div class="text-center">
        <form name="formmsg" id="formmsg" method="POST" action="{{url("mostrarordemm")}}">
        @csrf
        <input class ="form-control" type="text" name="mensagem" id="mensagem" placeholder="Mensagem:">
        @foreach ($Mensagens as $Mensagem) <input class ="form-control" type="hidden" name="protocolo" id="chamado_id" value="{{ $Mensagem->chamado_id }}">    @endforeach
        <input class ="btn btn-primary" type="submit" value="Enviar">
        </form>
    </div> 

    <a href="{{url("")}}">  <br/>
        <div class="text-center"> 
        <button  type="submit" class="btn btn-primary">Voltar</button><br/>  
        </a>
        </div>
@endsection