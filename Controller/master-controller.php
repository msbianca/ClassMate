<?php 
	if(!isset($_SESSION)){
        session_start();
    }
	require_once '../model/class-usuariodao.php';
	require_once '../model/class-dao.php';
	class MasterController
	{

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
			$dao = new DAO();
			$dao->abrirBD();
			$this->usuariodao = new UsuarioDao();
		}
	}