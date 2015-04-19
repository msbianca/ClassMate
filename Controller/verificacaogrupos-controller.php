<?php 
	if(!isset($_SESSION)){
        session_start();
    }
    //print_r($_SESSION);
	$idUsuario = $_SESSION['login'];
	if(!is_numeric($idUsuario))
	{
		require_once '../Controller/usuarios-controller.php';
		$classUsuario = new classUsuario();
		$idUsuario = $classUsuario->loginViraId($idUsuario);
	}
	
	require_once '../Controller/grupos-controller.php';
	$classGrupo = new classGrupo();
	$qtdGrupo = $classGrupo->selectQtdGrupo($idUsuario);

	if($qtdGrupo = 5)
	{
		$qtdRestante = 0;
		$habilitar = false;
	}

	else if($qtdGrupo = 0)
	{	 

		$qtdRestante = 5;
		$habilitar = true;
	}
	else if($qtdGrupo < 5)
	{
		$qtdRestante = 5 - $qtdGrupo;
		$habilitar = true;
	}
	else{
		
	}
	echo $idGrupo;
	echo $idRestante;
	if ($qtdRestante != 0 ) {
		$Grupos = $grupoClass->selecionarGrupoEstudo($idUsuario);
		$idGrupo = null;
		foreach ($_SESSION['Grupos'] as $Grupos) {
			if($idGrupo = null or  $idGrupo != $Grupos){
				echo "<label for='inputCurso' class='col-sm-2 control-label'>Nome Grupo</label>
					  <input class='form-control' id='inputName' placeholder='Nome' value=".$Grupos[1].">";	
			}
			
		    if($idGrupo = $Grupos){
				echo "<label for='inputCurso' class='col-sm-2 control-label'>Nome Participante</label>
			  		<input class='form-control' id='inputName' placeholder='Nome' value=".$Grupos[4].">";
			}
			  
		}
	}






?>