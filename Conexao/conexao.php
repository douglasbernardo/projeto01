<?php


class conexao
{

    public static function PegarConexao()
    {
		$link = new PDO('mysql:host=localhost;dbname=estudos', "root", "");
		$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


		return $link; 
	}
}

