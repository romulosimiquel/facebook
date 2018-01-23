<?php
class homeController extends controller {

	public function __construct() {
		parent::__construct();
		$u = new usuarios();
		$u->verificarLogin();
	}

	public function index() {
		$p = new posts;
		$u = new Usuarios;
//		O "Relacionamentos" tem que ser minusculo caso contrário não acha no Core, pelo menos no linux
		$r = new relacionamentos();
		$g = new grupos();

		$dados = array(
			'usuario_nome' => '',
			'usuario_bio'  => ''

		);
		
		// $dados['usuario_nome'] = $u->getNome($_SESSION['lgsocial']);
		// $dados['usuario_bio']  = $u->getBio($_SESSION['lgsocial']);
		// $dados['usuario_foto']  = $u->getFoto($_SESSION['lgsocial']);


		if(isset($_POST['post']) && !empty($_POST['post'])){
			$postmsg = addslashes($_POST['post']);
			$foto = array();

			if(isset($_FILES['foto']) && !empty($_FILES['foto']['tmp_name'])){
				$foto = $_FILES['foto'];
			}

			
			$p->addPost($postmsg, $foto);
		}

		if(isset($_POST['grupo']) && !empty($_POST['grupo'])){
			$grupo = addslashes($_POST['grupo']);
			$id_grupo = $g->criar($grupo);
			header("Location: ".BASE."grupos/abrir/".$id_grupo);

		}

		$dados['sugestoes']   = $u->getSugestoes(3);
		$dados['requisicoes'] = $r->getRequisicoes();
		$dados['totalamigos'] = $r->getTotalAmigos($_SESSION['lgsocial']);
		$dados['feed']		  = $p->getFeed();
		$dados['grupos']	  = $g->getGrupos();
		$dados['info'] 		  = $u->getDados($_SESSION['lgsocial']);


		$this->loadTemplate('home', $dados);
	}
}