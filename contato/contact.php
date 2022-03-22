<?php
	require("database.php");
	$cartSize = 0;
	if (isset($_COOKIE["User"])) {
		$email = $_COOKIE["User"];
		$name = Database::query("SELECT name FROM user WHERE email = ?", [$email]);
		$username = $name[0]['name'];
		$userID = Database::query("SELECT id FROM user WHERE email = ?", [$email]);
		$cartResult = Database::query("SELECT * FROM cart WHERE user_id = ?", [$userID[0]["id"]]);
		$cartSize = PHPFunctions::GetCartSize();
	}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Storm Store | Loja Virtual</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Storm Store | Loja Virtual">
	<meta name="keywords" content="storm store, loja virtual, ecommerce, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>
	<script src="//code.jivosite.com/widget/9ztndZFq3r" async></script>

	<!-- Google Fontes -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="/StormStore/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/StormStore/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="/StormStore/css/flaticon.css"/>
	<link rel="stylesheet" href="/StormStore/css/slicknav.min.css"/>
	<link rel="stylesheet" href="/StormStore/css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="/StormStore/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="/StormStore/css/animate.css"/>
	<link rel="stylesheet" href="/StormStore/css/style.css"/>
    <link rel="stylesheet" href="/StormStore/css/carousel.css"/>

</head>
<body>
<!--------------------------------------------------------------------------------------------------------------------
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
HEADER 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
----------------------------------------------------------------------------------------------------------------------><header class="header-section">
	<div class="header-top">
		<div class="container">
			<div >
					
				<!------------------- 
				LOGO 
				-------------------->					
				<center>
					<a href="/StormStore/index.php" class="site-logo">
						<img src="/StormStore/img/logo.jpeg" alt="">
					</a>
				<center>
				
					<script>
						var adicionar = true;
						var opt = document.createElement('option');

						for(i=0, i<lista.options.length; i++;){
							if(texto==lista.options[i].value){
								adicionar=false;
							}
						}
						if(adicionar==true){
							opt.value=texto;
							lista.appendChild(opt);
						}
					</script>
				<br>
				<hr>
				<!------------------- 
				LOGIN E CADASTRO 
				-------------------->

				<div class="col-xl-4 col-lg-5">
					<div class="user-panel">
						<div class="up-item">
						<i class="flaticon-profile"></i>	
						<div class="dropdown" style="display: inline-block;">
					
						<?php
								if (isset($_COOKIE["User"])) 
								echo 
								'<div class="dropdown">
								<button class="dropbtn">' . $name[0]["name"] .  '</button>
								<div class="dropdown-content">
								  <a href="/StormStore/admin/index.php">Conta</a>
								  <a href="/StormStore/account/logout.php">Sair</a>
								</div>
							  	</div>';
								else echo '<div class="dropdown">
								<button class="dropbtn">Área do Usuário</button>
								<div class="dropdown-content">
								  <a href="/StormStore/account/login.php">Login</a>
								  <a href="/StormStore/account/register.php">Cadastro</a>
								</div>
								  </div>'
						?>
							<style>
											.dropbtn {
											background-color:white;
											color: black;
											padding: 16px;
											font-size: 16px;
											border: none;
											direction: flex;
											}

											.dropdown {
											position: relative;
											display: inline-block;
											}

											.dropdown-content {
											display: none;
											position: absolute;
											background-color: white;
											min-width: 160px;
											box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.3);
											z-index: 1;
											}

											.dropdown-content a {
											color: black;
											padding: 12px 16px;
											text-decoration: none;
											display: block;
											}

											.dropdown-content a:hover {background-color: white;}

											.dropdown:hover .dropdown-content {display: block;}

											.dropdown:hover .dropbtn {background-color: white;}
							</style>
						</div>
						</div>
						
						<div class="up-item">
							<div class="shopping-card">
								<i class="flaticon-bag"></i>
								<span><?php echo $cartSize;?></span>
							</div>
							<a style="cursor:pointer" href="/StormStore/cart/cart.php">Lista de desejos</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<!--------------------------------------------------------------------------------------------------------------------
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
NAVEGADOR 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
---------------------------------------------------------------------------------------------------------------------->
	<br>
	<nav class="main-navbar">
		<div class="container">
			<ul class="main-menu" style='color:black'>
			<center>
				<li><a href="/StormStore/products/extra/category.php">LANÇAMENTOS</a></li>
				<li><a href="#">FEMININO</a>
					<ul class="sub-menu">
						<li><a href="/StormStore/products/feminino/camisa.php">Camisa</a></li>
						<li><a href="/StormStore/products/feminino/vestido.php">Vestido</a></li>
						<li><a href="/StormStore/products/feminino/calca.php">Calças</a></li>
						<li><a href="/StormStore/products/feminino/shorts.php">Shorts</a></li>
						<li><a href="/StormStore/products/feminino/sapato.php">Sapatos</a></li>
						<li><a href="/StormStore/products/feminino/tenis.php">Tênis</a></li>
					</ul>
				</li>
				<li><a href="#">MASCULINO</a>
					<ul class="sub-menu">
						<li><a href="/StormStore/products/masculino/camisa.php">Camisa</a></li>
						<li><a href="/StormStore/products/masculino/camiseta.php">Camiseta</a></li>
						<li><a href="/StormStore/products/masculino/calca.php">Calça</a></li>
						<li><a href="/StormStore/products/masculino/shorts.php">Shorts</a></li>
						<li><a href="/StormStore/products/masculino/sapato.php">Sapato</a></li>
						<li><a href="/StormStore/products/masculino/tenis.php">Tênis</a></li>
					</ul>
				</li>
				<li><a href="#">INFANTIL</a>
					<ul class="sub-menu">
						<li><a href="/StormStore/products/infantil/camisa.php">Camisa</a></li>
						<li><a href="/StormStore/products/infantil/calca.php">Calça</a></li>
						<li><a href="/StormStore/products/infantil/sapato.php">Sapato</a></li>
						<li><a href="/StormStore/products/infantil/shorts.php">Shorts</a></li>
						<li><a href="/StormStore/products/infantil/vestido.php">vestido</a></li>
					</ul>
				</li>
				<li>
					<a href="/StormStore/products/extra/acessorios.php">ACESSÓRIOS</a>
				</li>	
						
			
						
								<style> 
										.text[type=text] {
									width: 130px;
									box-sizing: border-box;
									border: 2px solid #ccc;
									border-radius: 5px;
									font-size: 16px;
									background-color: white;
									background-image: url('searchicon.png');
									background-position: 10px 10px; 
									background-repeat: no-repeat;
									padding: 12px 20px 12px 40px;
									-webkit-transition: width 0.4s ease-in-out;
									transition: width 0.4s ease-in-out;
										}

										.text[type=text]:focus {
									width: 76%;}
								</style>
				</ul>
			</center>
		</div>
	</nav>

