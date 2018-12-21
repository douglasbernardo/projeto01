<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<h2><abbr title="Projeto Little">PTL</abbr></h2>
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
						<label for="tipodeusuario">TIPO: </label>
					</td>
					<td align="left">
						<input type="text" name="tipo">
					</td>
					<td class="btns">
						<input type="submit" value ="ENVIAR">
					</td>
					<td class="btl">
						<input type="reset" value="CANCELAR">
					</td>
				</tr>
			</table>
		</form>	
		<div id="footer">

		</div>
	</body>
</html>
