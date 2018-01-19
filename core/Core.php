<?php
class Core {

	public function run(){

		$url = explode('index.php', $_SERVER['PHP_SELF']); // separa a url em antes e depois do index.php

		$url = end($url); //pega o que estava depois do index.php, 

//		print_r($url);

		$params = array(); //caso não seja passado um parâmentro ele passa esse array vazio para não dar erro

		//agora a brincadeira começa, primeiro verificar se a url foi setada, se não está vazia e se não é uma barra.
		if (isset($url) && !empty($url) && $url != '/') {

//			pega o url separa para poder pegar o controller, o metodo e o parametro, o array_shift é para não deixar a primeira posição ser um valor vazio
			$url = explode('/', $url); 
			array_shift($url);

//			Pega a primeria posição e concatena o nome dela com Controller para chamar na pasta controllers
			$currentController = $url[0].'Controller';
//			echo $currentController;
			array_shift($url);

			if(isset($url[0]) && $url != '/' && !empty($url)){
				$currentAction = $url[0];
//				echo $currentAction;
				array_shift($url);
			} else{
				$currentAction = 'index';
			}

			if(count($url) > 0){
				$params = $url;
//				print_r($params);  
			}

		} else{
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		$c = new $currentController();
		call_user_func_array(array($c, $currentAction), $params);
	}
}