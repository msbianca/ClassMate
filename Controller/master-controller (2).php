<?php
	require_once "..\model\class-usuariodao.php";
	class MasterController{
		
		private $usuariodao = new UsuarioDao();
		
		public function listarGrupos($login = $_SESSION['login']){
			foreach($this->usuariodao->consultarGrupos($login) as $nome){
				echo $nome;
			}
		}
		
		public function listarDisciplinas($login = $_SESSION['login']){
			foreach($this->usuariodao->consultarDisciplinas($login) as $nome){
				echo $nome;
			}
		}
	}
?>