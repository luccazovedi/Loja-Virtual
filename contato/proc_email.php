<?php
session_start();
include_once("conexao.php");


$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$assunto = filter_input(INPUT_POST, 'assunto');


$result_usuario = "INSERT INTO contato (nome, email, assunto) VALUES ('$nome','$email', '$assunto')"; 
$resultado_usuario = mysqli_query($conexao, $result_usuario);
if(mysqli_insert_id($conexao)){
	$_SESSION['msg'] = "<p style='color:green;'>Mensagem enviada com sucesso</p>";
	header("Location: contact.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Mensagem não foi cadastrado com sucesso</p>";
	header("Location: contact.php");
}
