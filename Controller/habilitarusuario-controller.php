<?php
	require '..\model\class-usuariodao.php';
	require '..\model\class-dao.php';
	
	$idLogin = $_POST['idUsuario'];
	
	$dao = new Dao();
	$dao->abrirBD();
	
	
	$usuariodao = new UsuarioDao();
	$usuariodao->habilitarUsuario($idLogin);
?>
	
	