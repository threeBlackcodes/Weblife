<?php
session_start();
include_once("partials/conexao.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$cep2 = filter_input(INPUT_POST, 'cep2', FILTER_SANITIZE_NUMBER_INT);
$cidade2 = filter_input(INPUT_POST, 'cidade2', FILTER_SANITIZE_STRING);
$num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING);
$bairro2 = filter_input(INPUT_POST, 'bairro2', FILTER_SANITIZE_STRING);
$rua2 = filter_input(INPUT_POST, 'rua2', FILTER_SANITIZE_STRING);
$uf2 = filter_input(INPUT_POST, 'uf2', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO tb_usuario (nm_email, nm_usuario, cd_cep_usuario, nm_cidade_usuario, num_casa, nm_bairro_usuario, nm_rua_usuario, sg_estado_usuario, cd_senha_usuario, nm_type) 
					VALUES ('$email', '$nome', '$cep2', '$cidade2', '$num', '$bairro2', '$rua2', '$uf2', '$senha', '$type')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: list_usuario.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}
