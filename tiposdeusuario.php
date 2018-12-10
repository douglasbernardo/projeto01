<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<h1><abbr title="Projeto Little">PTL</abbr></h1>
			<div id="menu">
				<a href="index.php" class="btn primary">Home</a>
				<a href="cadastrar.php" class="btn secondary">Cadastre-se</a>
				<a href="listadeusuario.php" class="btn third">Lista de Usuários</a>
				<a href="#" class="btn fourth">Tipos de Usuários</a>
				<a href="sobre.php" class="btn danger">Sobre</a>
			</div>
		</div>
		<form action="cadastrodetipo.php" method="post" name="form">
			<table>
				<tr>
					<td>
						<label for="tipodeusuario">Tipo: </label>
					</td>
					<td align="left">
						<input type="seutipo" name="tipodeusuario">
					</td>
					<td>
						<input type="submit" name="enviar">
					</td>
				</tr>
			</table>
		</form>	
	</body>
</html>
