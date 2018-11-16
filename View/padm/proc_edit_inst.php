<?php
session_start();
include_once("partials/conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cep4 = filter_input(INPUT_POST, 'cep4', FILTER_SANITIZE_NUMBER_INT);
$cidade4 = filter_input(INPUT_POST, 'cidade4', FILTER_SANITIZE_STRING);
$num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING);
$bairro4 = filter_input(INPUT_POST, 'bairro4', FILTER_SANITIZE_STRING);
$rua4 = filter_input(INPUT_POST, 'rua4', FILTER_SANITIZE_STRING);
$uf4 = filter_input(INPUT_POST, 'uf4', FILTER_SANITIZE_STRING);


// echo "$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT)";
// echo "$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)";
// echo "$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING)";
// echo "$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT)";
// echo "$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING)";
// echo "$num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING)";
// echo "$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING)";
// echo "$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING)";
// echo "$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);";


$result_inst = "UPDATE tb_inst 
							SET nm_email_inst = '$email', 
								nm_inst = '$nome', 
								cd_cep_inst = '$cep4', 
								nm_cidade_inst = '$cidade4', 
								num_inst = '$num', 
								nm_bairro_inst = '$bairro4', 
								nm_rua_inst = '$rua4', 
								sg_estado_inst = '$uf4' 
							WHERE cd_inst ='$id'";
$resultado_inst = mysqli_query($conn, $result_inst);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Instituição editada com sucesso </p>";
	header("Location: list_inst.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Instituição não foi editada com sucesso</p>";
	header("Location: edit_inst.php?id=$id");
}
