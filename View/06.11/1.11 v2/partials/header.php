<title>Weblife</title>
<meta charset="utf-8">

<!-- Css -->   
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.header{
			height: 70px;
			margin: 0 auto;
			background-color: #222;
			max-width: 1800px;
		}
		.logo{
			text-align: center;
		}



nav li {
  display: inline-block;
  padding: 12px;
}

nav a {
  color: #fff;
  text-decoration: none;
  display: block;
  padding: .80em 1.75em;
}

nav li:hover a {
  color: #fff;
}


.menu-sub {
	border-radius: 15px;
  position: absolute;
  margin-top: 15px;
  background: #222;
  width: 30%;
  display: none;
  color: #fff;
  padding: 2em;
  border:2px solid #fFF;
}

nav li:hover .menu-sub {
  display: block;
}

.menu-sub li {
  display: block;
}
.menu-main{
	margin-top: -64px;
		padding: 12px;
}
.row{
	display: flex;
}


	</style>

<!-- Header -->
	<div class="header">

		<!-- Logo -->
			<div class="logo">
				<img src="img/logo.png" width="200px" style="margin-top: 3px;">
			</div>  


		<div class="menu">
				<nav>

        <ul class="menu-main">
        <li><a href="" style="text-decoration: none;"> Pagina inicial</a></li>

             <li><a href="#" style="text-decoration: none;" >Como funciona?</a>
            <div class="menu-sub">
              <div class="menu-col-2">
<div class="row">
              	<img src="img/facu.png" style="border-radius: 50%; width: 80px;height: 80px; padding: 10px;">
                <p style="text-decoration: none; font-size: 20px; margin-top: 25px;" >Encontre sua faculdade</p>
                  </div> 
                <p>Faça uma busca pelas universidades que existe na baixada santista</p> 
              
               
                    <div class="row">
              	<img src="img/question1.png" style="border-radius: 50%; width: 80px;height: 80px; ">
                <p style="text-decoration: none; font-size: 20px; margin-top: 25px;" > Detalhes da grade</p>
                  </div> 
                <p> Procure por uma area expecifica, veja a grade dos curso que mais lhe interresa-lhe</p> 

          

 <div class="row">
              	<img src="img/question2.png" style="border-radius: 50%; width: 85px;height: 85Px; padding: 10px;">
                <p style="text-decoration: none; font-size: 20px; margin-top: 25px;" >Economize tempo  </p>
                  </div> 
                <p> Facilide suas busca usando o pesquisa avançada para mais precisao no resultado!!</p> 

              
</div>
            </div>
          </li>

        </ul>
    
  </nav>
</div>




			
</div>

<style>
	*{
		margin: 0;
		padding:0;
	}

	@media (max-width: 800px) {
			.login{
				margin-top: -10%;
				margin-left: 55%;
		}}

		@media (max-width: 700px){
			.login{
				margin-top: -12%;
				margin-left: 78%;
			}
		}



</style>

<div class="login">
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal" style="float: right !important; margin-top: -4%; margin-right: 10%; width: 70px; background-color: transparent; border: 1px groove #cdcdcd; color: #cdcdcd; max-width: 1200px;" >Login
  </button>
</div>
<button type="button" class="close" aria-label="Close">

</button>
  <!-- Modal -->

  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
<!-- Modal Header -->
<div class="modal-header">
      
<h1 class="modal-title" style="text-align: center;">Acesse sua conta</h1>
        <hr>
 <div class="modal-body">
	<div class="form-group">
  		<label for="usr">Email</label>
  	<input type="text" class="form-control" id="usr" placeholder="Digite seu email..." style="">
	</div>

<div class="form-group">
  	<label for="pwd">Senha</label>
 		 <input type="password" class="form-control" id="pwd" placeholder="Senha..."><br>
  		<input type="checkbox" name="remember" ><span>Lembre-me</span>
</div>

 <input type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block"/><br />

<P align="center" size="20px;" >Não é cadastrado?<a href="cadastrousuario.php"> Clique aqui</a></P>
</div>
</div>
                 
      </div>
    </div>
  </div>
  
</div>




	

