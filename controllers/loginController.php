<?php
class loginController extends controller {

	public function __construct() {
		parent::__construct();

	}

	// public function index() {
	// 	$dados = array();


	// 	$this->loadView('login', $dados);
	// }

// para poder fazer as duas funções na mesma page o index passou a ser o que era antes a função entrar, a função cadastrar entrou para o que agora é o index, e os nomes das posições do POST foram mudados para que fossem identificados
	public function index() {
		$dados = array('erro'=>'');

		if(isset($_POST['email']) && !empty($_POST['email'])){
			$email = addslashes($_POST['email']);
			$senha = addslashes(md5($_POST['senha']));

			$u = new usuarios();
			$dados['erro'] = $u->logar($email, $senha);
		}

		if(isset($_POST['emailc']) && !empty($_POST['emailc'])){
			$nome  = addslashes($_POST['nomec']); 
			$email = addslashes($_POST['emailc']);
			$senha = addslashes(md5($_POST['senhac']));
			$sexo  = addslashes($_POST['sexoc']);
			
			$u = new usuarios();
			$dados['erro'] = $u->cadastrar($nome, $email, $senha, $sexo);
		}

		$this->loadView('login', $dados);
	}

	// public function cadastrar() {
	// 	$dados = array('erro'=>'');

	// 	if(isset($_POST['email']) && !empty($_POST['email'])){
	// 		$nome  = addslashes($_POST['nome']); 
	// 		$email = addslashes($_POST['email']);
	// 		$senha = addslashes(md5($_POST['senha']));
	// 		$sexo  = addslashes($_POST['sexo']);
			
	// 		$u = new usuarios();
	// 		$dados['erro'] = $u->cadastrar($nome, $email, $senha, $sexo);
	// 	}

	// 	$this->loadView('login_cadastrar', $dados);
	// }

	public function sair(){
		unset($_SESSION['lgsocial']);
		header("Location: ".BASE.'login');
	}



}