<?php
class Usuarios extends Model{

	public function verificarLogin(){

		if(!isset($_SESSION['lgsocial']) || isset($_SESSION['lgsocial']) && empty($_SESSION['lgsocial'])){
			header("Location: ".BASE."login");
			exit;
		}
	}


	public function logar($email, $senha){
		$array = array();

		$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$sql = $sql->fetch();

			$_SESSION['lgsocial'] = $sql['id'];

			header("Location: ".BASE);
		} else{
			return "E-mail e/ou senha errados!";
		}

	}

	public function cadastrar($nome, $email, $senha, $sexo){
		$array = array();

		$sql = "SELECT * FROM usuarios WHERE email = '$email'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() == 0) {

			$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha', sexo = '$sexo'";
			$sql = $this->db->query($sql);

			$id = $this->db->lastInsertId();
			$_SESSION['lgsocial'] = $id;

			header("Location: ".BASE);
		} else{
			return "E-mail já está cadastrado!";
		}
	}

	// public function getNome($id){

	// 	$sql = "SELECT nome FROM usuarios WHERE id = '$id'";
	// 	$sql = $this->db->query($sql);

	// 	if($sql->rowCount() > 0){
	// 		$sql = $sql->fetch();			
	// 		return $sql['nome'];
	// 	} else{
	// 		return '';
	// 	}
	// }

	// public function getBio($id){

	// 	$sql = "SELECT bio FROM usuarios WHERE id = '$id'";
	// 	$sql = $this->db->query($sql);

	// 	if($sql->rowCount() > 0){
	// 		$sql = $sql->fetch();			
	// 		return $sql['bio'];
	// 	} else{
	// 		return '';
	// 	}
	// }

	// public function getFoto($id){

	// 	$sql = "SELECT usuario_foto FROM usuarios WHERE id = '$id'";
	// 	$sql = $this->db->query($sql);

	// 	if($sql->rowCount() > 0){
	// 		$sql = $sql->fetch();			
	// 		return $sql['usuario_foto'];
	// 	} else{
	// 		return '';
	// 	}

	// }


	public function getDados($id){
		$array = array();

		$sql = "SELECT * FROM usuarios WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetch();			
		} 

		return $array;
	}

	public function updatePerfil($array = array()){
		
		$sql = "UPDATE usuarios SET ";

		$campos = array();
		foreach ($array as $campo => $valor) {
			$campos[] = $campo."='".$valor."'";
		}

		$sql .= implode(', ', $campos);

		$sql .= " WHERE id = '".$_SESSION['lgsocial']."'";

		$this->db->query($sql);
	}

	public function getSugestoes($limit = 5){
		$array = array();
		$meuid = $_SESSION['lgsocial'];

		$r = new relacionamentos();
		$ids = $r->getIdFriends($meuid);

		if(count($ids) == 0){
			$ids[] = $meuid;
		}

		$sql = "
		SELECT
			usuarios.id,
			usuarios.nome,
			usuarios.usuario_foto
		FROM
			usuarios
		LEFT JOIN relacionamentos
		ON (relacionamentos.usuario_de = usuarios.id OR relacionamentos.usuario_para = usuarios.id)
		WHERE 
			usuarios.id != '$meuid'AND 
			usuarios.id NOT IN (".implode(", ", $ids).")
		ORDER BY RAND()
		LIMIT $limit
		";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function procurar($busca){
		$array = array();

		$busca = addslashes($busca);

		$sql = "SELECT * FROM usuarios WHERE nome LIKE '%$busca%'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}
	
	public function attFoto($perfil, $id){

			$url_perfil = '';
		
			 $tipos = array('image/jpeg', 'image/jpg', 'image/png');

			 if(in_array($perfil['type'], $tipos)){

				$url_perfil = "perfil".md5($id);
				switch ($perfil['type']) {
					case 'image/jpeg':
					case 'image/jpg':
						$url_perfil .= '.jpg';
						break;
					case 'image/png':
						$url_perfil .=  '.png';
						break;
				}

				move_uploaded_file($perfil['tmp_name'], 'assets/images/usuarios/'.$url_perfil);

			}

			$sql = "UPDATE usuarios SET usuario_foto = '$url_perfil' WHERE id = '$id' ";

			$this->db->query($sql);


		}

	public function attCapa($capa, $id){

			$url_capa = '';
		
			$tipos = array('image/jpeg', 'image/jpg', 'image/png');
			
			if(in_array($capa['type'], $tipos)){

				$url_capa = "capa".md5($id);
				switch ($capa['type']) {
					case 'image/jpeg':
					case 'image/jpg':
						$url_capa .= '.jpg';
						break;
					case 'image/png':
						$url_capa .=  '.png';
						break;
				}

				move_uploaded_file($capa['tmp_name'], 'assets/images/usuarios/'.$url_capa);

			}

			$sql = "UPDATE usuarios SET usuario_capa = '$url_capa' WHERE id = '$id' ";

			$this->db->query($sql);


		}
}






