<?php

require_once '..\model\class-postdao.php';

$post = $_POST['post'];

$dao = new Dao();
$dao->abrirBD();


$oPost = new PostDao();
$oPost->inserirPost();

