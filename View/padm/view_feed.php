
<!-- Header -->
	<?php include ("partials/header.php")?>

<?php
session_start();
include_once("partials/conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>
<?php
		$result_feed = "SELECT * FROM tb_feed WHERE cd_feed = '$id'";;
		$resultado_feed = mysqli_query($conn, $result_feed);
		$row_feed = mysqli_fetch_assoc($resultado_feed)
		?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Visualizar <?php echo $row_feed['nm_seed']; ?></title>		
	</head>
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
	<body>
	<form style="border:1px solid #dcdcdc; padding:10px;"   > 

		<h1>Mensagem <?php echo "De " . $row_feed['nm_seed']; ?></h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
			<?php $row_feed['cd_feed']; ?>
            
			<?php echo "<b>Assunto:</b> " . $row_feed['nm_assunto']; ?>
			<br><br>
			<?php echo "<b>Mensagem:</b>" . $row_feed['ds_assunto']; ?>
			<br><br>
			<?php echo "<a href=\"del_feed.php?id=$id\" class='btn btn-danger'>Excluir</a>"; ?>
			</form>
	</body>
</html>
<?php include 'partials/footer.php'; ?>