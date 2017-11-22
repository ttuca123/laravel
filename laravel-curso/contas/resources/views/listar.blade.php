@extends('principal')

@section('title', 'Listagem de Contas')

@section('content')
<script type="text/javascript">

    function apagar(url){
        if(window.confirm('Deseja realmente apagar?')){
            
            window.location = url;
        }

    }

</script>

<h1 style="text-align: center;">Lista de Contas a Pagar </h1>

@if(old('insert'))
    <div class="alert alert-success">
     <strong>Sucesso! </strong> Cadastro realizado com sucesso
    </div>
@endif

@if(old('update'))
    <div class="alert alert-success">
     <strong>Sucesso! </strong>Dados alterados com sucesso
    </div>
@endif

<table width="100%" class="table table-striped table-bordered table-hover">
    <tr>
        <td>#</td>
        <td>Descrição</td>
        <td>Valor</td>
        <td>Editar</td>
        <td>Apagar</td>

    </tr>

    @foreach($contas_pagar as $value)
    <?php

        $contador=1;
    ?>
            <tr>
                
                <td><?php echo $contador++; ?></td>
                <td><?php echo $value->descricao; ?></td>
                <td><?php echo $value->valor; ?></td>
                <td><a class="btn btn-small btn-info" href="{{action('ContasPagarController@editar', $value->id)}}">Editar</a></td>
                <td><a class="btn btn-small btn-danger" href="#" onclick="apagar('{{action('ContasPagarController@apagar', $value->id)}}');">Apagar</a></td>
            </tr>        
    @endforeach

</table>
<a class="btn btn-small btn-info" href="{{action('ContasPagarController@cadastro')}}" >Novo</a>
@stop