<?php include  "partials/conexao.php";?>
<?php
  /*
	Este exemplo mostra como excluir dados em uma tabela
	MySQL usando um código PHP.
  */
 
  $id = $_GET['id'];// Ou POST, dependendo de onde vem o ID do campo para apagar
  // Comando SQL para excluir os dados em uma tabela  
  $sql = "DELETE FROM tb_usuario WHERE cd_usuario='$id'";
  
  
  // Executa o comando SQL
  $result = mysqli_query($conn, $sql);
  
  // Verifica se o comando foi executado com sucesso
  if(!$result)
	die("Falha ao executar o comando: " . mysql_error());
  else
	header('location: list_usuario.php')
?>