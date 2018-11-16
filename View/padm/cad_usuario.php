<!-- Session -->
	<?php session_start(); ?>

<!-- Header -->
	<?php include ("partials/header.php")?>
	
<!-- Banco -->
	<?php include_once("partials/conexao.php");?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar Usuário</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
 *{
    margin: 0;
    padding: 0;
 }

form{
    text-align: center;
}


</style>

    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
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
	</head>
	<body>
		
		<h1 style="text-align: center;">Cadastrar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_cad_usuario.php">
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o email" value=""><br><br>

			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome de usuario" value=""><br><br>
			
			<label>CEP: </label>
			<input name="cep" type="text" id="cep" size="10" maxlength="9" placeholder="Digite o cep" value=""><br><br>

			<label>Cidade: </label>
			<input name="cidade" type="text" id="cidade" size="40" placeholder="Digite a cidade" value=""><br><br>

			<label>N°: </label>
			<input type="text" name="num" placeholder="Digite Numero da residencia" value=""><br><br>

			<label>Bairro: </label>
			<input name="bairro" type="text" id="bairro" size="40" placeholder="Digite o bairro" value=""><br><br>

			<label>Rua: </label>
			<input name="rua" type="text" id="rua" size="60" placeholder="Digite a rua" value=""><br><br>

			<label>UF: </label>
			<input name="uf" type="text" id="uf" size="2" placeholder="Digite o estado" value=""><br><br>

			<label>Senha: </label>
			<input type="text" name="senha" placeholder="Digite a senha" value=""><br><br>

			<label>Tipo: </label>
			<select name="type">
                <option value="SUSP">Suspenso</option>
                <option value="ADMIN">Administrador</option>
                <option value="USER">Usuário</option>         
            </select><br><br>

			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>
<?php include 'partials/footer.php'; ?>