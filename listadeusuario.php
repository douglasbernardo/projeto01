<?php
	include 'DB/connect.php';

	if (!empty($_POST["NOME"]) && !empty($_POST["SOBRENOME"]) && !empty($_POST["IDADE"]) && !empty($_POST["tipos"])) {
		$sql = "INSERT INTO usuarios (NOME, SOBRENOME, IDADE, TIPO) VALUES ('".$_POST["NOME"]."', '".$_POST["SOBRENOME"]."', '".$_POST["IDADE"]."', '".$_POST["tipos"]."')";
		mysqli_query($link, $sql);
	}
?>
<!Doctype html>
<html>
	<head>
		<title>projeto_01</title>
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
				<a href="cadastrar.php" class="btn secondary">Cadastre-se</a>
				<a href="#" class="btn third">Lista de Usuários</a>
				<a href="tiposdeusuario.php" class="btn fourth">Tipos de Usuários</a>
				<a href="sobre.php" class="btn danger">Sobre</a>
			</div>
		</div>
		<div id="content">
			<table border>
				<tr>
					<th>Id:</th>
					<th>Nome:</th>
					<th>Idade:</th>
				</tr>
			 	<?php 
				 	$sql = "SELECT * FROM usuarios";
					$query = mysqli_query($link, $sql);

					$i = 0;
					while($usuarios = mysqli_fetch_array($query)) {
				?>
						<tr class=<?php if($i%2 == 0) { echo "#DCDCDC"; } else { echo "silver"; } ?>>
						 	<td class="texto_lista_usuarios"><?php echo $usuarios[0]; ?></td>
						 	<td class="texto_lista_usuarios"><?php echo $usuarios[1]." ".$usuarios[2]; ?></td>
						 	<td class="texto_lista_usuarios"><?php echo $usuarios[3]; ?></td>
						 	<td>
						 		<a href="exibe.php?id=<?php echo $usuarios[0]; ?>">Alterar</a>
						 	</td>
						 	<td>
						 		<a href="delete.php">Deletar</a></td>
						</tr>
				<?php	
						$i++;		
				 	}
			 	?>	
 			</table>
		</div>
		<div id="footer">

		</div>
	</body>
</html>
