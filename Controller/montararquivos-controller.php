<?php 

	session_start();
	$login = $_SESSION['login'];
	
	require_once '..\model\class-arquivodao.php';
	require_once '..\model\class-pastadao.php';
	require_once '..\model\class-usuariodao.php';
	require_once '..\model\class-dao.php';


	$dao = new Dao();
	$dao->abrirBD();

	$usuariodao = new UsuarioDao();
	$login = $usuariodao->loginViraId($login);

	$Pastas = new PastaDao();
	$TodasPastas = $Pastas->listarTodosPasta($_SESSION['login']);
	echo '<table>';
	if(is_array($TodasPastas)){
	foreach ($TodasPastas as $pasta) {
		echo '<tr> <td>' . $pasta['nome'] . '</td><td>' . $pasta['descricao'] . '</td><td><a href="../view/listarPastas.php?idpasta='.$pasta['idpasta'].' </td></tr>';
	}
	echo '</table>';
}

	$Arquivo = new ArquivoDao();
	$TodasArquivos =$Arquivo->listarTodosArquivos($_SESSION['login']);
	if(is_array($TodasArquivos)){
	echo '<table>';
	foreach ($TodasArquivos as $arquivos) {
		echo '<tr> <td>' . $arquivos['nome'] . '</td><td>' . $arquivos['descricao'] . '</td><td><a href="../listarArquivos.php?idArquivo='.$arquivos['idArquivo'].' </td></tr>';
	}
	echo '</table>';
}






?>