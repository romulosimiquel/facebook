
<div class="col s12 m12">
	<div class="card">
		<div class="card-content">
			<!-- nome e foto de quem postou -->
			<div class="chip">
				<img src="assets/images/posts/mario.jpg" alt="Contact Person">
				<a href="<?php echo BASE; ?>perfil"><?php echo $nome; ?></a>
			</div>
			<p> </br>
				<?php echo $texto; ?>
			</p>
		</div>
		<!-- foto do post, se tiver -->
		<div class="card-image">
			<?php if($tipo == 'foto'): ?>
				<img src="<?php echo BASE; ?>assets/images/posts/<?php echo $url; ?>" border="0" width="100%" />
			<?php endif; ?>	
		</div>
		<!-- Botões de like e comentarios -->
		<div class="card-action">
			<button class="btn-flat blue-text" onclick="curtir(this)" data-id="<?php echo $id; ?>" data-likes="<?php echo $likes; ?>" data-liked="<?php echo $liked; ?>">(<?php echo $likes; ?>) <?php echo ($liked == '0')?'Curtir':'Descurtir'; ?><i class="material-icons right">thumb_up</i></button>
			<button class="btn-flat blue-text" onclick="displayComentario(this)">Comentar <i class="material-icons right">comment</i></button>
			<div class="postitem_comentario">
				<br/><br/>
				<input type="text" class="postitem_txt form-control" />
				<button class="btn-flat" data-id="<?php echo $id; ?>" onclick="comentar(this)">Enviar</button>
			</div>
		</div>
		<div class="postitem_comentarios">
			<?php echo $comentarios;?>
		</div>	
	</div>
</div>
