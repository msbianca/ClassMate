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
                    
             <div>
                <a href="inc/enviarPost.php" target="_blank">Enviar Post </a>
                <?php
                    if(!class_exists('Dao'))  require '..\model\class-dao.php';
                    $dao = new Dao();
                    $dao->abrirBD();
                    ?>

                    <?php
                        $sql = "SELECT descricao, nomeArquivo, caminhoArquivo "
                                . "FROM tbPost AS p "
                                . "INNER JOIN tbParticipacao AS pt "
                                . "ON p.idPost = pt.idPost ";
                        $stmt = mysql_query($sql) or die($sql. mysql_error());
                    ?>
                    <table>
                        <tr>
                            <th>Postagens</th>
                        </tr>
                        <?php
                            while($rs = mysql_fetch_object($stmt)){
                               echo "<tr><td>$rs->descricao</td><td><a href='$rs->caminhoArquivo'>$rs->nomeArquivo</a></td></tr>";
                            }
                        ?>
                    </table>
                                        <?php
                        $sql = "SELECT descricao, nomeArquivo, caminhodoArquivo "
                                . "FROM tbMensagem AS m "
                                . "INNER JOIN tbParticipacao AS pt "
                                . "ON m.idMensagem = pt.idMenssagem ";
                        $stmt = mysql_query($sql) or die($sql.mysql_error());
                    ?>
                    <table>
                        <tr>
                            <th>Mensagens</th>
                        </tr>
                        <?php
                            while($rs = mysql_fetch_object($stmt)){
                                echo "<tr><td>$rs->descricao</td><td><a href='$rs->caminhodoArquivo'>$rs->nomeArquivo</a></td></tr>";
                            }
                        ?>
                    <?= $controller->showNotificacao() ?>
                </div>
             
             <?= $controller->showMensagens() ?>
             </div>
            </div>

        </div>

    </body>
</html>