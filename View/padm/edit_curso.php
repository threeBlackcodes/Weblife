
<!-- Header -->
	<?php include ("partials/header.php")?>
	
<?php
session_start();
include_once("partials/conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_curso = "SELECT * FROM tb_curso WHERE cd_curso = '$id'";
$resultado_curso = mysqli_query($conn, $result_curso);
$row_curso = mysqli_fetch_assoc($resultado_curso);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar Curso</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		

	<style>
	*{
		margin:0;
		padding:0;
		font-size:13px;
	}
	form{
		max-width:1800px;
		margin:auto;
	
	}

	</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>
	
		
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_curso.php" style="border:1px solid #dcdcdc; padding:10px;"  >

		<h1>Editar Curso</h1><br>
			<input type="hidden" name="id" value="<?php echo $row_curso['cd_curso']; ?>">
			
			<label>Nome</label>
			<input type="nome" class="w3-input" name="nome" placeholder="Digite o nome do Curso" value="<?php echo $row_curso['nm_curso']; ?>"><br><br>
		
			<label>Descrição: </label>
			<input type="nome" class="w3-input" name="descricao" value="<?php echo $row_curso['ds_curso']; ?>"><br><br>
			

			<style>
		
			</style>
			<input type="submit" class="btn btn-primary" value="Editar" id="botao">
		</form>
			<br>
	</body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php include 'partials/footer.php'; ?>