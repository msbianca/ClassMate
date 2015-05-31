<?php

require '..\model\class-dao.php';
require_once '..\model\class-postdao.php';

$dao = new Dao();
$dao->abrirBD();


$oPost = new PostDao();
$aPost = $oPost->consultarPost();


foreach ($aPost as $sPost){
    echo "<tr>";
    echo "<td> $sPost </td>";
    echo "</tr>";
}