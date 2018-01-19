<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perfil</title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">    
	<link rel="stylesheet" type="text/css" href="css/perfil.css">    
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="materialize.css">

	<!-- Icon -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body class="grey lighten-4">


  <div class="navbar-fixed">
     <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content modal-trigger">
        <li><a class="modal-trigger" href="#modal1">Editar Conta</a></li>


        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">Sair</a></li>
    </ul>
    <nav class="barramenu " >
        <div class="nav-wrapper blue darken-3">
            <a href="#!" class="brand-logo position" id="face">Facebook</a>
            <ul class="right hide-on-med-and-down">

                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="inicio.html">Página Inicial</a></li>

              <div id="menunav">
                <li><a href="#"><i class="material-icons  modal-trigger" href="#modal1"">face</i></a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button"  href="#!" data-activates="dropdown1"><i class="material-icons">settings
                </i></a></li>
                </div>
            </ul>
        </div>
    </nav>
</div>

   <!-- Menu lateral Direito -->

    <!-- Amigos -->
    <div class="row" id="amigos">
      <div class="col s12 m5">
        <div class="card-panel white blue-text darken-3">
            <h5>Amigos</h5>
            <span class="black-text">I am a very simple card. 
            </span>
            <ul class="collection">
                <li class="collection-item avatar">
                  <img src="assets/images/posts/mario.jpg" alt="" class="circle">
                  <span class="title">Mario</span>
                  <p> <br>

                  </p>
                  <a href="#!" class="secondary-content"><i class="material-icons grey-text">chat</i></a>
              </li>
              <li class="collection-item avatar">
                  <img src="assets/images/posts/baby.jpg" alt="" class="circle">
                  <span class="title">Bebê Fumante</span>
                  <p> <br>

                  </p>
                  <a href="#!" class="secondary-content"><i class="material-icons grey-text">chat</i></a>
              </li>
              <li class="collection-item avatar">
                  <img src="assets/images/posts/drauzio.jpg" alt="" class="circle">
                  <span class="title">Dr. Drauzio</span>
                  <p> <br>

                  </p>
                  <a href="#!" class="secondary-content"><i class="material-icons grey-text">chat</i></a>
              </li>
          </ul>

      </div>
  </div>
</div>

<!-- Sugestão de Amigos -->
<div class="row" id="sugestao">
  <div class="col s12 m5">
    <div class="card-panel white blue-text darken-3">
        <h5>Sugestão de Amigos</h5>
        <span class="black-text">I am a very simple card. I am good at containing small bits of information.</span>
         <ul class="collection">
                <li class="collection-item avatar">
                  <img src="assets/images/posts/dj.jpg" alt="" class="circle">
                  <span class="title">Astronauta</span>
                  <p> <br>

                  </p>
                  <a href="#!" class="secondary-content"><i class="material-icons grey-text">person_add</i></a>
              </li>
              <li class="collection-item avatar">
                  <img src="assets/images/posts/ines.jpg" alt="" class="circle">
                  <span class="title">Inês Brasil</span>
                  <p> <br>

                  </p>
                  <a href="#!" class="secondary-content"><i class="material-icons grey-text">person_add</i></a>
              </li>                       
          </ul>

    </div>
</div>
</div>
<!-- Grupos -->
<div class="row" id="group">
  <div class="col s12 m5">
    <div class="card-panel white blue-text darken-3">
        <h5>Grupos</h5>
        <span class="black-text">I am a very simple card. 
        </span>

        <ul class="collection">
            <li class="collection-item dismissable"><div>South America Memes<a href="#!" class="secondary-content"><i class="material-icons grey-text">group</i></a></div></li>
            <li class="collection-item dismissable"><div>Gamers<a href="#!" class="secondary-content"><i class="material-icons grey-text">group</i></a></div></li>
            <li class="collection-item dismissable"><div>Alzheimer<a href="#!" class="secondary-content"><i class="material-icons grey-text">group</i></a></div></li>
        </ul>
    </div>
