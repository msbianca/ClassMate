<?php

//require '..\Model\class-pastadao.php';
//require '..\model\class-dao.php';

$dir = $_POST['nome'];

//$dao = new DAO();
//$dao->abrirBD();

//$pastasdao = new PastasDao();
//$pastasdao->inserirPasta($nome, $proprietario);

session_start();
$diretorio = '../arquivos/' . $_SESSION['login']. '/' . $dir . '/';
mkdir($diretorio,0777,true);


//header('location: ../view/criarPasta.php');


