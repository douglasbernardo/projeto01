<!DOCTYPE html>
<html>
	<head>
		<title>projeto_01</title>
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<h1><abbr title="Projeto Little">PTL</abbr></h1>
			<div id="menu">
				<a href="index.php" class="btn primary">Home</a>
				<a href="#" class="btn secondary">Cadastrar</a>
				<a href="listadeusuario.php" class="btn secondary">Lista de Usuários</a>
				<a href="#" class="btn danger">Sobre</a>
			</div>
		</div>
		<!-- CADASTRAR -->
		<fieldset>
			<table cellspacing="10">
				<tr>
					<td>
						<label for="NOME">SEU NOME:</label>
					</td>
					<td>
						<input type="text" name="NOME">
					</td>
				</tr>
				<tr>
					<td>
						<label for="SOBRENOME">SOBRENOME:</label>
					</td>
					<td>
						<input type="text" name="SOBRENOME">
					</td>
				</tr>
				<tr>
					<td>
						<label for="IDADE">IDADE:</label>
					</td>
					<td>
						<input type="text" name="IDADE">
					</td>
				</tr>
			</table>
		</fieldset>
	</body>
</html>