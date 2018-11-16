
    <!DOCTYPE html>
    <html lang="PT-BR" >

<!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta content="Painel administrador da WebLife" name="description">
<!-- Title -->

        
<!-- Css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--Import Google Icon Font-->
  
  
<style>
  
    *{
      margin: 0;
      padding: 0;
    }
  .header{
    width: 100%;
    height: 70px;
    background-color: #222;
    max-width:1800px;
    margin:auto;
  }
    .logo{
      text-align: center;
    }
      .menu{
      width: 40%;
      margin-top: -74px;
      height: 30px;
      background-color: #222;
      font-family: 'Arial';

    }
      .menu ul{
      list-style: none;
      position: relative;
    }
    .menu ul li{
      width: 100px;
      float: left;
    }
    
    
      .menu a{
      padding: 24px;
      display: block;
      text-decoration: none;
      text-align: center;
      background-color: #222;
      color: #fff;  
    }
    .menu ul ul{
      position: absolute;
      visibility: hidden;
    }
      .menu ul li:hover ul {
      visibility: visible;
    }
    .menu a:hover{
  
      color: #555;
    }
    .menu ul ul li{
      float: none;
      border-bottom: solid 3px #0080FF;

    }
    .menu ul ul li a{
      background-color: #069
      padding 0px 40px;
    }

      label[for="bt_menu"]{
      padding: 5px;
      background-color: #222;
      color: #fff;
      font-family: 'Arial';
      text-align: center;
      font-size: 30px;
      cursor: pointer;
      width: 50px;
      height: 50px;
      margin-top: -50px;
    }
    #bt_menu{
      margin:0;
      margin-top: -20px;
      display: none;
    }
    label[for=bt_menu]{
      display: none;
    }
    @media(max-width: 800px) {
      label[for=bt_menu]{
      display: block;
    }
    #bt_menu:checked ~ .menu{
      margin-left: 0;
    }
    .menu{
      margin-top: 13.5px;
      margin-left: -100%;
      transition: all .4s;
    }
    .menu ul li{
      width: 100%;
      float: none;
    }
    .menu ul ul {
      position: static;
      overflow: hidden;
      max-height: 0;
      transition: all .4s;
    }
    .menu ul li:hover ul{
      height: auto;
      max-height: 200px;
    }


</style>
<!-- Body -->

    
  <div class="header">

    <!-- Logo -->
      <div class="logo">
        <a href="index.php"><img src="partials/logo.png" width="200px" style="margin-top: 3px;"></a>
      </div>  

      <input type="checkbox" id="bt_menu">
        <label for="bt_menu">&#9776;</label>

          <div class="menu">
            <ul>
              <li><a  style="color:#fff;">Usuario</a>
                <ul>
                <li><a data-toggle="modal" data-target="#myModal2"><button style="background-color:transparent; color:#fff; border:1px solid #222;">Cadastro usuario</button></li></a> 
                <li><a href="list_usuario.php">Lista usuario</a></li>
                  </ul>
              </li>

              <li><a style="color:#fff; ">Instituição</a>
                <ul>
                <li><a data-toggle="modal" data-target="#myModal1"><button style="background-color:transparent; color:#fff; border:1px solid #222;">Cadastro Instituição</button></li></a>             
                  <li><a href="list_inst.php">Lista instutição</a></li>
                 
                </ul>
              </li>

                 <li><a href="">Curso</a>
                <ul>
                 <li><a data-toggle="modal" data-target="#myModal"><button style="background-color:transparent; color:#fff; border:1px solid #222;">Cadastro Curso</button></li></a>
                  <li><a href="list_curso.php">Lista cursos</a></li>
                </ul>
              </li>
            </ul>
          </div>
  </div>

  <div class="login">

</div>
<button type="button" class="close" aria-label="Close"></button>



  <!-- Modal -->

  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
<!-- Modal Header -->
<div class="modal-header">
   


 <div class="modal-body">
 <form method="POST" action="proc_cad_curso.php">

		<h1 class="text">Cadastrar Curso</h1>
		<hr>
		
    <label>Nome do curso: </label>
			<input type="text" class="w3-input" name="nome" placeholder="Digite o nome do curso.." value=""><br><br>
			
			<label>Descrição: </label>
			<input name="descricao" class="w3-input" type="text" placeholder="Digite a informação do curso..." ><br><br>

		<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Instituição</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Escolha uma faculdade...</option>
    <option value="Av. Presidente Wilson, 1013 - Itararé, São Vicente - SP 11320001.">Escola e Faculdade Fortec - Itararé, São Vicente - SP</option>