<center>
<div class="col-xl-6 col-lg-5">

	<form class="header-search-form" class="form-inline" method="GET" action="/StormStore/search/pesquisar.php">
		<label for="exampleInputName2"></label>
		<input type="text" name="pesquisar" class="form-control" style="margin-top: 6px;" id="exampleInputName2" placeholder="O que você procura?">	<button><i class="flaticon-search"></i></button>
	
		</div>
	</form><br>
</div>
</center>




	<br>


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Formulário de Contato</h4>
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
	?>
	<!-- Contact section -->
	<section class="contact-section" >
		<div class="container">
			<div class="row">
				<div class="col-lg-6 contact-info">
					<h3>Entre em contato</h3>
					<p>IFSP - Catanduva</p>
					<p>+55 17 997059845</p>
					<p>storm.store@gmail.com</p>
					<div class="contact-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
					
					
					<form class="contact-form" action="proc_email.php">
						<input type="text" name='nome'placeholder="Nome">
						<input type="email" name='email'placeholder="Seu e-mail">
						<textarea placeholder="Digite aqui o assunto. Máximo de 1500 caracteres." type="text" name='assunto'></textarea>
						<button type="submit"class="site-btn">Enviar</button>
					</form>
				</div>
			</div>
		</div>
		<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14884.500010195117!2d-48.950209864308476!3d-21.14742308791992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfd91610ebf33dcbf!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20de%20S%C3%A3o%20Paulo%2C%20Campus%20Catanduva!5e0!3m2!1spt-BR!2sbr!4v1600736540809!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
	</section>
	<!-- Contact section end -->

	<br>
	<br>

	

	<!--====== Javascripts & Jquery ======-->
	<script src="/StormStore/js/jquery-3.2.1.min.js"></script>
	<script src="/StormStore/js/bootstrap.min.js"></script>
	<script src="/StormStore/js/jquery.slicknav.min.js"></script>
	<script src="/StormStore/js/owl.carousel.min.js"></script>
	<script src="/StormStore/js/jquery.nicescroll.min.js"></script>
	<script src="/StormStore/js/jquery.zoom.min.js"></script>
	<script src="/StormStore/js/jquery-ui.min.js"></script>
	<script src="/StormStore/js/main.js"></script>

	</body>
</html>
