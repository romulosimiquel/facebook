<?php 
class Grupos extends model{
	
	public function getGrupos() {
		$array = array();

		$sql = "SELECT id, titulo FROM grupos";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function criar($titulo) {
		$id_usuario = $_SESSION['lgsocial'];
		$id_grupo   = '';

		$sql = "INSERT INTO grupos SET titulo = '$titulo', id_usuario = '$id_usuario' ";
		$this->db->query($sql);
		$id_grupo = $this->db->lastInsertId();

		$sql = "INSERT INTO grupos_membros SET id_grupo = '$id_grupo', id_usuario = '$id_usuario'";
		$this->db->query($sql);

		return $id_grupo;
	}

	public function getInfo($id_grupo){
		$array = array();

		$sql = "SELECT * FROM grupos WHERE id = '$id_grupo'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}

	public function isMembro($id_grupo, $id_usuario){

		$sql = "SELECT * FROM grupos_membros WHERE id_grupo = '$id_grupo' AND id_usuario = '$id_usuario'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			return true;
		} else{
			return false;
		}
	}

	public function getQuantMembros($id_grupo){

		$sql = "SELECT count(*) as c FROM grupos_membros WHERE id_grupo = '$id_grupo'";
		$sql = $this->db->query($sql);
		$sql = $sql->fetch();

		return $sql['c'];
	}

	public function addMembro($id_grupo, $id_usuario){

		$sql = "INSERT INTO grupos_membros SET id_grupo = '$id_grupo', id_usuario = '$id_usuario'";
		$this->db->query($sql);
	}

	

	public function getFeedGrupo($id_grupo){
		$array = array();

		$sql = "SELECT *, 
		(select usuarios.nome from usuarios where usuarios.id = posts.id_usuario) as nome, 
		(select count(*) from posts_likes where posts_likes.id_post = posts.id) as likes,
		(select count(*) from posts_comentarios where posts_comentarios.id_post = posts.id) as comentarios, 
		(select count(*) from posts_likes where posts_likes.id_post = posts.id and posts_likes.id_usuario = '".$_SESSION['lgsocial']."') as liked 
		FROM posts 
		WHERE id_grupo = '$id_grupo'
		ORDER BY data_criacao DESC";

		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

//		$array['comentarios'] = array();
		return $array;
	}






}