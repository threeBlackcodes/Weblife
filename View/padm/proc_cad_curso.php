<?php
session_start();
include_once("partials/conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$nminst = filter_input(INPUT_POST, 'idinst', FILTER_SANITIZE_STRING);

$result_curso = "INSERT INTO tb_curso (nm_curso, ds_curso, nm_inst) 
					VALUES ('$nome', '$descricao', '$nminst')";
$resultado_curso = mysqli_query($conn, $result_curso);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Curso cadastrado com sucesso</p>";
	header("Location: list_curso.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Curso não foi cadastrado com sucesso</p>";
	header("Location: cad_curso.php");
}
