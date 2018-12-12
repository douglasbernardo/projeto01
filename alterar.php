<?php

include 'DB/connect.php';

?>


<!DOCTYPE html>
<html>
	<head>
			<title>projeto_01</title>
	</head>
	<body>
		<form method="post" action="alterar.php">
			<table cellspacing="3">
				<!-- CADASTRAR NOMES-->
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
				<tr>
					<td>
						<label>TIPO:</label>
					</td>
					<td>
						<select name="tipos">;
							<?php
								// Trazer do banco de dados todos os tipos disponíveis
								$sql = "SELECT * FROM tipo_usuarios";
								$query = mysqli_query($link, $sql);
								while ($row = mysqli_fetch_array($query)) {
									echo "<option value=".$row[0].">".$row[1]."</option>";
								}
								?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="ALTERAR">
					</td>
					<td>
						<input type="reset" value="CANCELAR">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php

$sql = "UPDATE 	from "

?>