<html>

	
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Tema opcional -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Última versão JavaScript compilada e minificada -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<title>Listar Clientes</title>
	</head>
<body>

<div class="container">

	<h1>Listar Clientes</h1>		
	<table class="table table-striped table-bordered table-hover">
		<tr>
		<td>ID</td>
		<td>Nome</td>
		<td>Ação</td>
		</tr>
		
		<?php
			foreach ($nomes as $key => $value){
				echo "<tr>";
				echo "<td>".$key."</td>";				
				echo "<td>".$value."</td>";

				echo "<td>teste</td>";				
				echo "<td>";
				echo "<a href='".action("clienteController@editar", $key)."'><span class='glyphicon glyphicon-pencil' />";

				echo "</a>";

				echo "&nbsp";
				echo "<a href='".action("clienteController@editar", $key)."'><span class='glyphicon glyphicon-remove' /></a>";
				
				echo "</td>";

				
				echo "</tr>";

			}

		?>

</table>

</body>

</html>