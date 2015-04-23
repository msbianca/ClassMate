<?php

require_once '../Model/class-usuariodao.php';

class PerfilController{

//private $dao;

public function montarPerfilUsuario($id){

	$dao = new Dao();
	$dao->abrirBD();
	
	
	$usuariodao = new UsuarioDao();
	$infos = $usuariodao->getProfileAluno($id);
	//print_r($infos);
	//$infos = $this->dao->getProfileAluno($id);
	echo '<table><tr><td>'. $infos[0]['Usuario'] .'</td></tr><tr><td>'. $infos[0]['Curso'] . '</td><td>e-mail: '. $infos[0]['email'] . '</td></tr></table>';
	//echo '<td>' . $infos['semestre']. ' Semestre</td>'.
	
}

public function __construct(){
	//$this->dao = new UsuarioDao();
}

}