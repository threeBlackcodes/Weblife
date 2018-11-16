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
			
			<title>CRUD - Lista de Instituições</title>		
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
		<!-- Body -->
		<body>
			<form>
			<h1 class="text-center" >Lista de Instituições</h1><br>
				
				<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>
				<div class="table-responsive">
				<table class="table table-striped" id="table" >
                    <thead class="thead">
                            <tr>
                                <th>Codigo:</th>
                                <th>Email Instituição:</th>
                                <th>Nome Instituição:</th>
                                <th>Cep:</th>
                                <th>N°:</th>
                                <th>Senha:</th>
                                <th colspan="3">Ação</th>
                            </tr>
                        </thead>
				<?php
				$result_inst = "SELECT * FROM tb_inst";
				$resultado_inst = mysqli_query($conn, $result_inst);
				while($row_inst = mysqli_fetch_assoc($resultado_inst)){
					echo "<tr>";
					echo "<td>" . $row_inst['cd_inst'] . "</td>";
					echo "<td>" . $row_inst['nm_email_inst'] . "</td>";
					echo "<td>" . $row_inst['nm_inst'] . "</td>";
					echo "<td>" . $row_inst["cd_cep_inst"] . "</td>";
                    echo "<td>" . $row_inst["num_inst"] . "</td>";
					echo "<td><a href='edit_inst.php?id=" . $row_inst['cd_inst'] . "'class='btn btn-success'>Editar</a></td>";
					echo "<td><a href='view_inst.php?id=" . $row_inst['cd_inst'] . "'class='btn btn-primary'>Visualizar</a></td>";
					echo "</tr>";
				}
				?>
				</table>
				</div>
				</form>
		</body>
	</html>
<?php include 'partials/footer.php'; ?>