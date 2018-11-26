<?php
	/**
	 Estabelece uma conexão com o banco de dados MySQL local
	*/

	# Dados para conexão com o banco de dados
	$servidor = 'localhost';
	$usuario  = 'root';
	$senha    = "";
	$banco    = 'ESTUDOS';

	# Executa uma conexão com o banco de dados
	$link = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Não foi possível conectar: ".mysqli_connect_error());
?>