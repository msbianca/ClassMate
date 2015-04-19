<?php

	class Grupos
	{
	    public $idGrupo;
		public $idUsuario;
		public $idTipoGrupo;
		public $tipoGrupoDescricao;
		public $idDisciplinaGrupo;
		public $idDisciplina;
		
		public function setIdGrupo($idGrupo){
			$this->idGrupo = $idGrupo;
		}
		
		public function getIdGrupo(){
			return $this->idGrupo;
		}	
		

		public function setIdUsuario($idUsuario){
			$this->idUsuario = $idUsuario;
		}
		
		public function getIdUsuario(){
			return $this->idUsuario;
		}
		
				
		public function setIdTipoGrupo($idTipoGrupo){
			$this->idTipoGrupo = $idTipoGrupo;
		}
		
		public function getIdTipoGrupo(){
			return $this->idTipoGrupo;
		}	
		
		public function setTipoGrupoDescricao($tipoGrupoDescricao){
			$this->tipoGrupoDescricao = $tipoGrupoDescricao;
		}
		
		public function getTipoGrupoDescricao(){
			return $this->tipoGrupoDescricao;
		}	
		
		public function setIdDisciplinaGrupo($idDisciplinaGrupo){
			$this->idDisciplinaGrupo = $idDisciplinaGrupo;
		}
		
		public function getIdDisciplinaGrupo(){
			return $this->idDisciplinaGrupo;
		}	
		
		public function setIdDisciplina($idDisciplina){
			$this->idDisciplina = $idDisciplina;
		}
		
		public function getIdDisciplina(){
			return $this->idDisciplina;
		}	
			
	}
?>