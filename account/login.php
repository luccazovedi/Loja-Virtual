<?php
	require("../database.php");	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Storm Store | Loja Virtual</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Storm Store | Loja Virtual">
	<meta name="keywords" content="storm store, loja virtual, ecommerce, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>
    <script src="../js/main.js"></script>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/flaticon.css"/>
	<link rel="stylesheet" href="../css/slicknav.min.css"/>
	<link rel="stylesheet" href="../css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>
	<link rel="stylesheet" href="../css/style.css"/>

	<style>
		.rememberPassword {
			height: 20px !important;
			flex: 1 !important;
		}

		.rpDiv {
			display: flex;
			flex-direction: row;
			width: 50%;
		}

		.rpDiv p {
			flex: 10;
		}

	</style>

</head>
<body>
<!-- Page info fim -->
	<div class="page-top-info" style="background-color: white;">
		<div class="container">
			<center>
				<a href="/StormStore/index.php" class="site-logo">
					<img src="../img/logo.jpeg" alt=""><br><br>
				</a>
			<center>
			
		</div>
		</div>
	</div>
<!-- Page info fim -->
<center>
	<h3>Área de Login</h3><br><br>
</center>	

<section class="contact-section">  
<div class="container">  
<div class="alert alert-danger" role="alert">
  Não identificamos seu login! Você será redirecionado automaticamente para página inicial ao verificarmos suas credenciais!
</div>
<form  class="contact-form"  method="POST" action="../database.php">
     <div class="container">
      <label><b>Digite seu e-mail:</b></label>
      <input type="text" placeholder="exemplo@exemplo.com" name="usuario" class="email">
      
      <label><b>Digite sua senha:</b></label>
      <input type="password" placeholder="exemplo123" name="senha" id='senha'class="password">
		<br><br>
		<div class="rpDiv">
			<input type="checkbox" class="rememberPassword">
			<p style="color: black;">Lembrar senha</p>

		</div>
		<div class="rpDiv">
			<input type="checkbox" onclick="mostrarSenha()"class="rememberPassword">
			<p style="cursor: pointer;background-color:white;color: black;position:relative"type="button" >Mostrar Senha</p>
		</div>

		<button type="submit" class="enviarbtn" style=" border-radius:10px;background-color:#3CB371;color: white;padding: 14px 20px;  margin: 8px 0;border: none;cursor: pointer;width: 100%;">
				Enviar</button>
		<hr>
		<center>
			<buttom class="btn default"style="cursor: pointer;border-radius: 60px; color: black; padding: 12px 50px; font-size: 18px"><a href="./recuperarsenha.php" style="text-decoration: none;">Esqueceu sua senha?</a></buttom>
			<br><br>
			<buttom class="btn default" style="cursor: pointer;border-radius: 50px; text-decoration:none;color: white; padding: 12px 50px; font-size: 18px"><a href="./register.php">Clique aqui para cadastrar-se</a></buttom>
			<br><br>
			<buttom class="bnt default" style="text-decoration: none;cursor: pointer;border-radius: 50px; color: white; padding: 12px 50px; font-size: 18px"> <a href="../index.php">Volte para página inicial</a></buttom>
		</center>

		</div>
		</div>
	</form>

	<br><br><br>
<script>
			function mostrarSenha(){
				var tipo = document.getElementById("senha");
				if(tipo.type == "password"){
					tipo.type = "text";
				}else{
					tipo.type = "password";
				}
			}
</script>
</div>
<style>

	.default {
	border-color: #e7e7e7;
	color: black;
	}

	.default:hover {
	background: #e7e7e7;
	}
</style>
<!-- Fim Formulário -->

<!--====== Javascripts e Jquery ======-->
<script src="../js/database/requiredb.js"></script>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.slicknav.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.nicescroll.min.js"></script>
<script src="../js/jquery.zoom.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/login.js"></script>

</body>
</html>