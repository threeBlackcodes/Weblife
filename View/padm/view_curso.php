
<!-- Header -->
	<?php include ("partials/header.php")?>

<?php
session_start();
include_once("partials/conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Visualizar Curso</title>	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	</head>

	<style>

	*{
		margin:0;
		padding:0;
		
	}
	form{
		max-width:1800px;
		margin:auto;
	}

	</style>
	<body>
	
<form style="border:1px solid #dcdcdc; padding:10px;"  >
		<h1>Visualizar Curso</h1><br>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<?php
		$result_curso = "SELECT * FROM tb_curso WHERE cd_curso = '$id'";;
		$resultado_curso = mysqli_query($conn, $result_curso);
		$row_curso = mysqli_fetch_assoc($resultado_curso)
		?>
			<?php echo "<b>Codigo:</b> " . $row_curso['cd_curso']; ?>
			<br><br>
			<?php echo "<b>Nome do curso:</b> " . $row_curso['nm_curso']; ?>
			<br><br>
			<?php echo "<b>Descrição:</b> " . $row_curso['ds_curso']; ?>
			<br><br>
			<div class="botao">
			<?php echo "<a href=\"del_curso.php?id=$id\" class='btn btn-danger'> Excluir </a>"; ?>
			</div>
			</form>
		
	</body>

</html>

<?php include 'partials/footer.php'; ?>