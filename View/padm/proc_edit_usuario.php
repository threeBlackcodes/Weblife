<?php
session_start();
include_once("partials/conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$cep3 = filter_input(INPUT_POST, 'cep3', FILTER_SANITIZE_NUMBER_INT);
$cidade3 = filter_input(INPUT_POST, 'cidade3', FILTER_SANITIZE_STRING);
$num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING);
$bairro3 = filter_input(INPUT_POST, 'bairro3', FILTER_SANITIZE_STRING);
$rua3 = filter_input(INPUT_POST, 'rua3', FILTER_SANITIZE_STRING);
$uf3 = filter_input(INPUT_POST, 'uf3', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE tb_usuario 
							SET nm_email = '$email', 
								nm_usuario = '$nome', 
								cd_cep_usuario = '$cep3', 
								nm_cidade_usuario = '$cidade3', 
								num_casa = '$num', 
								nm_bairro_usuario = '$bairro3', 
								nm_rua_usuario = '$rua3', 
								sg_estado_usuario = '$uf3', 
								cd_senha_usuario = '$senha', 
								nm_type = '$type' 
							WHERE cd_usuario ='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso </p>";
	header("Location: list_usuario.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: edit_usuario.php?id=$id");
}
