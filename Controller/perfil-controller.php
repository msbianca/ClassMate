<?php

require_once '../Model/class-usuariodao.php';

class PerfilController{

//private $dao;

/*public function montarPerfilAluno($id){

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
	echo '<table><tr><td>'. $infos[0]['Usuario'] .'</td></tr><tr><td> Registro: '. $infos[0]['registro'] . '</td></tr><tr><td>E-mail: '. $infos[0]['email'] . '</td></tr>';
	
	$infos1 = $usuariodao->getProfessorCargo($id);
	$cont = $usuariodao->getContProfessorCargo($id);
	$cont = $cont[0]['Cargo'];
	echo '<tr><td>Cargo:';
	$i = 0;
	do {
	 	echo  $infos1[$i]['tipocargo'] .' / ';
	 	$i++;
	 } while ( $i < $cont);
	 echo '</td></tr>';

	$infos2 = $usuariodao->getProfessorDisciplina($id);
	$cont1 = $usuariodao->getContProfessorDisciplina($id);
	$cont1 = $cont1[0]['Disciplina'];
	echo '<tr><td>Disciplina:';
	$i = 0;
	do {
	 	echo $infos2[$i]['Disciplina'].' / ';
	 	$i++;
	 } while ( $i < $cont1);
	 	  
	echo '</td></tr></table>';
}*/

public function montarPerfil($idUsuario, $Tipo){
	$dao = new Dao();
	$dao->abrirBD();
	$usuariodao = new UsuarioDao();
	
	$Tipo = $usuariodao->usuarioTipo($idUsuario);


	if($Tipo == 'Professor')
	{    
		$infos = $usuariodao->getProfileProfessor($idUsuario);
		echo '<table><tr><td>'. $infos[0]['Usuario'] .'</td></tr><tr><td> Registro: '. $infos[0]['registro'] . '</td></tr><tr><td>E-mail: '. $infos[0]['email'] . '</td></tr>';
		$infos1 = $usuariodao->getProfessorCargo($idUsuario);
		$cont = $usuariodao->getContProfessorCargo($idUsuario);
		$cont = $cont[0]['Cargo'];
		echo '<tr><td>Cargo:';
		$i = 0;
		do {
		 	echo  $infos1[$i]['tipocargo'] .' / ';
		 	$i++;
		 } while ( $i < $cont);
		 echo '</td></tr>';

		$infos2 = $usuariodao->getProfessorDisciplina($idUsuario);
		$cont1 = $usuariodao->getContProfessorDisciplina($idUsuario);
		$cont1 = $cont1[0]['Disciplina'];
		echo '<tr><td>Disciplina:';
		$i = 0;
		do {
		 	echo $infos2[$i]['Disciplina'].' / ';
		 	$i++;
		 } while ( $i < $cont1);
		 	  
		echo '</td></tr></table>';
	}
	elseif ($Tipo == 'Aluno') {
		
		$infos = $usuariodao->getProfileAluno($idUsuario);
		$semestre = ($infos[0]['Semestre']);
		$X = $semestre - (int)$semestre;
		if($X >= 0.3) $semestre = ($semestre - $X) + 1;
		else round($semestre);
		echo '<table><tr><td>'. $infos[0]['Usuario'] .'</td></tr><tr><td>'. $infos[0]['Curso'] . '</td><tr><td>' . $semestre. 'ª Semestre</td></tr><td>E-mail: '. $infos[0]['email'] . '</td></tr></table>';
	
	}
}


public function __construct(){
	//$this->dao = new UsuarioDao();
}

}