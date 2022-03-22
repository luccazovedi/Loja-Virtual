<?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "stormstore";
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname)or die ('Não foi possível conectar');
?>