
<?php require __DIR__ . '/html/inicio.php'; ?>
		<table border>
			<tr>
				<th>nome:</th>
				<th>idade:</th>
				<th>excluir</th>
			</tr>
				<?php 
				 $pdo = require_once "DB/connect.php";
				 try{
				 	$sqlSelecionar = "SELECT id,nome,idade FROM usuarios";
				 }catch(Exception $e){
					 echo "Error". $e->getMessage();
				 }
				?>
				<?php foreach($pdo->query($sqlSelecionar) as $row): ?>
	 			<tr class=''>
	 				<td class="texto_lista_usuarios"><?php echo $row["nome"]; ?></td>
	 				<td class="texto_lista_usuarios"><?php echo $row["idade"]; ?></td>
	 				<td class="texto_lista_usuarios"><a href="excluir.php?id=<?php echo $row['id'] ?>">Excluir usuario</a></td>
	 			</tr>
		 </table>
		 <?php 	
		 endforeach ; 
			
		?>
		</div>
		<div id="footer">
		</div>
	</body>
</html>
