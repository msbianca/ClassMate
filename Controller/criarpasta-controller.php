<?php

require '..\Model\class-pastadao.php';
require '..\model\class-dao.php';

$dir = $_POST['nome'];

$dao = new DAO();
$dao->abrirBD();

$pastasdao = new PastasDao();
$pastasdao->inserirPasta($nome, $proprietario);

mkdir('../arquivos/' . $_SESSION['idUsuario']. '/' . $dir . '/');


header('location: ../view/criarPasta.php');


