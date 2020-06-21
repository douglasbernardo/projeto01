
<?php require __DIR__ . '/html/inicio.php'; ?>
			<form action="inserirUsuario.php" method="POST">
				<br>
				<div>
					<label for="nome">Nome:</label>
					<input type="text" id="nome" name="nome" placeholder="Nome" autocomplete="off"><br><br>
				</div>
				<label for="idade">Idade:</label>
				  <input type="number" id="idade" name="idade" placeholder="Idade" autocomplete="off"><br><br>
				  <button>cadastrar</button>
			</form>
		</div>
		<div id="footer">
		</div>
	</body>
</html>