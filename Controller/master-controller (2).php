<?php
	require_once "..\model\class-usuariodao.php";
	class MasterController{
		
		private $usuariodao;
		
		public function listarGrupos($login){
			foreach($this->usuariodao->consultarGrupos($login) as $nome){
				echo $nome;
			}
		}
		
		public function listarDisciplinas($login){
			foreach($this->usuariodao->consultarDisciplinas($login) as $nome){
				echo $nome;
			}
		}
                
                public function __construct(){
                    $this->usuariodao = new Usuario();
                }
                       
	}
?>