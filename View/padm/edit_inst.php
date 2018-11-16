
<!-- Header -->
	<?php include ("partials/header.php")?>
	
<?php
session_start();
include_once("partials/conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_inst = "SELECT * FROM tb_inst WHERE cd_inst = '$id'";
$resultado_inst = mysqli_query($conn, $result_inst);
$row_inst = mysqli_fetch_assoc($resultado_inst);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar Instituição</title>
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
                $("#rua4").val("");
                $("#bairro4").val("");
                $("#cidade4").val("");
                $("#uf4").val("");
                $("#ibge4").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep4").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep4 = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep4 != "") {

                    //Expressão regular para validar o CEP.
                    var validacep4 = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep4.test(cep4)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua4").val("...");
                        $("#bairro4").val("...");
                        $("#cidade4").val("...");
                        $("#uf4").val("...");
                        $("#ibge4").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep4 +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua4").val(dados.logradouro);
                                $("#bairro4").val(dados.bairro);
                                $("#cidade4").val(dados.localidade);
                                $("#uf4").val(dados.uf);
                                $("#ibge4").val(dados.ibge);
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
		<form method="POST" action="proc_edit_inst.php" style="border:1px solid #dcdcdc; padding:10px;" >
        <h1>Editar Instituição</h1><br>
			<input type="hidden" name="id" value="<?php echo $row_inst['cd_inst']; ?>">
			
			<label>E-mail: </label>
			<input type="email" class="w3-input" name="email" placeholder="Digite o email" value="<?php echo $row_inst['nm_email_inst']; ?>"><br><br>

			<label>Nome: </label>
			<input type="text" class="w3-input" name="nome" placeholder="Digite o nome de inst" value="<?php echo $row_inst['nm_inst']; ?>"><br><br>
			
			<label>CEP: </label>
			<input name="cep4" class="w3-input" type="text" id="cep4" size="10" maxlength="9" placeholder="Digite o cep" value="<?php echo $row_inst['cd_cep_inst']; ?>"><br><br>
			<br>

			<label>Cidade: </label>
			<input name="cidade4" class="w3-input" type="text" id="cidade4" size="40" placeholder="Digite a cidade" value="<?php echo $row_inst['nm_cidade_inst']; ?>"><br><br>
			<br>

			<label>N°: </label>
			<input type="text" class="w3-input" name="num" placeholder="Digite Numero da residencia" value="<?php echo $row_inst['num_inst']; ?>"><br><br>
			<br>

			<label>Bairro: </label>
			<input name="bairro4" class="w3-input" type="text" id="bairro4" size="40" placeholder="Digite o bairro" value="<?php echo $row_inst['nm_bairro_inst']; ?>"><br><br>
			<br>

			<label>Rua: </label>
			<input name="rua4" class="w3-input" type="text" id="rua4" size="60" placeholder="Digite a rua" value="<?php echo $row_inst['nm_rua_inst']; ?>"><br><br>
			<br>

			<label>UF: </label>
			<input name="uf4"  type="text" id="uf4" size="2" placeholder="Ssg" value="<?php echo $row_inst['sg_estado_inst']; ?>"><br><br>
			<br>

			<input type="submit" class="btn btn-primary" value="Editar">
		</form>
	</body>
</html>
<?php include 'partials/footer.php'; ?>