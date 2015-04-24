<?php

require_once '../Model/class-usuariodao.php';

class PerfilController{

//private $dao;

public function montarPerfilAluno($id){

	$dao = new Dao();
	$dao->abrirBD();
	
	
	$usuariodao = new UsuarioDao();
	$infos = $usuariodao->getProfileAluno($id);
	$semestre = ($infos[0]['Semestre']);
	$X = $semestre - (int)$semestre;
	if($X >= 0.3) $semestre = ($semestre - $X) + 1;
	else round($semestre);
	echo '<table><tr><td>'. $infos[0]['Usuario'] .'</td></tr><tr><td>'. $infos[0]['Curso'] . '</td><tr><td>' . $semestre. 'ª Semestre</td></tr><td>E-mail: '. $infos[0]['email'] . '</td></tr></table>';
	
}

public function montarPerfilProfessor($id){

	$dao = new Dao();
	$dao->abrirBD();
	
	
	$usuariodao = new UsuarioDao();
	$infos = $usuariodao->getProfileProfessor($id);
	echo '<table><tr><td>'. $infos[0]['Usuario'] .'</td></tr><tr><td>'. $infos[0]['Disciplina'] . '</td></tr><tr><td>E-mail: '. $infos[0]['email'] . '</td></tr></table>';
}


public function __construct(){
	//$this->dao = new UsuarioDao();
}

}