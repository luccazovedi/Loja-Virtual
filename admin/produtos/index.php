<?php
session_start();
include("conexao.php");
include('./database.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<head>
		<meta charset="utf-8">
		<title>Storm Store | Administração</title>		
	</head>
	<body>
		<style>
			*{
				margin-left: 5px;
			}
		</style>
	<br>
		<?php 
				if (isset($_COOKIE["User"])) 
				echo 
				'<center>Olá' . ' ' . '<strong>' . $name[0]["name"] . '</strong>' . ' ' . 'seja bem vindo!<br>
				</center><hr>
				<ul class="nav">
						<li class="nav-item">
							<a class="nav-link active" href="../usuario/index.php">Visualizar Usuários</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="cad_produto.php">Cadastrar Produtos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/StormStore/index.php">Página Inicial</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/StormStore/account/logout.php">Desconectar</a>
						</li>
				</ul><hr>';
				else echo '<div class="dropdown">
				<center><h4>Você não tem permissão para acessar esse conteúdo. Faça seu login<a href="/StormStore/account/login.php">  aqui   </a>e depois retorno para poder acessar as opçoes de administrador!</h4></center>				  </div>'
		?>
	
		<style>
						.dropbtn {
						background-color:white;
						color: black;
						padding: 16px;
						font-size: 16px;
						border: none;
						direction: right;
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
		
		<?php
	
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 6;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM products LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		if (isset($_COOKIE["User"])) {
			echo "<center><h1>Produtos Cadastrados</h1></center><hr>";

			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}

		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			echo "<strong>ID:</strong>" . $row_usuario['id'] . " " . "<br>";
			echo "<strong>Marca:</strong> " . $row_usuario['marca'] . "<br>";
			echo "<strong>Nome:</strong>" . $row_usuario['name'] . "<br>";
			echo "<strong>Conteúdo:</strong> " . $row_usuario['conteudo'] . "<br>";
			echo "<strong>Tipo de Produto:</strong> " . $row_usuario['product_type'] . "<br>";
			echo "<strong>Preço:</strong> " . $row_usuario['price'] . "<br>";
			echo "<strong>Tamanho:</strong> " . $row_usuario['size'] . "<br>";
			echo "<strong>Sexo:</strong> " . $row_usuario['sex'] . "<br>";
			echo "<strong>Em estoque:</strong> " . $row_usuario['qtd'] . "<br>";
			
			echo "<a  style='font-family: Calibri;text-decoration:none; background-color:#B0C4DE;border-radius: 10px; color: black; padding: 2px 25px; font-size: 15px' href='edit_produto.php?id=" . $row_usuario['id'] . "'> Editar</a><br>";
			echo "<a  style='font-family: Calibri;text-decoration:none; background-color:red;border-radius: 10px; color: black; padding: 2px 25px; font-size: 15px' href='delete_produto.php?id=" . $row_usuario['id'] . "'> Deletar</a><br><hr>";

		
		}
		
		//Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id) AS num_result FROM products";
		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='index.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='index.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='index.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='index.php?pagina=$quantidade_pg'>Ultima</a>";;
	}
		?>	
		<br><br>	

<style>
	*{
		justify-content: center;
	}
	.sidenav {
	height: 100%;
	width: 0;
	position: fixed;
	z-index: 1;
	top: 0;
	left: 0;
	background-color: #111;
	overflow-x: hidden;
	transition: 0.5s;
	padding-top: 60px;
	}

	.sidenav a {
	padding: 8px 8px 8px 32px;
	text-decoration: none;
	font-size: 25px;
	color: #818181;
	display: block;
	transition: 0.3s;
	}

	.sidenav a:hover {
	color: #f1f1f1;
	}

	.sidenav .closebtn {
	position: absolute;
	top: 0;
	right: 25px;
	font-size: 36px;
	margin-left: 50px;
	}

	@media screen and (max-height: 450px) {
	.sidenav {padding-top: 15px;}
	.sidenav a {font-size: 18px;}
	}
</style>


<script>
	function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	}
</script>
	
	</body>
</html>