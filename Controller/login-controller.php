<?php
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	require '..\model\class-usuariodao.php';
	require '..\model\class-dao.php';
	
	$dao = new Dao();
	
	$dao->abrirBD();
	
	$usuariodao = new UsuarioDao();
	
	$usuariodao->efetuarLogin($login,$senha);
?>	
