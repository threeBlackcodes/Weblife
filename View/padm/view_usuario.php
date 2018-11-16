
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
		<title>CRUD - Visualizar Usuário</title>		
	</head>
	<body>
		<form style="border:1px solid #dcdcdc; padding:10px;">
		<h1>Visualizar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<?php
		$result_usuarios = "SELECT * FROM tb_usuario WHERE cd_usuario = '$id'";;
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		$row_usuario = mysqli_fetch_assoc($resultado_usuarios)
		?>
			<?php echo "<b>Codigo:</b> " . $row_usuario['cd_usuario']; ?>
			<br>
			<?php echo "<b>Email:</b> " . $row_usuario['nm_email']; ?>
			<br>
			<?php echo "<b>Nome do Usuario:</b> " . $row_usuario['nm_usuario']; ?>
			<br>
			<?php echo "<b>CEP:</b> " . $row_usuario['cd_cep_usuario']; ?>
			<br>
			<?php echo "<b>Cidade: </b>" . $row_usuario['nm_cidade_usuario']; ?>
			<br>
			<?php echo "<b>N°</b> " . $row_usuario['num_casa']; ?>
			<br>
			<?php echo "<b>Bairro: </b>" . $row_usuario['nm_bairro_usuario']; ?>
			<br>
			<?php echo "<b>Rua:</b> " . $row_usuario['nm_rua_usuario']; ?>
			<br>
			<?php echo "<b>UF:</b> " . $row_usuario['sg_estado_usuario']; ?>
			<br>
			<?php echo "<b>Senha:</b> " . $row_usuario['cd_senha_usuario']; ?>
			<br>
			<?php echo "<b>Tipo: </b>" . $row_usuario['nm_type']; ?><br>

			<?php echo "<a href=\"del_usuario.php?id=$id\" class='btn btn-danger'>Excluir</a>"; ?>
			</form>
	</body>
</html>
<?php include 'partials/footer.php'; ?>