<option value="Av. Bartolomeu de Gusmão, 110 - Aparecida, Santos - SP 11045908.">Faculdade de Tecnologia do Estado de São Paulo - Santos - SP </option>
<option value="R. Mal. Euríco Gáspar Dutra, 836 - Canto do Forte, Praia Grande - SP 11700330.">Faculdade do Litoral Sul Paulista - Praia Grande - SP </option>
<option value="R. Dr. Egídio Martins, 181 - Ponta da Praia, Santos - SP 11030902.">Faculdade ESAMC Santos - Santos - SP</option>
<option value="Praça 19 de Janeiro, 144 - Boqueirão, Praia Grande - SP 11700100.">Fatec - Boqueirão, Praia Grande - SP</option>
<option value="Av. Bartolomeu de Gusmão, 110 - Aparecida, Santos - SP 11045908.">Fatec - Aparecida, Santos - SP</option>
<option value="Av. Pres. Kennedy, 4000 - Aviação, Praia Grande - SP 11702480.">FPG - Praia Grande - SP </option>
<option value="Av. Cap. Mor de Aguiar, 798 - Centro, São Vicente - SP 11310200.">Faculdade UNIBR -  São Vicente - SP</option>
<option value="Rua Maria Cristina, 50 - Casqueiro,  Cubatão - SP 11533160.">IFSP Instituro Federal de Educação, Ciencia e Tecnologia de São Paulo - Cubatão -SP </option>
<option value="R. Oswaldo Cruz, 277 - Boqueirão, Santos - SP 1104590.">Universidade Santa Cecília -  Santos - SP </option>
<option value=" Av. Conselheiro Nébias, 589/595 - Boqueirão, Santos - SP 11015001. ">Universidade Católica de Santos - Santos - SP  </option>
<option value="Comendador Martins, 52 - Vila Matias, Santos - SP 11015530.">São Judas Tadeu Campus Unimonte - Santos - SP </option>
<option value="Av. Conselheiro Nébias, 536 - Encruzilhada, Santos - SP 11045002.">Universidade Metropolitana de Santos - Santos - SP </option>
<option value="Rua Dr. Armando Salles de Oliveira, 150 - Boqueirão, Santos - SP 11050071.">UNILUS - Centro Universitário Lusíada - Santos - SP </option>	  
<option value="Av. Dom Pedro I, 3300 - Balneario Cidade Atlantica, Guarujá - SP 11440003.">Unaerp - Guarujá - SP </option>
<option value="RUA TUPI 521 - Vila Tupi, Praia Grande - SP 11703260.">UNIP - Rua Tupi - Vila Tupi, Praia Grande - SP</option>
<option value="Av. Francisco Manoel, s/n.º - Vila Mathias, Santos - SP 11075110.">UNIP - Av. Francisco Manoel - Vila Mathias,  Santos - SP </option>
<option value="Av. Conselheiro Nébias, 772 - Boqueirão, Santos - SP 11015001.">UNIP - Av. Conselheiro Nébias - Boqueirão, Santos - SP </option>
<option value="Av. Sen. César Lacerda Vergueiro, 87 - Ponta da Praia, Santos - SP 11030220.">UNIP - Av. Sen. César Lacerda Vergueiro - Ponta da Praia, Santos - SP </option>
<option value="Av. Presidente Wilson, 424 - Boa Vista, São Vicente - SP 11320001.">UNIP -  Av. Presidente Wilson - Boa Vista, São Vicente - SP</option>
<option value=" R. Prudente de Moraes, 1172 - Jardim Ribamar, Peruíbe - SP 11750000.">UNIP - R. Prudente de Moraes - Jardim Ribamar, Peruíbe - SP</option>
<option value="R. Paraíso, 143 - Praia dos Sonhos, Itanhaém - SP 11740000.">UNIP - R. Paraíso, - Praia dos Sonhos, Itanhaém - SP</option>
<option value="Av. Nações Unidas, nº 36 - Vila Nova, Cubatão - SP 11520140.">Unopar - Vila Nova, Cubatão - SP</option>
<option value="Av. Quarentenário, 972-1048 - Jardim Quarentenario, São Vicente - SP 11347520.">Univesp - Jardim Quarentenario, São Vicente - SP</option>
<option value="Rua Silva Jardim, n° 136 - Santos - SP 11015020.">Universidade Federal de São Paulo -Santos - SP </option>
<option value="R. Dr. Carvalho de Mendonça, 144 - Vila Belmiro, Santos - SP 11070102.">Universidade Federal de São Paulo BS - Unidade IV Carvalho de Mendonça
- Vila Belmiro, Santos - SP</option>
  </select>
