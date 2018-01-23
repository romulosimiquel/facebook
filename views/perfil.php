
<div class="container">     <!--Centralizar Conteudo -->

	<div class="row">         <!-- Row Principal -->

		<div class="col s12 m12 l3 hide-on-med-and-down">

			<div class="card-panel white blue-text darken-3">
				<h5>Sobre</h5>
				<!-- <span class="black-text">I am a very simple card.</span> -->

				<!-- Perfil -->
				<!-- Parte do sobre o usuario no canto superior esquerdo -->
				<ul class="collection">
					<li class="collection-item dismissable"><div><?php echo $info['cidade']; ?><a class="secondary-content"><i class="material-icons blue-text">home</i></a></div></li>
					<li class="collection-item dismissable"><div><?php echo $info['universidade']; ?><a class="secondary-content"><i class="material-icons blue-text">school</i></a></div></li>
					<li class="collection-item dismissable"><div><?php echo $info['trabalho']; ?><a class="secondary-content"><i class="material-icons blue-text">work</i></a></div></li>
				</ul>
			</div>
		</div> <!-- Fecha Coluna Esquerda-->


		<div class="col s12 m12 l6 margin-bottom">             <!-- Coluna Principal Centro -->
			<div class="card-panel scroll">    <!-- card-panel Principal com Scroll -->

				<!-- <?php print_r($info)?> -->
				<!--Banner, que é a parte bonitinha do perfil, onde ta a foto, a imagem de capa e os dados-->
				<div class="card medium">

					<div class="card-image waves-block waves-light card-image-cover">
						<img class="materialboxed" src="<?php echo BASE; ?>assets/images/usuarios/<?php echo $info['usuario_capa']; ?>">
					</div>

					<div class="card-content" style="overflow: inherit; position: relative;">


						<div class="row" style="padding-bottom: 30px;">
							<div class="col s6" style="position: absolute; top: -98px;">

								<!-- Aqui está a foto de perfil -->
								<div class="materialboxed" style="width: 90px;  height: 90px;
								left: 83%;
								top: 40;
								background-image: url(<?php echo BASE; ?>assets/images/usuarios/<?php echo $info['usuario_foto']; ?>); background-size: cover; background-position: center;
								background-repeat: no-repeat; border-radius: 60px; border: white solid 1px" >
							</div>				
						</div>

						<div class="col s12">
							<span class="card-title  grey-text text-darken-4"><?php echo $info['nome']; ?><i class="material-icons activator right icon-edtperfil" style="cursor: pointer;">mode_edit</i></span>
							<label><class="card-title grey-text text-darken-4"/><?php echo $info['bio']; ?></label>
						</div>

						<div class="card-action">
							<a href="<?php echo BASE; ?>" class="blue-text">Linha do Tempo</a>
							<a href="#" class="blue-text">Sobre</a>
							<a href="#" class="blue-text">Amigos</a>        
						</div>
					</div>
				</div>

				<!-- Card que sobe pra poder editar o perfil -->
				<div class="card-reveal">
					<form method="POST" enctype="multipart/form-data">
						<span class="card-title grey-text text-darken-4">Editar Perfil<i class="material-icons right">close</i></span>
						
						<div class="row">		

							<div class="input-field col s6">
								<input id="cidade" name="cidade" type="text" class="validate" value="<?php echo $info['cidade']; ?>">
								<label for="cidade">Cidade</label>
							</div>

							<div class="input-field col s6">
								<input id="universidade" name="universidade" type="text" class="validate" value="<?php echo $info['universidade']; ?>">
								<label for="universidade">Universidade</label>
							</div>

							<div class="input-field col s6">
								<input id="trabalho" name="trabalho" type="text" class="validate" value="<?php echo $info['trabalho']; ?>">
								<label for="trabalho">Trabalho</label>
							</div>

							<div class="file-field input-field col s8" style="margin-left: 0; width: 300px; height: 40px;">
								<div class="btn-flat blue-text left">
									Escolha Sua Foto de Perfil
									<input type="file" id="usuario_foto" name="usuario_foto" />
								</div>
							</div>

							<div class="file-field input-field col s8" style="margin-left: 0; width: 300px; height: 40px;">
								<div class="btn-flat blue-text left">
									Escolha Sua Foto de Capa
									<input type="file" id="usuario_capa" name="usuario_capa" />
								</div>
							</div>

						<!--<div class="btn-flat blue-text left">Escolher Foto de Perfil
								<input type="file" name="usuario_foto" />
							</div> -->

						<!--<div class="input-field col s6">
								<input id="usuario_capa" type="file" class="btn-flat ">
							</div> -->
							
						</div>

						<div class="modal-footer">
							<button href="#!" class="modal-action modal-close waves-effect  btn-flat">Confirmar</button>
							<a href="<?php echo BASE; ?>perfil" class="modal-action modal-close waves-effect  btn-flat">Cancelar</a>
						</div>
					</form>
				</div> 				
				<!-- Fim do Banner -->


			</div>
			<div class="row">
				<?php
				foreach($feed as $postitem) {
					$this->loadView('postitem', $postitem);
				}
				?>
			</div>
			<div class="row">
				<?php
				foreach($feed as $postitem) {
					$this->loadView('postitem', $postitem);
				}
				?>
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
				<?php else: ?>
						<h5>Sugestões de amigos</h5>
						</br>
						<strong>Parabéns, você é amigos de todas as pessoas da Rede Social!</strong>						
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
</div>
</div>

<!-- </div> -->


<!-- <form method="POST">

	<div class="form-group">
		<label for="nome">Nome:</label>
		<input type="text" class="form-control" name="nome" id="nome" value="<?php echo $info['nome']; ?>" />
	</div>

	<div class="form-group">
	<strong>E-mail</strong><br/>		
		<?php echo $info['email']; ?>
	</div>

	<div class="form-group">
		<label for="senha">Senha:</label>
		<input type="password" class="form-control" name="senha" id="senha" />
	</div>

	<div class="radio">
		<strong>Sexo:</strong><br/>
		<?php
		if($info['sexo'] == '0') {
			echo 'Feminino';
		} else {
			echo 'Masculino';
		}
		?>
	</div>

	<div class="form-group">
		<label for="bio">Biografia:</label>
		<textarea name="bio" id="bio" class="form-control"><?php echo $info['bio']; ?></textarea>
	</div>

	<button type="submit" class="btn btn-default">Salvar</button>

</form> -->