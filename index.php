<?php
	session_start();
	require("./database.php");
	$cartSize = 0;
	if (isset($_COOKIE["User"])) {
		$email = $_COOKIE["User"];
		$name = Database::query("SELECT name FROM user WHERE email = ?", [$email]);
		$cartSize = PHPFunctions::GetCartSize();
	}
	$cartSize = 0;
	if (isset($_COOKIE["User"])) {
		$email = $_COOKIE["User"];
		$name = Database::query("SELECT name FROM user WHERE email = ?", [$email]);
		$username = $name[0]['name'];
		$userID = Database::query("SELECT id FROM user WHERE email = ?", [$email]);
		$cartResult = Database::query("SELECT * FROM cart WHERE user_id = ?", [$userID[0]["id"]]);
		$cartSize = PHPFunctions::GetCartSize();
	}
	$cartSize = 0;
	if (isset($_COOKIE["User"])){ 
		$cartSize = PHPFunctions::GetCartSize();
		$products = Database::query("SELECT * FROM products");
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
	<link href="./img/logo.jpeg" rel="shortcut icon"/>
	<script src="//code.jivosite.com/widget/9ztndZFq3r" async></script>
	<!-- Google Fontes -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/carousel.css"/>

</head>
<body>

<!-- Preloder -->
<div id="preloder">
	<div class="loader"></div>
</div>
<body onKeyDown='blockKeyCTRL(event);'></body>

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
					<a href="./index.php" class="site-logo">
						<img src="img/logo.jpeg" alt="">
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
						include('./account/conexao.php');
						$result_usuarios = "SELECT * FROM products";
						$resultado_usuarios = mysqli_query($conexao, $result_usuarios);
						$row_usuario = mysqli_fetch_assoc($resultado_usuarios);
								if (isset($_COOKIE["User"])) 
								echo 
								'<div class="dropdown">
								<button class="dropbtn">' . $name[0]["name"] .  '</button>
								<div class="dropdown-content">
								  <a href="./account/validar.php?id=' . $row_usuario['id'] . '">Conta</a>
								  <a href="./account/logout.php">Sair</a>
								</div>
							  	</div>';
								else echo '<div class="dropdown">
								<button class="dropbtn">
								Área do Usuário</button>
								<div class="dropdown-content">
								  <a href="./account/login.php">Login</a>
								  <a href="./account/register.php">Cadastro</a>
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
							<a style="cursor:pointer" href="./cart/cart.php">Lista de desejos</a>
							
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
				<li><a href="./products/extra/category.php">LANÇAMENTOS</a></li>
				<li><a href="#">FEMININO</a>
					<ul class="sub-menu">
						<li><a href="./products/feminino/camisa.php">Camisa</a></li>
						<li><a href="./products/feminino/vestido.php">Vestido</a></li>
						<li><a href="./products/feminino/calca.php">Calças</a></li>
						<li><a href="./products/feminino/shorts.php">Shorts</a></li>
						<li><a href="./products/feminino/sapato.php">Sapatos</a></li>
						<li><a href="./products/feminino/tenis.php">Tênis</a></li>
					</ul>
				</li>
				<li><a href="#">MASCULINO</a>
					<ul class="sub-menu">
						<li><a href="./products/masculino/camisa.php">Camisa</a></li>
						<li><a href="./products/masculino/camiseta.php">Camiseta</a></li>
						<li><a href="./products/masculino/calca.php">Calça</a></li>
						<li><a href="./products/masculino/shorts.php">Shorts</a></li>
						<li><a href="./products/masculino/sapato.php">Sapato</a></li>
						<li><a href="./products/masculino/tenis.php">Tênis</a></li>
					</ul>
				</li>
				<li><a href="#">INFANTIL</a>
					<ul class="sub-menu">
						<li><a href="./products/infantil/camisa.php">Camisa</a></li>
						<li><a href="./products/infantil/calca.php">Calça</a></li>
						<li><a href="./products/infantil/sapato.php">Sapato</a></li>
						<li><a href="./products/infantil/shorts.php">Shorts</a></li>
						<li><a href="./products/infantil/vestido.php">Vestido</a></li>
						<li><a href="./products/infantil/tenis.php">Tênis</a></li>
					</ul>
				</li>
				<li>
					<a href="./products/extra/acessorios.php">ACESSÓRIOS</a>
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

	<form class="header-search-form" class="form-inline" method="GET" action="./search/pesquisar.php">
		<label for="exampleInputName2"></label>
		<input type="text" name="pesquisar" class="form-control" style="margin-top: 6px;" id="exampleInputName2" placeholder="O que você procura?">	<button><i class="flaticon-search"></i></button>
	
		</div>
	</form>
</div>
</center>

<br>
</header>


<!---------------------------------------------------------------------------------------------------------
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
PRODUTOS 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
---------------------------------------------------------------------------------------------------------------------->
<br>
<hr>

<style>
	.row > .column {
	padding: 0 8px;
	}

	.row:after {
	content: "";
	display: table;
	clear: both;
	}

	.column {
	float: left;
	width: 25%;
	}

	.modal {
	display: none;
	position: fixed;
	z-index: 1;
	padding-top: 100px;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: black;
	}

	.modal-content {
	position: relative;
	background-color: #fefefe;
	margin: auto;
	padding: 0;
	width: 90%;
	max-width: 1200px;
	}

	.close {
	color: white;
	position: absolute;
	top: 10px;
	right: 25px;
	font-size: 35px;
	font-weight: bold;
	}

	.close:hover,
	.close:focus {
	color: #999;
	text-decoration: none;
	cursor: pointer;
	}

	.mySlides {
	display: none;
	}

	.cursor {
	cursor: pointer;
	}

	.prev,
	.next {
	cursor: pointer;
	position: absolute;
	top: 50%;
	width: auto;
	padding: 16px;
	margin-top: -50px;
	color: white;
	font-weight: bold;
	font-size: 20px;
	transition: 0.6s ease;
	border-radius: 0 3px 3px 0;
	user-select: none;
	-webkit-user-select: none;
	}

	.next {
	right: 0;
	border-radius: 3px 0 0 3px;
	}

	.prev:hover,
	.next:hover {
	background-color: rgba(0, 0, 0, 0.8);
	}

	.numbertext {
	color: #f2f2f2;
	font-size: 12px;
	padding: 8px 12px;
	position: absolute;
	top: 0;
	}

	img {
	margin-bottom: -4px;
	}

	.caption-container {
	text-align: center;
	background-color: black;
	padding: 2px 16px;
	color: white;
	}

	.demo {
	opacity: 0.6;
	}

	.active,
	.demo:hover {
	opacity: 1;
	}

	img.hover-shadow {
	transition: 0.3s;
	}

	.hover-shadow:hover {
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
</style>

<div class="row">
  <div class="column">
  <a href="./products/masculino/tenis.php">  <img src="./img/Tenis Nike.webp" style="width:100%" class="hover-shadow cursor"></a>
  </div>
  <div class="column">
   <a href="./products/masculino/tenis.php"> <img src="./img/men/tenismasc/Tenis Nike5.jpg" style="width:100%" class="hover-shadow cursor"></a>
  </div>
  <div class="column">
  <a href="./products/masculino/tenis.php">  <img src="./img/men/tenismasc/Tenis Puma.webp" style="width:100%" class="hover-shadow cursor"></a>
  </div>
</div>
<hr>
<br>



<div class="section-title">	
	<h2>DISPONÍVEIS PARA SUA CORRIDA</h2><br>
</div>
<div class="card-columns">
  <div class="card">
    <img class="card-img-top" src="./img/women/legging/Calça Fitness Mesclada Feminina - Feminino - Rosa.jpg" alt="Imagem de capa do card">
    <div class="card-body">
	  <h5 class="card-title">Calça Legging</h5>
	  <p class="card-text"><small class="text-muted">Feminino</small></p>

    </div>
  </div>
 
  
  <div class="card">
  <img class="card-img-top" src="./img/men/tenismasc/Tenis Olympikus.jpg" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Tenis Olympikus </h5>
      <p class="card-text"><small class="text-muted">Masculino</small></p>
    </div>
  </div>

  <div class="card">
  <img class="card-img-top" src="./img/men/tenismasc/Tenis Under Armour2.webp" alt="Imagem de capa do card">
    <div class="card-body">
	  <h5 class="card-title">Tenis Under Armour</h5>
	  <p class="card-text"><small class="text-muted">Masculino</small></p>

    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="./img/women/legging/Calça Feminina Legging Recorte Tela Marisa Preto.jpg" alt="Imagem de capa do card">
    <div class="card-body">
	  <h5 class="card-title">Calça Legging</h5>
	  <p class="card-text"><small class="text-muted">Feminino</small></p>

    </div>
  </div>
 
  
  <div class="card">
  <img class="card-img-top" src="./img/men/tenismasc/Tenis Adidas.jpg" alt="Imagem de capa do card">
    <div class="card-body">
	  <h5 class="card-title">Tenis Adidas</h5>
	  <p class="card-text"><small class="text-muted">Masculino</small></p>

    </div>
  </div>

  <div class="card">
  <img class="card-img-top" src="./img/women/tenis/TÊNIS ULTRABOOST SUMMER.RDY.jpg" alt="Imagem de capa do card">
    <div class="card-body">
	  <h5 class="card-title">Tenis Ultraboost </h5>
	  <p class="card-text"><small class="text-muted">Feminino</small></p>

    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
CARROSEL 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
---------------------------------------------------------------------------------------------------------------------->
<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="./img/banner-bg2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>NOVO MODELO</span>
							<h2>NIKE RUNNING</h2>
							<p>Nike, Inc. é uma empresa estadunidense de calçados, roupas, e acessórios fundada em 1972 por Bill Bowerman e Phillip Knight. A sua sede fica em Beaverton, no estado de Oregon, nos Estados Unidos. </p>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="./img/banner-bg3.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>NOVO MODELO</span>
							<h2>AIR JORDAN IV</h2>
							<p>Nike, Inc. é uma empresa estadunidense de calçados, roupas, e acessórios fundada em 1972 por Bill Bowerman e Phillip Knight. A sua sede fica em Beaverton, no estado de Oregon, nos Estados Unidos. </p>
						</div>
					</div>
	
				</div>
			</div>
		</div>
	
	</section>

<!--------------------------------------------------------------------------------------------------------------------
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
FILTRO 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
---------------------------------------------------------------------------------------------------------------------->
<hr>
<br>
<section class="product-filter-section">
			<div class="container">
				<div class="section-title">
				
					<h2>VEJA ALGUNS PRODUTOS</h2>
				</div>
				<ul class="product-filter-menu">
					<center>
					<button class="btn" onclick="filterSelection('tudo')"> Tudo</button>
					<button class="btn" onclick="filterSelection('pecas')">Últimas peças</button>
					<button class="btn" onclick="filterSelection('preferido')"> Preferidos</button>
					<button class="btn" onclick="filterSelection('retro')"> Retro</button>

					</center>
				</ul>		
			</div>

	<hr>



	<div class="card-deck" >
	<div class="column preferido">
	<div class="card">
		<img class="card-img-top" src="img/acessórios/Óculos de sol 1,1.jpg" alt="Imagem de capa do card">
		<div class="card-body">
		<h5 class="card-title">Óculos Ray Ban</h5>
		<p class="card-text">Um dos óculos mais famosos do mundo!</p>
		<p class="card-text"><a href='./products/extra/acessorios.php' class='btn btn-primary' style="color: white; background-color:gray">Olhe mais do mesmo produto</a></p>
		</div>
	</div>
		</div>

		<div class="column retro">
	<div class="card">
		<img class="card-img-top" src="img/acessórios/Pulseira Masculina 1,1.webp" alt="Imagem de capa do card">
		<div class="card-body">
		<h5 class="card-title">Pulseira de Diamantes</h5>
		<p class="card-text">Pulseira cristalizada, cravejada de diamantes!</p>
		<p class="card-text"><a href='./products/extra/acessorios.php' class='btn btn-primary' style="color: white; background-color:gray">Olhe mais do mesmo produto</a></p>
		</div>
	</div>
		</div>

	<div class="column retro">
	<div class="card">
		<img class="card-img-top" src="img/acessórios/Relógio 1,1.jpg" alt="Imagem de capa do card">
			<div class="card-body">
		<h5 class="card-title">Relógio Roquet</h5>
		<p class="card-text">Relógio Esportivo, aprova d'agua.</p>
		<p class="card-text"><a href='./products/extra/acessorios.php' class='btn btn-primary' style="color: white; background-color:gray">Olhe mais do mesmo produto</a></p>
		</div>
	</div>
		</div>

		<div class="column vestido">
	<div class="card">
		<img class="card-img-top" src="img/acessórios/Pulseira Masculina 4.jpg" alt="Imagem de capa do card">
			<div class="card-body">
		<h5 class="card-title">Pulseira AJK</h5>
		<p class="card-text">Pulseira de metal, com pérolas.</p>
		<p class="card-text"><a href='./products/extra/acessorios.php' class='btn btn-primary' style="color: white; background-color:gray">Olhe mais do mesmo produto</a></p>
		</div>
	</div>
		</div>

		<div class="column pecas">
	<div class="card">
		<img class="card-img-top" src="img/acessórios/Óculos de sol 3.webp" alt="Imagem de capa do card">
			<div class="card-body">
		<h5 class="card-title">Óculos Juliet </h5>
		<p class="card-text">O óculos mais "CHAVOSO" que você já viu.</p>
		<p class="card-text"><a href='./products/extra/acessorios.php' class='btn btn-primary' style="color: white; background-color:gray">Olhe mais do mesmo produto</a></p>
		</div>
	</div>
		</div>

		<div class="column pecas">
	<div class="card">
		<img class="card-img-top" src="img/acessórios/Pulseira Masculina 2.webp" alt="Imagem de capa do card">
			<div class="card-body">
		<h5 class="card-title">Pulseira JK</h5>
		<p class="card-text"> Pulseira de ouro 18K.</p>
		<p class="card-text"><a href='./products/extra/acessorios.php' class='btn btn-primary' style="color: white; background-color:gray">Olhe mais do mesmo produto</a></p>
		</div>
	</div>
		</div>
	</div>

</section>

<style>

	.row {
	margin: 10px -16px;
	}

	.row,
	.row > .column {
	padding: 8px;
	}

	.column {
	float: left;
	width: 33.33%;
	display: none; 
	}

	.row:after {
	content: "";
	display: table;
	clear: both;
	}

	.content {
	background-color: white;
	padding: 5px;
	}

	.show {
	display: block;
	}

	.btn {
	border: none;
	outline: none;
	padding: 12px 16px;
	background-color: white;
	cursor: pointer;
	}

	.btn:hover {
	background-color: #ddd;
	}

	.btn.active {
	background-color: #666;
	color: white;
	}
</style>
					

<script>
	filterSelection("tudo")
	function filterSelection(c) {
	var x, i;
	x = document.getElementsByClassName("column");
	if (c == "tudo") c = "";
	for (i = 0; i < x.length; i++) {
		w3RemoveClass(x[i], "show");
		if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
	}
	}

	function w3AddClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(" ");
	arr2 = name.split(" ");
	for (i = 0; i < arr2.length; i++) {
		if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
	}
	}

	function w3RemoveClass(element, name) {
	var i, arr1, arr2;
	arr1 = element.className.split(" ");
	arr2 = name.split(" ");
	for (i = 0; i < arr2.length; i++) {
		while (arr1.indexOf(arr2[i]) > -1) {
		arr1.splice(arr1.indexOf(arr2[i]), 1);     
		}
	}
	element.className = arr1.join(" ");
	}

	var btnContainer = document.getElementById("myBtnContainer");
	var btns = btnContainer.getElementsByClassName("btn");
	for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function(){
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	});
	}
