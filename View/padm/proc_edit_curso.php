<?php
session_start();
include_once("partials/conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$idinst = filter_input(INPUT_POST, 'idinst', FILTER_SANITIZE_NUMBER_INT);


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_curso = "UPDATE tb_curso 
							SET	nm_curso = '$nome', 
								ds_curso = '$descricao', 
								nm_inst = '$idinst' 
							WHERE cd_curso ='$id'";
$resultado_curso = mysqli_query($conn, $result_curso);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Curso editado com sucesso </p>";
	header("Location: list_curso.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Curso não foi editado com sucesso</p>";
	header("Location: edit_curso.php?id=$id");
}
