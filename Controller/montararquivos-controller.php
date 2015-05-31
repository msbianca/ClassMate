
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
	$TodasPastas = $Pastas->listarRaiz($_SESSION['login']);
	echo '<center><table><tr><th>Nome</th><th>Descrição</th><th></th><th></th></tr>';
	if(is_array($TodasPastas)){
	foreach ($TodasPastas as $pasta) {
		echo '<tr> <td>' . $pasta['nomeArquivo'] . '</td><td>' . $pasta['descArquivo'] . '</td><td><a href="../view/listarPastas.php?idpasta='.$pasta['idPasta'].'">Listar Pasta</a></td><td><a href='.$pasta['caminhoArquivo'].'>Baixar Arquivo</a></td></tr>';
	}
	echo '</table></center>';
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
<?php

if (!isset($_SESSION)) {
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
    $TodasPastas = $Pastas->listarRaiz($_SESSION['login']);
    echo '<center><table><tr><th>Nome</th><th>Descrição</th><th></th><th></th></tr>';
    if (is_array($TodasPastas)) {
        foreach ($TodasPastas as $pasta) {
            echo '<tr> <td>' . $pasta['nomeArquivo'] . '</td><td>' . $pasta['descArquivo'] . '</td><td><a href="../view/listarPastas.php?idpasta=' . $pasta['idPasta'] . '">Listar Pasta</a></td><td><a href=' . $pasta['caminhoArquivo'] . '>Baixar Arquivo</a></td></tr>';
        }
        echo '</table></center>';
    }

    $Arquivo = new ArquivoDao();
    $TodasArquivos = $Arquivo->listarTodosArquivos($_SESSION['login']);
    if (is_array($TodasArquivos)) {
        echo '<table>';
        foreach ($TodasArquivos as $arquivos) {
            echo '<tr> <td>' . $arquivos['nome'] . '</td><td>' . $arquivos['descricao'] . '</td><td><a href="../listarArquivos.php?idArquivo=' . $arquivos['idArquivo'] . ' </td></tr>';
        }
        echo '</table>';
    }
}
