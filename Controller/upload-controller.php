<?php

session_start();
require '..\Model\class-arquivodao.php';
require '..\model\class-dao.php';
require '..\model\class-participacaodao.php';
require_once '..\model\class-usuariodao.php';

$dao = new DAO();
$dao->abrirBD();

$login = $_SESSION['login'];

$usuariodao = new UsuarioDao();
$iduser = $usuariodao->loginViraId($login);


unset($_SESSION['idPasta']);
if(!isset($_SESSION['idPasta']))
	$_SESSION['idPasta'] = 4;

$participacao = new ParticipacaoDao();
$participa = $participacao->buscarUltimaParticipacao($iduser);
print_r($participa);


if (isset($_SESSION['filepath']))
    $caminho = $_SESSION['filepath'];
else
    $caminho = "";

$filename = $_POST['nome'];
$caminho = efetuarUpload($caminho, $filename);


$arquivoDao = new ArquivoDao();

function efetuarUpload($uploaddir, $nome) {
    if (empty($uploaddir))
        $uploaddir = '..\arquivos\\' . $_SESSION['login'] . '\\';
    if (!file_exists($uploaddir))
        mkdir($uploaddir);
    $ext = strtok($_FILES['userfile']['name'], ".");
    $ext = strtok(".");
    $_FILES['userfile']['name'] = $nome . "." . $ext;
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
   return str_replace('\\', '\\\\', $uploaddir);
}

$arquivoDao->inserirArquivo($_SESSION['idPasta'], $participa, $_POST['nome'], $_POST['descricao'], $caminho);


header('location: ..\View\uploadarquivos.php');




