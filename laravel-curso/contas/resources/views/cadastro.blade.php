@extends('principal')

@section('title', 'Cadastro de Contas')




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
<h1>Cadastro de Contas</h1>

<form action="{{action('ContasPagarController@salvar')}}" method="POST">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <input type="hidden" name="insert" value="insert" />

    <div class="form-group">
        <label>Descrição: </label>
        <input type="text" name="descricao" class="form-control"></input>
    </div>
    <div class="form-group">
        <label>Valor: </label>
        <input type="text" name="valor" class="form-control"></input>
    </div>
    
    <button type="submit" class="btn btn-success">Cadastrar</button>

</form>
@stop