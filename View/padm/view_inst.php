
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
		<title>CRUD - Visualizar Instituição</title>		
	</head>
	<body>
	<form style="border:1px solid #dcdcdc; padding:10px;" >

		<h1>Visualizar Instituição</h1><br>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<?php
		$result_inst = "SELECT * FROM tb_inst WHERE cd_inst = '$id'";;
		$resultado_inst = mysqli_query($conn, $result_inst);
		$row_inst = mysqli_fetch_assoc($resultado_inst)
		?>
			<?php echo "<b>Codigo:</b> " . $row_inst['cd_inst']; ?>
			<br> <br>
			<?php echo "<b>Email:</b> " . $row_inst['nm_email_inst']; ?>
			<br> <br>
			<?php echo "<b>Nome da instituição:</b> " . $row_inst['nm_inst']; ?>
			<br> <br>
			<?php echo "<b>CEP:</b> " . $row_inst['cd_cep_inst']; ?>
			<br> <br>
			<?php echo "<b>Cidade:</b> " . $row_inst['nm_cidade_inst']; ?>
			<br> <br>
			<?php echo "<b>N°:</b> " . $row_inst['num_inst']; ?>
			<br> <br>
			<?php echo "<b>Bairro:</b> " . $row_inst['nm_bairro_inst']; ?>
			<br> <br>
			<?php echo "<b>Rua:</b> " . $row_inst['nm_rua_inst']; ?>
			<br> <br>
			<?php echo "<b>UF:</b> " . $row_inst['sg_estado_inst']; ?>
			<br> <br>
			<?php echo "<a href=\"del_inst.php?id=$id\" class='btn btn-danger'>Excluir</a>"; ?>

			</form>
	</body>
</html>
<?php include 'partials/footer.php'; ?>