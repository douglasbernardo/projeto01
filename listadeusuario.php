<?php
	
	require_once ("resources/listaDeUsuarios.php");
?>

<?php require __DIR__ . '/html/inicio.php'; ?>
		<table border>
			<tr>
				<th>nome:</th>
				<th>idade:</th>
				<th>excluir</th>
			</tr>
 				<?php while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) : ?>
	 			<tr class=<?php if($row['id']%2 == 0) { echo "silver"; } ?>>
	 				<td class="texto_lista_usuarios"><?php echo $row["nome"]; ?></td>
	 				<td class="texto_lista_usuarios"><?php echo $row["idade"]; ?></td>
	 				<td class="texto_lista_usuarios"><a href="excluir.php?id=<?php echo $row['id'] ?>">Excluir usuario</a></td>
	 			</tr>
	 		<?php endwhile ?>
 		</table>
		</div>
		<div id="footer">
		</div>
	</body>
</html>
