<?php
	include 'resources/listaDeUsuarios.php';

	// echo "<pre>";
	// var_dump($listaDeUsuarios);
?>
<!Doctype html>
<html>
	<head>
		<title>projeto_01</title>
		<link rel="stylesheet" type="text/css" href="css/css.css">
	</head>
	<body>
		<div id="header">
			<h1>1º-Projeto</h1>
			<div id="menu">
				<a href="index.php" class="btn primary">Home</a>
				<a href="#" class="btn secondary">Lista de Usuários</a>
				<a href="sobre.php" class="btn danger">Sobre</a>
			</div>
		</div>
		<div id="content">
 			<?php
	 			for($i=0;$i < count($listaDeUsuarios);$i++)
	 			$listaDeUsuarios[$i];
 			?>
		</div>
		<div id="footer"></div>
	</body>
</html>