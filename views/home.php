<!-- Centralizar Conteudo -->
<div class="container">

	<!-- Row Principal -->
	<div class="row">

		<!-- Abre Coluna Esquerda-->
		<div class="col s12 m12 l3 hide-on-med-and-down">

			<div class="card white  grey lighten-4 z-depth-0 right">
				<div class="card-content black-text grey lighten-4">

					<div class="row"> 
						<div class="col s12 m12 l12"> 
							<ul class="collection with-header">
								<li class="collection-header grey lighten-4"><h4><?php echo $viewData['usuario_nome']; ?></h4></li>
								<li class="collection-item grey lighten-4"><div>Página Inícial<a href="<?php echo BASE; ?>" class="secondary-content"><i class="material-icons blue-text">home</i></a></div></li>
								<li class="collection-item grey lighten-4"><div>Perfil<a href="#!" class="secondary-content"><i class="material-icons blue-text">person</i></a></div></li>
								<li class="collection-item grey lighten-4"><div>Fotos<a href="#!" class="secondary-content"><i class="material-icons blue-text">photo</i></a></div></li>
								<li class="collection-item grey lighten-4"><div>Amigos<a href="#!" class="secondary-content"><i class="material-icons blue-text">group</i></a></div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- Fecha Coluna Esquerda-->

		<?php 
			print_r($info);
			echo "<hr/>";
			echo "<h3>".$info['nome']."</h3>";
		?>

		
		<div class="col s12 m12 l6 margen-bottom">  <!-- Coluna Principal Centro -->
			<div class="card-panel scroll" style="overflow-x: hidden;"> <!-- card-panel Principal com Scroll -->

				<!-- Caixa de Texto -->
				<div class="row">

					<div class="col s12 m12 l12">
						<form class=" black-text" method="POST" enctype="multipart/form-data">
							<div class="card blue-grey darken-1">

								<div class="card-content black-text grey lighten-4">
									<div class="row">
                   						 <form class=" black-text">
											<div class="row">

										<div class="input-field col s12">
											<!-- Área de texto -->
											<textarea id="textarea" name="post" class="materialize-textarea"></textarea>
											<label for="textarea">O que você está pensando?</label>
										</div>

									</div>
									</form>
									</div>
								</div>

								<div class="card-action white" style="height: 7%;">
									<div class="col l6">
										<div class="file-field input-field" type="file" style="margin-top: 0;height: 37px;">
											<div class="btn-flat blue-text left">
												Escolher Arquivo
												<input type="file" name="foto" multiple/>
												<i class="material-icons right">folder</i>
											</div>
										</div>
									</div>

									<div class="col l6">
										<div class="btn-flat blue-text right" style="height: 37px;">
											<button class="btn-flat blue-text right" type="submit">
												Enviar <i class="material-icons right">send</i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>					

					<!-- Feed de postagens da linha do tempo -->
					<div>
						<?php
						foreach($feed as $postitem) {
							$this->loadView('postitem', $postitem);
						}
						?>
					</div>

				</div>
			</div>
		</div>


		<!-- MENU LATERAL DIREITO -->

		<!-- Requisições de amizade -->
		<div class="col s12 m12 l3 hide-on-med-and-down">

			<div class="card-panel white blue-text darken-3">


				<?php if(count($requisicoes) > 0): ?>
					<h5>Requisições de amizade</h5>
					<ul class="collection">
						<div class="requisicaoitem">
							<?php foreach($requisicoes as $pessoa): ?>
								<li class="collection-item avatar">
									<img src="assets/images/posts/dj.jpg" alt="" class="circle">
									<span class="title"><?php echo $pessoa['nome']; ?></span>
									<a class="secondary-content" onclick="aceitarFriend('<?php echo $pessoa['id']; ?>', this)"><i class="material-icons grey-text">person_add</i></a>
								</li>						
							<?php endforeach; ?>
						</div>
					</ul>
				<?php else: ?>
					<h5>Requisições de amizade</h5>
											
														
							<span class="title">Não há novas requisições de amizade!!</span>							
											
																		
				<?php endif; ?>
			</div>
		</div>

		<!-- Total de amigos -->
		<div class="col s12 m12 l3 hide-on-med-and-down">
			<div class="card-panel white blue-text darken-3">
				<h5>Total de Amigos</h5>

				<ul class="collection">
					<li class="collection-item avatar">
						<?php echo $totalamigos; ?> amigo<?php echo ($totalamigos == '1')?'':'s'; ?>
						<a href="#!" class="secondary-content"><i class="material-icons blue-text">chat</i></a>
					</li>

				</ul>
			</div>
		</div>

		<!-- Sugestões de amizade -->
		<div class="col s12 m12 l3 hide-on-med-and-down">
			<div class="card-panel white blue-text darken-3">

				<?php if(count($sugestoes) > 0): ?>
					<h5>Sugestões de amigos</h5>
					<span class="black-text">Pessoas que você talvez conheça.</span>
					<?php foreach($sugestoes as $pessoa): ?>
						<ul class="collection">
							<li class="collection-item avatar">
								<img src="assets/images/posts/dj.jpg" alt="" class="circle">
								<span class="title"><?php echo $pessoa['nome']; ?></span>
								<p> <br> </p>
								<!-- <button class="btn btn-default pull-right" onclick="addFriend('<?php echo $pessoa['id']; ?>', this)">+</button> -->
								<a href="" class="secondary-content" onclick="addFriend('<?php echo $pessoa['id']; ?>', this)"><i class="material-icons grey-text">add</i></a>
							</li>
						</ul>
					<?php endforeach; ?>						
				<?php endif; ?>
			</div>
		</div>


		<!-- Lista de grupos e criação de grupos -->
		<div class="col s12 m12 l3 hide-on-med-and-down">
			<div class="card-panel white blue-text darken-3">

				<h5>Grupos</h5>
				<form method="POST">
					<span class="black-text">Lista de meus grupos</span>
					<ul class="collection">
						<?php foreach($grupos as $grupo): ?>
							<!-- <a href="<?php echo BASE; ?>grupos/abrir/<?php echo $grupo['id']; ?>"><?php echo $grupo['titulo']; ?></a> -->
							<li class="collection-item dismissable"><div><?php echo $grupo['titulo']; ?><a href="<?php echo BASE; ?>grupos/abrir/<?php echo $grupo['id']; ?>" class="secondary-content"><i class="material-icons grey-text">group</i></a></div></li>
						<?php endforeach; ?>
					</ul>
					<div class="input-group">
						<input type="text" name="grupo" class="form-control" placeholder="Nome do grupo" />
						<span class="input-group-btn">
							<input type="submit" value="Criar" class="btn-flat btnenviar" />
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- FIM DO MENU LATERAL DIREITO -->

<!-- MENU LATERAL ESQUERDO 

  <div class="chip">
      <img href="<?php echo BASE; ?>" src="assets/images/posts/home.png"  alt="Contact Person">
      <a href="<?php echo BASE; ?>">Página Inícial</a> 
  </div>
  <br>
  <div class="chip">
      <img href="<?php echo BASE; ?>perfil" src="assets/images/posts/perfil.png"  alt="Contact Person"></a>
      <a href="<?php echo BASE; ?>perfil">Perfil</a>
  </div>
  <br>
  <div class="chip">
      <img href="#!" src="assets/images/posts/foto.png"  alt="Contact Person">
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

  FIM MENU LATERAL ESQUERDO -->


			<!-- <ul class="collection">
				<?php foreach($grupos as $grupo): ?>
					<a href="<?php echo BASE; ?>grupos/abrir/<?php echo $grupo['id']; ?>"><?php echo $grupo['titulo']; ?></a>
					</br>
					</br>
				<?php endforeach; ?>
			</ul>
		</div>
		</div>
		</div>
	</div>
</div>