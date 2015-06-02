<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ClassMate</title>
        <link href="assets/estilo.css" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/css/tabs.css" rel="stylesheet" type="text/css" media="all" />
    </head>

    <body>

        <div id="principal">

            <?php
            include("master.php");

            require_once '../Controller/mainpage-controller.php';

            $controller = new MainPageController();
            ?>

            <div id="divConteudo">
                <div class="tab-main">
                    <?= $controller->showNotificacao() ?>
                </div>
             
             <?= $controller->showMensagens() ?>
             <div>
                <?= include("inc/enviarPost.php"); ?>
             </div>
            </div>

        </div>

    </body>
</html>