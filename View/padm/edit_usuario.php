
<!-- Header -->
	<?php include ("partials/header.php")?>
	
<?php
session_start();
include_once("partials/conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM tb_usuario WHERE cd_usuario = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar Usuário</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua3").val("");
                $("#bairro3").val("");
                $("#cidade3").val("");
                $("#uf3").val("");
                $("#ibge3").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep3").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep3 = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep3 != "") {

                    //Expressão regular para validar o CEP.
                    var validacep3 = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep3.test(cep3)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua3").val("...");
                        $("#bairro3").val("...");
                        $("#cidade3").val("...");
                        $("#uf3").val("...");
                        $("#ibge3").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep3 +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua3").val(dados.logradouro);
                                $("#bairro3").val(dados.bairro);
                                $("#cidade3").val(dados.localidade);
                                $("#uf3").val(dados.uf);
                                $("#ibge3").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>	
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
	</head>
	<body>


		
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php" style="border:1px solid #dcdcdc; padding:10px;"  >

        <h1 class="text-center">Editar Usuário</h1>
			<input type="hidden" name="id" value="<?php echo $row_usuario['cd_usuario']; ?>">
			
			<label>E-mail: </label>
			<input type="email" class="w3-input" name="email" placeholder="Digite o email" value="<?php echo $row_usuario['nm_email']; ?>"><br><br>

			<label>Nome: </label>
			<input type="text" class="w3-input" name="nome" placeholder="Digite o nome de usuario" value="<?php echo $row_usuario['nm_usuario']; ?>"><br><br>
			
			<label>CEP: </label>
			<input name="cep3" class="w3-input" type="text" id="cep3" size="10" maxlength="9" placeholder="Digite o cep" value="<?php echo $row_usuario['cd_cep_usuario']; ?>"><br><br>
			<br>

			<label>Cidade: </label>
			<input name="cidade3" class="w3-input" type="text" id="cidade3" size="40" placeholder="Digite a cidade" value="<?php echo $row_usuario['nm_cidade_usuario']; ?>"><br><br>
			<br>

			<label>N°: </label>
			<input type="text" class="w3-input" name="num" placeholder="Digite Numero da residencia" value="<?php echo $row_usuario['num_casa']; ?>"><br><br>
			<br>

			<label>Bairro: </label>
			<input name="bairro3" class="w3-input" type="text" id="bairro3" size="40" placeholder="Digite o bairro" value="<?php echo $row_usuario['nm_bairro_usuario']; ?>"><br><br>
			<br>

			<label>Rua: </label>
			<input name="rua3" class="w3-input" type="text" id="rua3" size="60" placeholder="Digite a rua" value="<?php echo $row_usuario['nm_rua_usuario']; ?>"><br><br>
			<br>

			<label>UF: </label>
			<input name="uf3" class="w3-input" type="text" id="uf3" size="2" placeholder="Digite o estado" value="<?php echo $row_usuario['sg_estado_usuario']; ?>"><br><br>
			<br>

			<label>Senha: </label>
			<input type="text" class="w3-input" name="senha" placeholder="Digite a senha" value="<?php echo $row_usuario['cd_senha_usuario']; ?>"><br><br>
			<br>

			
			   
                <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
  <option value="<?php echo $row_usuario['nm_type']; ?>" name="type"><?php echo $row_usuario['nm_type']; ?></option>
    
    <option>Adminstrador</option>
      <option>Usuario</option>
        <option>Suspenso</option>
    </select>
    </div>

			<input type="submit" class="btn btn-primary" value="Editar">
		</form>
	</body>
</html>
<?php include 'partials/footer.php'; ?>