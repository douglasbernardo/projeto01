<?php
	include 'DB/connect.php';

	if (!empty($_POST["NOME"]) && !empty($_POST["SOBRENOME"]) && !empty($_POST["IDADE"]) && !empty($_POST["tipos"])) {
		$sql = "INSERT INTO usuarios (NOME, SOBRENOME, IDADE, TIPO) VALUES ('".$_POST["NOME"]."', '".$_POST["SOBRENOME"]."', '".$_POST["IDADE"]."', '".$_POST["tipos"]."')";
		mysqli_query($link, $sql);
	}

	if (!empty($_GET["action"]) && $_GET["action"] == "delete") {
		echo "deletar esse id ".$_GET["id"];
		$sql = "DELETE FROM usuarios 	WHERE ID =".$_GET['id'];
		$queryUpdate = mysqli_query($link, $sql);
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
			<h2><abbr title="Projeto Little">PTL</abbr></h2>
			<div id="menu">
				<a href="index.php" class="btn primary">Home</a>
				<a href="cadastrar.php" class="btn secondary">Cadastre-se</a>
				<a href="#" class="btn third">Lista de Usuários</a>
				<a href="tiposdeusuario.php" class="btn fourth">Tipos de Usuários</a>
				<a href="sobre.php" class="btn danger">Sobre</a>
			</div>
		</div>
		<div id="content">
			<table border="1">
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
						 	<td class="alter">
						 		<a href="exibe.php?id=<?php echo $usuarios[0]; ?>"><input type="submit" value="ALTERAR">
						 	</td>
						 	<td class="delet">
						 		<a href="listadeusuario.php?action=delete&id=<?php echo $usuarios[0]; ?>"><input type="reset" value="DELETAR">
						 	</td>
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
