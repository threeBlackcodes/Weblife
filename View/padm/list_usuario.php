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
			
			<title>CRUD - Lista de usuarios</title>		
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
			<h1 class="text-center" >Lista de  Usuário</h1><br>
				
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
                                <th>Nome do Usuario:</th>
                                <th>Email:</th>
                                <th>Cep:</th>
                                <th>N°:</th>
                                <th>Senha:</th>
                                <th colspan="3">Ação</th>
                            </tr>
                        </thead>
				<?php
				$result_usuarios = "SELECT * FROM tb_usuario";
				$resultado_usuarios = mysqli_query($conn, $result_usuarios);
				while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
					echo "<tr>";
					echo "<td>" . $row_usuario['cd_usuario'] . "</td>";
					echo "<td>" . $row_usuario['nm_usuario'] . "</td>";
					echo "<td>" . $row_usuario['nm_email'] . "</td>";
					echo "<td>" . $row_usuario["cd_cep_usuario"] . "</td>";
                    echo "<td>" . $row_usuario["num_casa"] . "</td>";
					echo "<td>" . $row_usuario["cd_senha_usuario"] . "</td>";
					echo "<td><a href='edit_usuario.php?id=" . $row_usuario['cd_usuario'] . "'class='btn btn-success'>Editar</a></td>";
					echo "<td><a href='view_usuario.php?id=" . $row_usuario['cd_usuario'] . "'class='btn btn-primary'>Visualizar</a></td>";
					echo "</tr>";
				}
				?>
				</table>
				</div>
				</form>
		</body>
	</html>
<?php include 'partials/footer.php'; ?>