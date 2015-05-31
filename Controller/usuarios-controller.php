<?php
   class classUsuario{

   		public function loginViraId($id)
   		{
   			 require_once '../Controller/idorlogin-controller.php';
			 $idorlogin = new IdOrLogin();
			 $idorlogin->loginViraId($id);
   		}
   }
?>