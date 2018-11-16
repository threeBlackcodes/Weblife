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
			
<title>CRUD - Lista de Cursos</title>		

<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

*{
	margin:0;
	padding:0;
	
	
}
#table{
	max-width:1800px;
	margin:auto;
}



	

</style>
</div> 

		</head>
		

		<!-- Body -->
		

		<h1 style="text-align: center;">Cursos cadastrados</h1><br>
			
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
			<div class="table-responsive">
			<table class="table table-striped" id="table" >
                    <thead class="thead-green">
                        <tr>
                            <th>Codigo:</th>
                            <th>Nome do curso:</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
			<?php
			$result_curso = "SELECT * FROM tb_curso";
			$resultado_curso = mysqli_query($conn, $result_curso);
			while($row_curso = mysqli_fetch_assoc($resultado_curso)){
				echo "<tr>";
				echo "<td>" . $row_curso['cd_curso'] . "</td>";
				echo "<td>" . $row_curso['nm_curso'] . "</td>";
				echo "<td><a href='edit_curso.php?id=" . $row_curso['cd_curso'] . "'class='btn btn-success' style=''>Editar</a></td>";
				echo "<td><a href='view_curso.php?id=" . $row_curso['cd_curso'] . "'class='btn btn-primary'>Visualizar</a></td>";
				echo "</tr>";
			}
			?>
			</table>
			</div>
	
	</html>
	
		


<?php include 'partials/footer.php'; ?>