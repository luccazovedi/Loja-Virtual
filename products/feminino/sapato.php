<?php
	require("../database.php");
	$products = Database::query("SELECT * FROM products WHERE product_type = 'sapato' AND sex = 'feminino'");
	$cartSize = 0;
	if (isset($_COOKIE["User"]))
		$cartSize = PHPFunctions::GetCartSize();
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
	
	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>SAPATO</h4>
		</div>
	</div>
	<!-- Page info end -->

<!--------------------------------------------------------------------------------------------------------------------
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
PRODUTOS 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
---------------------------------------------------------------------------------------------------------------------->

	<?php
						
						
						if (isset($_COOKIE["User"])) 
								for ($i = 0; $i < sizeof($products); $i++) {
									$name = $products[$i]["name"];
									$price = $products[$i]["price"];
									$id = $products[$i]["id"];
									$type = $products[$i]["product_type"];
									$marca= $products[$i]["marca"];
									$conteudo= $products[$i]["conteudo"];
									$tam= $products[$i]["size"];
									$qtd= $products[$i]["qtd"];

									if (HasInCart($_COOKIE["User"], $id) == 1) $hasInCart = true;
									else $hasInCart = false;
									
										if ($hasInCart) {
											$buttonText = "REMOVER";
											$backgroundColor = "#87CEEB";
										} else {
											$buttonText = "ADICIONAR";
											$backgroundColor = "#red";
										}
	
									echo "<center>
									<div class='card'style='width: 20.5em; padding:20px; margin: 30px'>		
									<div style='display: grid;   margin: 0px; 'class='container-fluid grid'>
										<div class='product-item'>
											<div class='pi-pic'>
											<img src='/StormStore/img/logo.jpeg'>
												<div class='pi-links'>
													<a href='#' class='add-card' product_id='$id' style='background-color: $backgroundColor;'><i class='flaticon-bag'></i><span>$buttonText</span></a>
												</div>
											</div>
											<div class='pi-text'>
												<h6>$price</h6>
												<p style='text-align: left;'>$name</p>
												<p style='text-align: left;'>Em estoque: $qtd</p>
												<p style='text-align: left; font-size: 15px;'> Produto da $marca , $conteudo, tamanho $tam</p>
											</div><br>
										</div>			
										</div>								<hr>
									</div></center>
									";
								}else {
								echo "<br><br><center><h4>Você não está logado. Logue <a href='../account/login.php'>aqui</a> e volte para poder acessar todos os produtos disponíveis!</h4><br><br></center>";}
							
	
								function HasInCart($email, $productID) {
									$userID = Database::query("SELECT id FROM user WHERE email = ?", [$email]);
									$result = Database::query("SELECT cart_id FROM cart WHERE user_id = ? AND product_id = ?", [$userID[0]["id"], $productID]);
									return sizeof($result);
								}
							?>
							
				
<!--------------------------------------------------------------------------------------------------------------------
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
RODAPÉ 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
---------------------------------------------------------------------------------------------------------------------->

<style>
  .bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
  }

  @media (min-width: 768px) {
	.bd-placeholder-img-lg {
	  font-size: 3.5rem;
	}
  }
</style>

<div class="social-links-warp">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget about-widget">
				<center>
					<h2 style="color: black;">SOBRE</h2>
					</center>					<p style="color: black;">Trabalho de Conclusão de Curso, desenvolvido por Lucca Zovedi, Pedro Zonca da Silva, Maycon Gius de Lima, Felipe Piccinin Creste e João Vitor Bolognini.</p>
					<img src="img/cards.png" alt="">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget about-widget">
				<center>
					<h2 style="color: black;">OPÇÕES</h2>
					</center>					<ul>
						<li><a href="" style="color: black;">Sobre nós</a></li>
						<li><a href="contact.html" style="color: black;">Entre em contato</a></li>
						<li><a type="button" style='cursor: pointer;color:black'data-toggle="modal" data-target="#ExemploModalCentralizado">
							  Termos de Uso</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget contact-widget">
				<center>
					<h2 style="color: black;">INFORMAÇÕES</h2>
					</center>					
					<div class="con-info">
						<span>END.</span>
						<p style="color: black;">IFSP - CATANDUVA </p>
					</div>
					<div class="con-info">
						<span>FONE</span>
						<p style="color: black;">+55 (17) 99548-4925</p>
					</div>
					<div class="con-info">
						<span>EMAIL</span>
						<p style="color: black;">StomeStoreVirtualLoja@gmail.com</p>
					</div>
				</div>

			</div>

			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget about-widget">
					<center>
					<h2 style="color: black;">REDES SOCIAIS</h2>
					</center>

					<div class="social-links">
						<a href="https://www.instagram.com/storm.store.virtual/" class="instagram"><i class="fa fa-instagram"></i><span>INSTAGRAM</span></a><br><br>
						<a href="https://facebook.com/StormStore" class="facebook"><i class="fa fa-facebook"></i><span>FACEBOOK</span></a><br><br>
						<a href="https://twitter.com/StormStore1" class="twitter"><i class="fa fa-twitter"></i><span>TWITTER</span></a><br>
					</div>
				</div>
			</div>
		</div>
	</div>
		<center>
		<div>
			<buttom><a href="#" id="subir">Volte ao Topo</a></buttom>
		</div>
		</center>
<style>
	#subir{
		border-color: black;
		cursor: pointer;
		border-radius: 50px;
		color: black; 
		padding: 12px 50px; 
		font-size: 18px"
	}
</style>
<script>
	$(document).ready(function() {
	$('#subir').click(function(){
		$('html, body').animate({scrollTop:0}, 'slow');
		return false;
	});
	});
</script>
			<p class="text-black text-center mt-5">Todos os Direitos reservados. | Storm Store 2020</p>
			

			<!-- Modal -->
			<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="TituloModalCentralizado">Termo de Uso e Responsabilidades</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" style='color:black'data-dismiss="modal">Fechar</button>
					</div>
					</div>
				</div>
			</div>
		</div>
</div>

	<!--====== Javascripts & Jquery ======-->
	<script src="/StormStore/js/database/requiredb.js"></script>
	<script src="/StormStore/js/jquery-3.2.1.min.js"></script>
	<script src="/StormStore/js/bootstrap.min.js"></script>
	<script src="/StormStore/js/jquery.slicknav.min.js"></script>
	<script src="/StormStore/js/owl.carousel.min.js"></script>
	<script src="/StormStore/js/jquery.nicescroll.min.js"></script>
	<script src="/StormStore/js/jquery.zoom.min.js"></script>
	<script src="/StormStore/js/jquery-ui.min.js"></script>
	<script src="/StormStore/js/main.js"></script>
	<script src="/StormStore/js/cart.js"></script>
	<script>
		canReload = true;
	</script>

	</body>
</html>
