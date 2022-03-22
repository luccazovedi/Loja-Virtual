<?php
session_start();
include_once("conexao.php");

	$id = filter_input(INPUT_POST, 'id',);
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_EMAIL);


	//echo "Nome: $nome <br>";
	//echo "E-mail: $email <br>";

	$result_usuario = "UPDATE user SET name='$nome', email='$email', password='$password' WHERE id='$id'";
	$resultado_usuario = mysqli_query($conexao, $result_usuario);

if(mysqli_affected_rows($conexao)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: cliente.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: cliente.php?id=$id");
}
?>
<script>
		canReload = true;
</script>