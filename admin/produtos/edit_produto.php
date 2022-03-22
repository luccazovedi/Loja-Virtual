<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM products WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);


?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Storm Store | Área de Administração</title>		
	</head>
	<body>
		
		<center>
		<h1 style="font-family: Calibri;">Área de Produtos</h1>
		</center>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
	
	
</form>
	<center>
		<form method="POST" action="proc_edit_produto.php"  charset="utf-8">

			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Nome: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px" type="varchar" aria-describedby="emailHelp"class="form-control"name="nome" placeholder="Edite o nome do produto" value="<?php echo $row_usuario['name']; ?>"><br><br>
			</div>


			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Marca: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px" type="varchar" name="marca" placeholder="Edite o modelo do produto" value="<?php echo $row_usuario['marca']; ?>"><br><br>
			</div>
			
			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Conteúdo: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px"type="text" name="conteudo" placeholder="Edite o conteúdo do produto" value="<?php echo $row_usuario['conteudo']; ?>"><br><br>
			</div>

			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Preço: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px" type="varchar" name="price" placeholder="Edite o preço do produto" value="<?php echo $row_usuario['price']; ?>"><br><br>
			</div>

			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Tipo do produto: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px" type="varchar" name="product_type" placeholder="Edite o tipo do produto" value="<?php echo $row_usuario['product_type']; ?>"><br><br>
			</div>

			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Tamanho: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px" type="varchar" name="size" placeholder="Edite o tamanho do produto" value="<?php echo $row_usuario['size']; ?>"><br><br>
			</div>

			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Sexo: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px" type="int" name="sex" placeholder="Edite o 'sexo' do produto" value="<?php echo $row_usuario['sex']; ?>"><br><br>
			</div>

			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Em estoque: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px" type="text" name="qtd" placeholder="Edite a quantidade do produto" value="<?php echo $row_usuario['qtd']; ?>"><br><br>
			</div>
			<input style=" cursor: pointer;border-radius: 10px; background-color: green; padding: 12px 25px; font-size: 15px" type="submit" value="Concluir"><br><br>
			<a href="index.php"style=" font-family: Calibri;text-decoration:none; background-color:#B0C4DE;border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Voltar</a><br>
	</center>
</form>

	</body>
</html>