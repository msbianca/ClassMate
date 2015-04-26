<?php

session_start();

$user = $_SESSION['login'];
if (is_set($_SESSION['filepath']))
    $caminho = $_SESSION['filepath'];
else
    $caminho = "";

require '..\Model\class-arquivodao.php';
require '..\model\class-dao.php';

efetuarUpload($caminho);

$dao = new DAO();
$dao->abrirBD();

$arquivoDao = new ArquivoDao();

function efetuarUpload($uploaddir) {
    if (empty($uploaddir))
        $uploaddir = '..\arquivos\\' . $_SESSION['user'] . '\\';
    if (!file_exists($uploaddir))
        mkdir($uploaddir);
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
}

$arquivoDao->inserirArquivo($user);


header('location: ..\View\uploadarquivos.php');




