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
        <tr data-widget="expandable-table" aria-expanded="false">
        <td>{{$protocolo->protocolo}}</td>
        <td>{{$protocolo->nome}}<</td>
        <td>{{$protocolo->created_at}}</td>
        <td>{{$protocolo->Status}}</td>
        <td>{{$protocolo->mensagem}}</td>
        </tr>
        </tbody>
            
        

        </table>
    
@endsection