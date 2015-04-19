<?php
require_once '../model/class-grupodao.php';

   class classGrupo{
    
    	public function selectQtdGrupo($idUsuario){
        if(!isset($_SESSION)){
            session_start();
        }
			 
			   $grupoDao = new grupoDao();
			   $_SESSION['grupo'] = $grupoDao->selectQtdGrupo($idUsuario);
    	}
    	public function selecionarGrupoEstudo($idUsuario){
        if(!isset($_SESSION)){
            session_start();
        }
			require_once '../model/class-grupodao.php';
			$grupoDao = new grupoDao();
			$idGrupo = null;
			$idTipoGrupo = null;
			$nome = null;
			$_SESSION['grupo'] = $grupoDao->selecionarGrupoEstudo($idGrupo,$idTipoGrupo,$nome);
    	}
   } 
   
?>