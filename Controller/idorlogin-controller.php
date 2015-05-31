<?php
 require_once '../model/class-usuariodao.php';
	class IdOrLogin
	{ 
		//$usuariodao = new UsuarioDao();
		public function loginViraId($id){
			echo $id;
			 if(!is_numeric($id))
		    {
		    	//$_GET['idUsuario'] = $usuariodao->loginViraId($id);
		    	//$_GET['login'] = $id;

		    }
		    else
		    {
		    	//$_GET['login'] = $usuariodao->idViraLogin($id);
		    	//$_GET['idUsuario'] = $login;
		    }
		}
	   
	}
?>