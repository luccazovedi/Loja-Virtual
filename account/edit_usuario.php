<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM user WHERE id = '$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
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
		<h1 style="font-family: Calibri;">Edite suas Informações</h1>
		</center>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
	
</form>
	<center>
		<form method="POST" action="proc_edit_usuario.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Nome: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px" type="text" aria-describedby="emailHelp"class="form-control"name="nome" placeholder="Edite o nome do usuário" value="<?php echo $row_usuario['name']; ?>"><br><br>
			</div>

			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">E-mail: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px"type="email" name="email" placeholder="Edite o e-mail do usuário" value="<?php echo $row_usuario['email']; ?>"><br><br>
			</div>

			<div class="form-group">
			<label style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Senha: </label>
			<input style="border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px" type="password" name="password" placeholder="Edite a senha do usuário" value="<?php echo $row_usuario['password']; ?>"><br><br>
			</div>

			<input style=" cursor: pointer;border-radius: 10px; background-color: green; padding: 12px 25px; font-size: 15px" type="submit" value="Concluir"><br><br>
			<a href="cliente.php"style=" font-family: Calibri;text-decoration:none; background-color:#B0C4DE;border-radius: 10px; color: black; padding: 12px 25px; font-size: 15px">Voltar</a><br>
	</center>
</form>

	</body>
</html>