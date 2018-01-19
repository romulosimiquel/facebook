<?php
class gruposController extends controller{

	public function __construct() {
		parent::__construct();
		$u = new usuarios;
		$u->verificarLogin();
	}

	public function abrir($id_grupo) {
		$u = new usuarios();
		$g = new grupos();
		$p = new posts();

		$dados = array(
			'usuario_nome' => ''
		);
		$dados['usuario_nome'] = $u->getNome($_SESSION['lgsocial']);

		if(isset($_POST['post']) && !empty($_POST['post'])){
			$postmsg = addslashes($_POST['post']);
			$foto = array();

			if(isset($_FILES['foto']) && !empty($_FILES['foto']['tmp_name'])){
				$foto = $_FILES['foto'];
			}

			
			$p->addPost($postmsg, $foto, $id_grupo);
		}

		$dados['info']         = $g->getInfo($id_grupo);
		$dados['id_grupo']     = $id_grupo;
		$dados['is_membro']    = $g->isMembro($id_grupo, $_SESSION['lgsocial']);
		$dados['qt_membros']   = $g->getQuantMembros($id_grupo);
		$dados['feed']		   = $g->getFeedGrupo($id_grupo);

		$this->loadTemplate('grupo', $dados);
	}

	public function entrar($id_grupo){
		$g = new grupos();

		$g->addMembro($id_grupo, $_SESSION['lgsocial']);

		header("Location: ".BASE."grupos/abrir/".$id_grupo);
	}

}