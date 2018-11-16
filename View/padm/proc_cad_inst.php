<?php
session_start();
include_once("partials/conexao.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_inst = "INSERT INTO tb_inst (nm_email_inst, nm_inst, cd_cep_inst, nm_cidade_inst, num_inst, nm_bairro_inst, nm_rua_inst, sg_estado_inst) 
					VALUES ('$email', '$nome', '$cep', '$cidade', '$num', '$bairro', '$rua', '$uf')";
$resultado_inst = mysqli_query($conn, $result_inst);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Instituição cadastrada com sucesso</p>";
	header("Location: list_inst.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Instituição não foi cadastrada com sucesso</p>";
	header("Location: cad_inst.php");
}
