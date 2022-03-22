<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
$size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);
$product_type = filter_input(INPUT_POST, 'product_type', FILTER_SANITIZE_STRING);
$conteudo = filter_input(INPUT_POST, 'conteudo', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
$sex = filter_input(INPUT_POST, 'sex', FILTER_SANITIZE_STRING);
$qtd = filter_input(INPUT_POST, 'qtd', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE products SET name='$nome', marca='$marca', size='$size', product_type='$product_type',
conteudo='$conteudo', price='$price', sex='$sex', qtd='$qtd' WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Produto editado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Produto não foi editado com sucesso</p>";
	header("Location: edit_produto.php");
}