</div>
</div>

	<!-- Menu lateral Esquerdo -->
	<div id="feed">
		<div class="chip">
			<img href="#" src="assets/images/posts/home.png"  alt="Contact Person">
			<a href="inicio.html">Página Inícial</a> 
		</div>
		<br>
		<div class="chip">
			<img href="perfil.php" src="assets/images/posts/perfil.png"  alt="Contact Person"></a>
			<a href="perfil.php">Perfil</a>
		</div>
		<br>
		<div class="chip">
			<img href="#" src="assets/images/posts/foto.png"  alt="Contact Person">
			Fotos
		</div>
		<br>
		<div class="chip">
			<img href="#" src="assets/images/posts/face.png" width="10" alt="Contact Person">

			Amigos
		</div>
		<br>
		<div class="chip">
			<img href="#" src="assets/images/posts/grupo.png"  alt="Contact Person">
			Grupos
		</div>
	</div>


	<!-- Background Centralizado -->
	<div class="corpo" style="overflow-y: scroll;"> 

		<div class="card">
			<div class="card-image waves-effect waves-block waves-light">
				<img class="activator" src="assets/images/posts/banner.png">
			</div>

			<div class="card-content">
				<span class="card-title activator grey-text text-darken-4">Soldado Ryan<i class="material-icons right">phot</i></span>


				<!-- Modal Structure -->
				<div id="modal1" class="modal">
					<div class="modal-content">
						<h4>Editar Perfil</h4>
						<p>A bunch of text</p>

						<!-- Formulario Editar Perfil -->
						<div class="row">
							<form method="POST" action="" class="col s12 editarperfil">
								<div class="row">
									<div class="input-field col s6">
										<input id="first_name" type="text" class="validate">
										<label for="first_name">Nome</label>
									</div>
									<div class="input-field col s6">
										<input id="last_name" type="text" class="validate">
										<label for="last_name">Sobrenome</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="password" type="password" class="validate">
										<label for="password">Senha</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="email" type="email" class="validate">
										<label for="email">E-Mail</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<textarea id="textarea"  class="materialize-textarea"></textarea>
										<label for="textarea">Status</label>
									</div>
								</div>

							</form>
						</div>

					</div>
					<div class="modal-footer">
						<a href="#!" class="modal-action modal-close waves-effect  btn-flat">Confirmar</a>
						<a href="#!" class="modal-action modal-close waves-effect  btn-flat">Cancelar</a>
					</div>
				</div>


				<!-- Botão Editar Perfil Abrindo em Modal -->
				<a class="btn-floating btn waves-effect waves-light blue darken-3 right btneditar modal-trigger" href="#modal1"><i class="material-icons">mode_edit</i></a>
				


				<!-- Barra de Navegação Navbar-->
				<div class="card-action text-darken-3">
					<div id="opcao">
						<a href="inicio.html">Linha do Tempo</a>
						<a href="#">Sobre</a>
						<a href="#">Amigos</a>				
					</div>
				</div>			
			</div>

		</div>

		<!-- Foto de Perfil-->
		<div class="fotoperfil">
			<img class="materialboxed imgperfil" width="150" src="assets/images/posts/war.jpg">
		</div>


		<!--  Linha do Tempo  -->
		<div class="row">
			<div class="col s12 m12">
				<div class="card">
					<div class="card-content">
						<div class="chip">
							<img src="assets/images/posts/mario.jpg" alt="Contact Person">
							<a href="#!">  Mario </a>
						</div>    
						<p>I am a very simple card. I am good at containing small bits of information.
						I am convenient because I require little markup to use effectively.</p>
					</div>
					<!--  Imagem  -->
					<div class="card-image">            
						<img src="assets/images/posts/rick.png" width="710">
					</div>
					<!--  Botão Curtir  -->
					<div class="card-action">
						<div class="btn-flat">Curtir
							<i class="material-icons right">thumb_up</i>
						</div>
						<!--  Botão Comentar  -->
						<div class="btn-flat">Comentar
							<i class="material-icons right">comment</i>
						</div>
						<!--  Botão Compartilhar  -->
						<div class="btn-flat">Compartilhar
							<i class="material-icons right">reply</i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


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

<!--  Inicialização Menu Dropdown -->
<script>
	$(".dropdown-button").dropdown();
</script>

</body>
</html>
