<?php
	include_once("conexao.php");	
	include("database.php");
	if((isset($_COOKIE['User']))){
		
		$result_usuario = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
		$resultado_usuario = mysqli_query($conexao, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		if(isset($resultado)){

			$_SESSION['usuarioNiveisAcessoId'] = $resultado['nivel'];
			if($_SESSION['usuarioNiveisAcessoId'] == "1"){
				header("Location: ../admin/usuario/index.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
				header("Location: cliente.php?id=" . $resultado['id'] . "");
			}else{
				header("Location: index.php");
			}
		}
	}
?>