</div>


			<div id="botao">
			<input type="submit" value="Cadastrar" class="btn btn-primary" >
			</div>
		</form>
</div>
</div>

      </div>
    </div>
  </div>





  <!-- Modal -->

<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">
<!-- Modal Header -->
<div class="modal-header">
 


<div class="modal-body">
<h1>Cadastro de Instituição</h1>
<hr>

		<form method="POST" action="proc_cad_inst.php">
			
			<label>E-mail: </label>
			<input type="email" class="w3-input" name="email" placeholder="Digite o email da instituição" ><br><br>

			<label>Nome: </label>
			<input type="text" class="w3-input" name="nome" placeholder="Digite o nome " value=""><br><br>
			
			<label>CEP: </label>
			<input name="cep" class="w3-input" type="text" id="cep" size="10" maxlength="9" placeholder="Digite o cep" value=""><br><br>

			<label>Cidade: </label>
			<input name="cidade" class="w3-input" type="text" id="cidade" size="40" placeholder="Digite a cidade da instituição" value=""><br><br>

			<label>N°: </label>
			<input type="text" class="w3-input" name="num" placeholder="Digite Numero da residencia" value=""><br><br>

			<label>Bairro: </label>
			<input name="bairro" class="w3-input" type="text" id="bairro" size="40" placeholder="Digite o bairro" value=""><br><br>

			<label>Rua: </label>
			<input name="rua" class="w3-input" type="text" id="rua" size="60" placeholder="Digite a rua" value=""><br><br>

			<label>UF: </label>
			<input name="uf" type="text" id="uf" size="2" placeholder="SG..." value=""><br><br>

			<input type="submit" class="btn btn-primary" value="Cadastrar">
		</form>

</div>
</div>

    </div>
  </div>
</div>

<!-- Modal -->

<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">
<!-- Modal Header -->
<div class="modal-header">



<div class="modal-body">
<h1>Cadastro de Usuario</h1><hr>
		<form method="POST" action="proc_cad_usuario.php">
			
			<label>E-mail: </label>
			<input type="email" class="w3-input" name="email" placeholder="Digite o email da instituição" ><br><br>

			<label>Nome: </label>
			<input type="text" class="w3-input" name="nome" placeholder="Digite o nome " value=""><br><br>
			
			<label>CEP: </label>
			<input name="cep2" class="w3-input" type="text" id="cep2" size="10" maxlength="9" placeholder="Digite o cep" value=""><br><br>

			<label>Cidade: </label>
			<input name="cidade2" class="w3-input" type="text" id="cidade2" size="40" placeholder="Digite a cidade da instituição" value=""><br><br>

			<label>N°: </label>
			<input type="text" class="w3-input" name="num" placeholder="Digite Numero da residencia" value=""><br><br>

			<label>Bairro: </label>
			<input name="bairro2" class="w3-input" type="text" id="bairro2" size="40" placeholder="Digite o bairro" value=""><br><br>

			<label>Rua: </label>
			<input name="rua2" class="w3-input" type="text" id="rua2" size="60" placeholder="Digite a rua" value=""><br><br>

			<label>UF: </label>
			<input name="uf2" type="text" id="uf2" size="2" placeholder="SG..." value=""><br><br>


			<label>Senha: </label>
			<input type="text" class="w3-input"  name="senha" placeholder="Digite a senha" value=""><br><br>

		<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="type">
    <option selected>Escolha um tipo de pessoa...</option>
    
    <option>Adminstrador</option>
      <option>Usuario</option>
        <option>Suspenso</option>
    </select>
    </div>

    			<input type="submit" class="btn btn-primary" value="Cadastrar">
		</form>
    
</div>
</div>

    </div>
  </div>
</div>
</div>

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

<script type="text/javascript" >

$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua2").val("");
        $("#bairro2").val("");
        $("#cidade2").val("");
        $("#uf2").val("");
        $("#ibge2").val("");
    }
    
    //Quando o campo cep perde o foco.
    $("#cep2").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep2 = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep2 != "") {

            //Expressão regular para validar o CEP.
            var validacep2 = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep2.test(cep2)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua2").val("...");
                $("#bairro2").val("...");
                $("#cidade2").val("...");
                $("#uf2").val("...");
                $("#ibge2").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep2 +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua2").val(dados.logradouro);
                        $("#bairro2").val(dados.bairro);
                        $("#cidade2").val(dados.localidade);
                        $("#uf2").val(dados.uf);
                        $("#ibge2").val(dados.ibge);
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