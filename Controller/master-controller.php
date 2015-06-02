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
			foreach($this->usuariodao->listarGrupos($login) as $grupo){
				echo "<a href='grupo.php?idGrupo=$grupo->idGrupo'>$grupo->nome</a><br />";
			}
		}
		
		public function listarDisciplinas($login){
			foreach($this->usuariodao->listarDisciplinas($login) as $disciplina){
				echo "<a href='grupo.php?idGrupo=$disciplina->idDisciplina'>$disciplina->nome</a><br />";
			}
		}

		public function __construct(){
			$dao = new DAO();
			$dao->abrirBD();
			$this->usuariodao = new UsuarioDao();
		}
	}