<?php
	
	require_once ("resources/listaDeUsuarios.php");
?>
<!Doctype html>
<html>
	<head>
		<title>PTL projeto_01</title>
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link href="https://fonts.googleapis.com/css?family=Kanit|Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
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
				<th>nome:</th>
				<th>idade:</th>
				<th>excluir</th>
			</tr>
 			<?php 
 				?>
 				<?php
	 				while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
	 			//echo $listaDeUsuarios[$i]["nome"]." - ".$listaDeUsuarios[$i]["idade"]."<br>";
	 		?>
	 			<tr class=<?php if($row['id']%2 == 0) { echo "silver"; } else { echo "red"; } ?>>
	 				<td class="texto_lista_usuarios"><?php echo $row["nome"]; ?></td>
	 				<td class="texto_lista_usuarios"><?php echo $row["idade"]; ?></td>
	 				<td class="texto_lista_usuarios"><a href="excluir.php?id=<?php echo $row['id']; ?> ">Excluir Usuario</a></td>
	 			</tr>
	 		<?php			
	 			}
 			?>
 		</table>
		</div>
		<div id="footer">
		</div>
	</body>
</html>
