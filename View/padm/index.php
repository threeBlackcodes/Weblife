<!-- Session -->
	<?php session_start(); ?>

<!-- Header -->
	<?php include ("partials/header.php")?>
	
<!-- Banco -->
	<?php include_once("partials/conexao.php");?>

<!-- Html -->
	<!DOCTYPE html>
		<html lang="Pt-Br">
		
		<!-- Head -->
		<head>
			<meta charset="utf-8">
			
			<title>CRUD - Inicio</title>		
		</head>
		<style>
		*{
			margin:o;
			padding:0;
			
		}

		table{
			max-width:1800px;
			margin:auto;
		}
	
		</style>
	<body>
		<div>
			
		
				
			<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			
			<div class="table-responsive">
				<table class="table table-striped" id="table" >
                    <thead class="thead">
					<h1 class="text-center">Mensagens</h1>
					<br>
                    <tr>
                        <th>Codigo:</th>
                        <th>Eviado por: </th>
                        <th>Assunto: </th>
                        <th colspan="3">Ação</th>
                    </tr>
                </thead>
				
				<?php
				$result_feed = "SELECT * FROM tb_feed";
				$resultado_feed = mysqli_query($conn, $result_feed);
				while($row_feed = mysqli_fetch_assoc($resultado_feed)){
					echo "<tr>";
					echo "<td>" . $row_feed['cd_feed'] . "</td>";
					echo "<td>" . $row_feed['nm_seed'] . "</td>";
					echo "<td>" . $row_feed['nm_assunto'] . "</td>";
					echo "<td><a href='del_feed.php?id=" . $row_feed['cd_feed'] . "'class='btn btn-danger'>Apagar</a></td>";
					echo "<td><a href='view_feed.php?id=" . $row_feed['cd_feed'] . "'class='btn btn-success'>Visualizar</a></td>";
					echo "</tr>";
				}
				?>
			</table>
			</div>
		</div>
	</body>
	</html>
<?php include 'partials/footer.php'; ?>