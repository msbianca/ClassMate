<?php
   class classUsuario{

   		public function loginViraId($login)
   		{
   			require_once '../model/class-UsuarioDao.php';
			$UsuarioDao = new UsuarioDao();
			$_SESSION['login'] = $UsuarioDao->loginViraId($login);
   		}
   }
?>