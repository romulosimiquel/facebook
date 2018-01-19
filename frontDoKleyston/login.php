<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Facebook</title>

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



<div id="login">
	<!-- Modal Trigger -->
	<a class="waves-effect waves-light btn modal-trigger blue darken-3" href="#modal1">Login</a>

	<!-- Modal Structure -->
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
  				<form class="col s12 btnform">
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
    </div>

  </div>
		
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Sair</a>
		</div>
	</div>

</div>

<h4>Seja Bem Vindo!</h4>

	<!-- Menu lateral Direito -->
	<div id="fundo">
	<img href="#" src="assets/images/posts/rede.jp" id="imgfundo" alt="Rede">
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
