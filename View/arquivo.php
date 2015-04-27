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

            require_once '../Controller/montararquivos-controller.php';
                        require_once '../model/class-arquivodao.php';
            require_once '../model/class-pastadao.php';
            ?>
         <center>
            <div id="divConteudo">
                <a href='../view/uploadarquivos.php'>Adicionar Arquivo</a>
                <a href='../view/criarPasta.php'>Adicionar Pasta</a>
                <form method="GET" action="arquivo.php">
                    <input type="text" name="nome" />
                    <input type="submit" value="Buscar" />
                </form>
                <?php
                if(isset($_GET['nome'])){
                    $adao = new ArquivoDao();
                    echo '<table>';
                    foreach ($adao->buscarArquivo($_SESSION['login'], $_GET['nome']) as $arquivo) {
                        echo '<tr> <td>' . $arquivos['nome'] . '</td><td>' . $arquivos['descricao'] . '</td><td><a href="../listarArquivos.php?idArquivo='.$arquivos['idArquivo'].' </td></tr>';
                    }
                    echo '</table>';
                    $pdao = new PastaDao();
                    echo '<table>';
                    foreach ($pdao->buscarPasta($_SESSION['login'], $_GET['nome']) as $pasta) {
                        echo '<tr> <td>' . $pasta['nome'] . '</td><td>' . $pasta['descricao'] . '</td><td><a href="../view/listarPastas.php?idpasta='.$pasta['idpasta'].' </td></tr>';
                    }
                    echo '</table>';


                }

?>
                <table>

                
                    </table>
                
            </div>
        </center>

        </div>

    </body>
</html>

