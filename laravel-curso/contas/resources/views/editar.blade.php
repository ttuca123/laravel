@extends('principal')

@section('title', 'Editar Conta')

@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach
        </ul>
    </div>
    
@endif
@section('content')


<h1>Editar Conta - {{$contas_pagar->id}}</h1>
<form action="{{action('ContasPagarController@update', $contas_pagar->id)}}" method="POST">

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <input type="hidden" name="update" value="update" />

    <div class="form-group">
        <label>Descrição: </label>
        <input type="text" name="descricao" class="form-control" value="{{ $contas_pagar->descricao }}">
        </input>
    </div>
    <div class="form-group">
        <label>Valor: </label>
        <input type="text" name="valor" class="form-control" value="{{ $contas_pagar->valor}}"></input>
    </div>
    
    <button type="submit" class="btn btn-success">Salvar</button>

</form>