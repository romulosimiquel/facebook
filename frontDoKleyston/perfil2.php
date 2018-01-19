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
	<nav class="blue darken-3 barra">
		<div class="nav-wrapper">
			<a href="#!" class="brand-logo position" id="face">Facebook</a>

		</div>
	</nav>



	<!-- Menu lateral Esquerdo -->
	<div id="pub">
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
	<div class="corpo"> 




		<div class="card">
			<div class="card-image waves-effect waves-block waves-light">
				<img class="activator" src="assets/images/posts/banner.png">
			</div>

			<div class="card-content">
				<span class="card-title activator grey-text text-darken-4">Perfil<i class="material-icons right">phot</i></span>

				<!-- Botão Editar Perfil -->
				<a class="btn-floating btn waves-effect waves-light blue darken-3 right btneditar"><i class="material-icons">mode_edit</i></a>

				<!-- Barra de Navegação do Perfil-->
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
			<img class="materialboxed imgperfil" width="150" src="assets/images/posts/avatar.jpg">
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

</body>
</html>
