<?php
	include 'resources/listaDeUsuarios.php';
?>
<!Doctype html>
<html>
	<head>
		<title>PTL</title>
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link href="https://fonts.googleapis.com/css?family=Kanit|Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<h1><abbr title="Projeto Little">PTL</abbr></h1>
			<div id="menu">
				<a href="index.php" class="btn primary">Home</a>
				<a href="#" class="btn secondary">Lista de Usuários</a>
				<a href="sobre.php" class="btn danger">Sobre</a>
			</div>
		</div>
		<div id="content">
		<table border>
			<tr>
				<th>id:</th>
				<th>nome:</th>
				<th>idade:</th>
			</tr>
 			<?php 
	 			for($i = 0; $i < count($listaDeUsuarios); $i++) {
	 			//echo $listaDeUsuarios[$i]["nome"]." - ".$listaDeUsuarios[$i]["idade"]."<br>";
	 		?>
	 			<tr class=<?php if($i%2 == 0) { echo "silver"; } else { echo "red"; } ?>>
	 				<td class="texto_lista_usuarios"><?php echo $i+1; ?></td>
	 				<td class="texto_lista_usuarios"><?php echo $listaDeUsuarios[$i]["nome"]; ?></td>
	 				<td class="texto_lista_usuarios"><?php echo $listaDeUsuarios[$i]["idade"]; ?></td>
	 			</tr>
	 		<?php			
	 			}
 			?>
 		</table>
		</div>
		<div id="footer">
			<h3 align="middle">PROJETO_01</h3>
		</div>
	</body>
</html>
