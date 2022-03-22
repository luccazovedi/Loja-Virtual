<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Storm Store | Área de Administração</title>		
	</head>
	<body>
		
		<center>
		<h1 style="font-family: Calibri;">CADASTRE UM NOVO PRODUTO</h1>
		</center>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
	<body>
		
		<form method="POST" action="proc_cad_produto.php">
			<center>
			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Nome: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px" type="text" aria-describedby="emailHelp"class="form-control"name="name" placeholder="Digite o nome do produto" ><br><br>
			</div>

			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Marca: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px"placeholder='Digite a marca do produto' type='text' name='marca' id='marca' ><br><br>
			</div>

			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Preço: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px"placeholder='Digite o preço do produto' type='text' name='price' id='price' ><br><br>
			</div>

			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Tamanho: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px"placeholder='Digite o tamanho do produto' type='text' name='size' id='size' ><br><br>
			</div>

			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Conteúdo: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px"placeholder='Digite o conteúdo do produto' type='text' name='conteudo' id='conteudo' ><br><br>
			</div>

			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Sexo: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px"placeholder='Ex.: Masculino / Feminino / Infantil ' type='text' name='sex' id='sex' ><br><br>
			</div>

			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Tipo do Produto: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px"placeholder='Ex.: Tênis' type='text' name='product_type' id='product_type' ><br><br>
			</div>

			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Quantidade Produto: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px"placeholder='Ex.: 140' type='text' name='qtd' id='qtd' ><br><br>
			</div>
			<input style=" cursor: pointer;border-radius: 10px; background-color: green; padding: 12px 25px; font-size: 15px" type="submit" value="Enviar"><br><br>
			<a href="index.php"style=" font-family: Calibri;text-decoration:none; background-color:#B0C4DE;border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Lista de Produtos cadastrados</a><br>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}?>
	</body>
	
</html>