
@extends('principal')
@section('content')

<h1>Editar Cliente <?php echo $id; ?></h1>
	

	<form>
		<div class="input-group input-group-lg">
			<span class="input-group-addon" id="sizing-addon1">Nome</span>
			<input type="text" class="form-control" placeholder="Digite seu nome" aria-describedby="sizing-addon1" name="" />
		</div>
		
		<br/>
		<div class="input-group input-group-lg">
			<span class="input-group-addon" id="sizing-addon1">Email</span>
			<input type="text" class="form-control" placeholder="Digite seu email" aria-describedby="sizing-addon1" name="" />
		</div>	
		<br/>

		<div class="input-group input-group-lg">
			<span class="input-group-addon" id="sizing-addon1">Telefone</span>
			<input type="text" class="form-control" placeholder="Digite seu telefone" aria-describedby="sizing-addon1" name="" />
		</div>	
		
		<br/>
		<input class="jumbotron" type="submit" name="" value="Cadastrar">
	</form>
	<a href="<?php echo action("clienteController@listar"); ?>">Listar Clientes </a>

	@stop