</script>

<!--------------------------------------------------------------------------------------------------------------------
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
CARROSEL 2 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
---------------------------------------------------------------------------------------------------------------------->


<section class="top-letest-product-section">
<div class="section-title">
	<h2>PRODUTOS INFANTIS</h2>
</div>
		<div class="container">
			<div class="section-title">
			</div>
			<div class="product-slider owl-carousel">
				<div class="product-item">
					<div class="pi-pic">
					<a href="./products/infantil/tenis.php"> <img src="./img/kid/tenismasinf/NIKE 1/HZM-2244-543_zoom1.jpg" alt=""></a>
						<div class="pi-links">
						</div>
					</div>
					<div class="pi-text">
						<p>Tênis Infantil - Azul </p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-new">Novo</div>
						<a href="./products/infantil/tenis.php"><img src="./img/kid/roupasinf/Blusa_Moletom_Mickey_Mouse_Borgonha_GK3203_GK3203_01_laydown.jpg" alt=""></a>
						<div class="pi-links">
						</div>
					</div>
					<div class="pi-text">
						<p>Blusa Moletom - Mickey Mouse Borgonha</p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
					<a href="./products/infantil/tenis.php"><img src="./img/kid/tenisfeminf/Tenis feminino infantil 1,1.jpg" alt=""></a>
						<div class="pi-links">
						</div>
					</div>
					<div class="pi-text">
						<p>Tênis Feminino Infantil - Nike - branco </p>
					</div>
				</div>
				<div class="product-item">
						<div class="pi-pic">
						<a href="./products/infantil/tenis.php"><img src="./img/kid/acessoriosinf/146-0700-016_zoom2.jpg" alt=""></a>
							<div class="pi-links">
							</div>
						</div>
						<div class="pi-text">
							<p>Boias Joaninha - Infantil</p>
						</div>
					</div>
				<div class="product-item">
						<div class="pi-pic">
						<a href="./products/infantil/tenis.php"><img src="./img/kid/acessoriosinf/D81-3678-325_zoom2.jpg" alt=""></a>
							<div class="pi-links">
							</div>
						</div>
						<div class="pi-text">
							<p>Boné de couro - Azul escuro - Masculino Infantil </p>
						</div>
					</div>
			</div>
		</div>
	</section>
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
						<li><a href="./about/about.html" style="color: black;">Sobre nós</a></li>
						<li><a href="./contato/contact.php" style="color: black;">Entre em contato</a></li>
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
						<a href="" class="instagram"><i class="fa fa-instagram"></i><span>INSTAGRAM</span></a><br><br>
						<a href="" class="facebook"><i class="fa fa-facebook"></i><span>FACEBOOK</span></a><br><br>
						<a href="" class="twitter"><i class="fa fa-twitter"></i><span>TWITTER</span></a><br>
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

<!--------------------------------------------------------------------------------------------------------------------
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
SCRIPTS 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
---------------------------------------------------------------------------------------------------------------------->
<script src="js/database/requiredb.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script>
<script src="js/login.js"></script>
<script>
		canReload = true;
</script>

</body>
</html>