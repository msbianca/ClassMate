<?php

require_once '..\model\class-dao.php';

$dao = new Dao();
$dao->abrirBD();

$oPost = new PostDao();
$idPost = $oPost->inserirPost($_POST['descricao']);



