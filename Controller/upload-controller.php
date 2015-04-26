<?php

	session_start();

	$user = $_SESSION['login'];

	require '..\Model\class-arquivodao.php';
	require '..\model\class-dao.php';

	efetuarUpload($user);
	
	$dao = new DAO();
	$dao->abrirBD();
	
	$arquivoDao = new ArquivoDao();
	
	function efetuarUpload($idArquivo){
			$uploaddir = '..\arquivos\\';
			$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
			move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
		}


	$arquivoDao->inserirArquivo($user);
	
	
	header('location: ..\View\uploadarquivos.php');
	
	
	
	
	