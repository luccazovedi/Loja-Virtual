<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Storm Store | Área de Administração</title>		
	</head>
	<body>
		
		<center>
		<h1 style="font-family: Calibri;">CADASTRE UM NOVO USUÁRIO</h1>
		</center>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<centeR>

		<form method="POST" action="proc_cad_usuario.php">
			
			<div class="form-group">
			<label style=" color: black; padding: 12px 25px; font-size: 15px">Nome: </label>
			<input style=" color: black; padding: 12px 25px; font-size: 15px" type="text" name="name" placeholder="Digite o nome do usuário" ><br><br>
			</div>

			<div class="form-group">
			<label style="color: black; padding: 12px 25px; font-size: 15px">E-mail: </label>
			<input style="color: black; padding: 12px 25px; font-size: 15px"type="email" name="email" placeholder="Digite o e-mail do usuário" ><br><br>
			</div>

			<div class="form-group">
			<label style="color: black; padding: 12px 25px; font-size: 15px">Senha: </label>
			<input style="color: black; padding: 12px 25px; font-size: 15px" type="password" name="password" placeholder="Digite a senha do usuário"><br><br>
			</div>

			<div class="form-group">
			<label style="color: black; padding: 12px 25px; font-size: 15px">Nível de Acesso: </label>
			<input style="color: black; padding: 12px 25px; font-size: 15px" type="text" name="nivel" placeholder="Digite o nível usuário"><br><br>
			</div>
		<centeR>
			<input style=" position: relative;cursor: pointer; background-color: #3CB371; padding: 12px 25px; font-size: 15px" type="submit" value="Enviar"><br><br>
			
			<a href="index.php"style="position: flex; font-family: Calibri;text-decoration:none; background-color:#B0C4DE;color: black; padding: 12px 25px; font-size: 15px">Voltar</a><br>
		</centeR>
	</body>
</html>