<?php

	session_start();

	$grau = $_POST['idPasta'];
	$tema = $_POST['idParticipacao'];
	$titulo = $_POST['nome'];
	$autor = $_SESSION['descricao'];

	require '..\model\class-arquivo.php';
	require '..\model\class-arquivodao.php';
	require '..\model\class-dao.php';
	
	$dao = new DAO();
	$dao->abrirBD();
	
	$arquivoDao = new ArquivoDao();
	$arquivo->setIdPasta($idPasta);
	$arquivo->setIdParticipacao($idParticipacao);
	$arquivo->setNome($nome);
	$arquivo->setDescricao($descricao);

?>
	
	
	
	
	