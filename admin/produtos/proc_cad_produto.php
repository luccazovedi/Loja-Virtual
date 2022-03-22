<?php
session_start();
include_once("conexao.php");


$nome = filter_input(INPUT_POST, 'name');
$marca = filter_input(INPUT_POST, 'marca');
$size = filter_input(INPUT_POST, 'size');
$product_type = filter_input(INPUT_POST, 'product_type');
$conteudo = filter_input(INPUT_POST, 'conteudo');
$price = filter_input(INPUT_POST, 'price');
$sex = filter_input(INPUT_POST, 'sex');
$qtd = filter_input(INPUT_POST, 'qtd');

$result_usuario = "INSERT INTO products (name, marca, size, product_type, conteudo, price, sex, qtd) VALUES ('$nome','$marca', '$size', '$product_type',
 '$conteudo', '$price', '$sex', '$qtd')"; 
$resultado_usuario = mysqli_query($conn, $result_usuario);
if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Produto cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Produto não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}
