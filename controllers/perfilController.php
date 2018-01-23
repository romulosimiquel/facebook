<?php
class perfilController extends controller {

	public function __construct() {
		parent::__construct();
		$u = new usuarios();
		$u->verificarLogin();
	}

	public function index() {
		$dados = array(
			'usuario_nome' => '',
			'usuario_bio'  => ''
		);
		$u = new Usuarios;
		$r = new relacionamentos;
		$p = new posts;
		$g = new grupos;

		if(isset($_POST['nome']) && !empty($_POST['nome'])){

			$nome = addslashes($_POST['nome']);
			$bio = addslashes($_POST['bio']);

			$u->updatePerfil(array(
				'nome' => $nome,
				'bio' => $bio
			));
		}


		// Verificação para setar os dados secundários do user
		if((isset($_POST['universidade']) && !empty($_POST['universidade'])) || (isset($_POST['cidade']) && !empty($_POST['cidade'])) || (isset($_POST['trabalho']) && !empty($_POST['trabalho'])) || (isset($_POST['status']) && !empty($_POST['status']))){

			$universidade = addslashes($_POST['universidade']);
			$cidade = addslashes($_POST['cidade']);
			$trabalho = addslashes($_POST['trabalho']);
			$status = addslashes($_POST['status']);


			$u->updatePerfil(array(
				'universidade'	=> $universidade,
				'cidade' 		=> $cidade,
				'trabalho'		=> $trabalho,
				'status'		=> $status,

			));
		}

		// Verificação para setar a foto de perfil do user
		if(isset($_FILES['usuario_foto']['name']) && !empty($_FILES['usuario_foto']['name'])){

			$perfil = $_FILES['usuario_foto'];
			$u->attFoto($perfil, $_SESSION['lgsocial']);
		}

		// Verificação para setar a foto de perfil do user
		if(isset($_FILES['usuario_capa']['name']) && !empty($_FILES['usuario_capa']['name'])){

			$capa = $_FILES['usuario_capa'];
			$u->attCapa($capa, $_SESSION['lgsocial']);
		}

		if(isset($_POST['senha']) && !empty($_POST['senha'])){

			$senha = md5($_POST['senha']);

			$u->updatePerfil(array(
				'senha' => $senha,
			));
		}

		$dados['sugestoes']   = $u->getSugestoes(3);
		$dados['requisicoes'] = $r->getRequisicoes();
		$dados['totalamigos'] = $r->getTotalAmigos($_SESSION['lgsocial']);
		$dados['feed']		  = $p->getFeed();
		$dados['grupos']	  = $g->getGrupos();
		//$dados['usuario_nome']= $u->getNome($_SESSION['lgsocial']);
		// $dados['usuario_bio'] = $u->getBio($_SESSION['lgsocial']);
		$dados['info'] 		  = $u->getDados($_SESSION['lgsocial']);

		$this->loadTemplate('perfil', $dados);
	}
}