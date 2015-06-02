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
            ?>
            <center>
                <div id="divConteudo">
                    <?php
                    if(!class_exists('Dao'))  require '..\model\class-dao.php';
                    $dao = new Dao();
                    $dao->abrirBD();
                    $sql = "SELECT a.nome, a.descricao, a.caminhoArquivo "
                            . "FROM tbArquivo AS a "
                            . "INNER JOIN tbParticipacao AS p "
                            . "ON a.idArquivo = p.idArquivo "
                            . "WHERE p.idGrupo =" . $_GET['idGrupo'];
                    $stmt = mysql_query($sql);
                    ?>
                    <table>
                        <tr>
                            <th colspan="3"><h2>Arquivos</h2></th>
                        </tr>
                        <tr>
                            <th>Nome</th>
                            <th>Descricao</th>
                            <th></th>
                        </tr>
                        <?php
                            while($rs = mysql_fetch_object($stmt)){
                                echo "<tr><td>$rs->nome</td><td>$rs->descricao</td><td><a href='$rs->caminho'>Baixar</td></tr>";
                            }
                        ?>
                    </table>
                    <br />
                    <br />
                    <?php 
                        $sql = "SELECT u.nome "
                                . "FROM tbUsuario AS u "
                                . "INNER JOIN tbParticipacao AS p "
                                . "ON u.idUsuario = p.idUsuario "
                                . "WHERE u.idTipoCargo = 3 "
                                . "AND p.idGrupo =" . $_GET['idGrupo'];
                        $stmt = mysql_query($sql);
                        $sNomePRofessor = mysql_num_rows($stmt) > 0 ? mysql_result($stmt, 0) : "";
                    ?>
                    <h4>Professor Responsável: <?= $sNomePRofessor ?></h4>
                    <br />
                    <br />
                    <?php
                        $sql = "SELECT descricao, nomeArquivo, caminhoArquivo "
                                . "FROM tbPost AS p "
                                . "INNER JOIN tbParticipacao AS pt "
                                . "ON p.idPost = pt.idPost "
                                . "AND pt.idGrupo =" . $_GET['idGrupo'];
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
                                . "ON m.idMensagem = pt.idMenssagem "
                                . "AND pt.idGrupo =" . $_GET['idGrupo'];
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
                    </table>                   
                </div>
            </center>

        </div>

    </body>
</html>

