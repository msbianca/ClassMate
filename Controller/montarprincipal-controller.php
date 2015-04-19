<?php
	$login = $_SESSION['login'];
	
	require '..\model\class-usuariodao.php';
	require '..\model\class-usuario.php';
	require '..\model\class-grupos.php';
	require '..\model\class-dao.php';
	
	$usuariodao = new UsuarioDao();
	$usuario = new Usuario();
	$dao = new DAO();

	$dao -> abrirBD();
	$usuario = $usuariodao->consultarUsuarios($login);
	
?>
	
	
	
	