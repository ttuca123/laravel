<html>
	<head>
		<title>Novo Cliente</title>
	</head>
<body>
<h1>Novo Cliente</h1>
	

	<form>
		Nome: <input type="text" name="" />
		<br/>
		Email: <input type="text" name="" />		
		<br/>
		Telefone: <input type="text" name="" />
		<br/>
		<input type="submit" name="" value="Cadastrar">
	</form>
	<a href="<?php echo action("clienteController@listar"); ?>">Listar Clientes </a>

</body>

</html>