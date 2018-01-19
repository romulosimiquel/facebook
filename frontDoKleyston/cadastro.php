<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>

	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="materialize.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">

	<!-- Icon -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body class="grey lighten-4">
	<nav class="blue darken-3 barra">
		<div class="nav-wrapper">
			<a href="#!" class="brand-logo position" id="face">Facebook</a>

		</div>
	</nav>


<!--
	<div id="login">
		<!- Modal Trigger --
		<a class="waves-effect waves-light btn modal-trigger blue darken-3" href="#modal1">Entrar</a>

		<!-- Modal Structure --
		<div id="modal1" class="modal modal-fixed-footer">
			<div class="modal-content">


				<div class="card">
					<div class="card-content">
						<h4>Fazer Login</h4>
						<p style="text-align:center;"> I am a very simple card. I am good at containing small bits of information.</p>

						<div class="card-tabs">
							<ul class="tabs tabs-fixed-width">
								<li class="tab"><a href="#test4">Login</a></li>
								<li class="tab"><a class="active" href="#test5">Cadastrar</a></li>
							</ul>
						</div>

						<div class="row">      
							<form class="col s12 btncadastro">
								<div class="row">
									<div class="input-field col s12">
										<input id="first_name" type="text" class="validate">
										<label for="first_name">First Name</label>
									</div>
								</div>
							</form>
						</div>

						<div class="row">      
							<form class="col s12">
								<div class="row">
									<div class="input-field col s12">
										<input id="email" type="email" class="validate">
										<label for="email" data-error="wrong" data-success="right">Email</label>
									</div>
								</div>
							</form>
						</div>

						<div class="row">
							<form class="col s12">
								<div class="row">
									<div class="input-field col s12">
										<input id="password" type="password" class="validate">
										<label for="password">Senha</label>
									</div>
								</div>
							</form>
						</div>


						<div class="row"> 
							<form action="#" class="col s12">
								<p>
									<input name="group1" type="radio" id="test1" />
									<label for="test1">Masculino</label>
								</p>
								<p>
									<input name="group1" type="radio" id="test2" />
									<label for="test2">Feminino</label>
								</p>
							</form>			
						</div>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Sair</a>
			</div>
		</div>

	</div>

-->
<!-- Fazer Login na Barra Topo -->
<div class="row text-white">      
	<form class="col s6 formlogin">
		<!-- E-Mail-->
		<div class="input-field col s4">
			<input id="email"  placeholder="E-Mail"  type="email" class="validate">
			<label for="email" data-error="wrong" data-success="right"></label>
		</div>

		<!-- Senha-->
		<div class="input-field col s4 text-white">
			<input id="password" placeholder="Senha" type="password" class="validate">
			<label for="password"></label>
		</div>

	</form>

</div>
<!-- Botão Entrar -->
<button class="btn waves-effect waves-light btnentrar  blue darken-4 blue-white" type="submit" name="action">Entrar
	<i class="material-icons right"></i>
</button>


<!-- Menu lateral Direito - Criar Conta -->

<div class="row">
	<div class="col s12 m6" id="caixacadastro">
		<div class="card-panel white">


			<h3 style="color: #1565c0">Criar Conta</h3>
			<span>Cadastre-se no Facebook e encontre seus amigos. <br/> Compartilhe fotos e atualizações com as pessoas que você conhece.</span>
			<!-- Nome -->
			<div class="row">      
				<form method="POST" action="#" class="col s12 btncadastro">
					<div class="row">
						<div class="input-field col s12">
							<input id="first_name" type="text"  class="validate">
							<label for="first_name">Nome</label>
						</div>
					</div>
				</form>
			</div>
			<!-- E-Mail -->
			<div class="row">      
				<form method="POST" action="#" class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<input id="email" type="email" class="validate">
							<label for="email" data-error="wrong" data-success="right">E-Mail</label>
						</div>
					</div>
				</form>
			</div>
			<!-- Senha -->
			<div class="row">
				<form method="POST" action="#" class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<input id="password" type="password" class="validate">
							<label for="password">Senha</label>
						</div>
					</div>
				</form>
			</div>
			<!-- Sexo -->
			<form action="#">
				<p>
					<input name="group1" type="radio" id="test1" />
					<label for="test1">Masculino</label>
				</p>
				<p>
					<input name="group1" type="radio" id="test2" />
					<label for="test2">Feminino</label>
				</p>
			</form>

			<span>Ao clicar em Criar Conta, você concorda com nossos <br/> <a href="#">Termos</a> e que leu nossa <a href="#">Política de Dados.</a></span>
			<br/><br/>
			<button class="btn waves-effect waves-light  blue darken-3" type="submit" name="action">Criar Conta
				<i class="material-icons right">account_circle</i>
			</button>





		</div>
	</div>
</div>
<!-- Texto de Boas Vindas -->
<h5 style="text-align: left;">O Facebook ajuda você a se conectar e <br/> compartilhar com as pessoas que fazem parte <br/> da sua vida.</h5>
<!-- Imagem de Fundo -->
<div id="fundo">
	<img href="#" src="assets/images/posts/network.png" id="imgfundo" alt="Rede">
</div>

	<!--<div id="rodape">
	
	</div>-->


	<!-- Jquery -->
	<script src="js/jquery-3.2.1.js"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="js/materialize.min.js"></script>

	<!--  Inicialização Modal -->
	<script>
		$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});
</script>

</body>
</html>
