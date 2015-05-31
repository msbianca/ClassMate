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
                    require_once '../Controller/perfil-controller.php';
                    require_once '../model/class-usuariodao.php';
                    $controller = new PerfilController();
                    $usuariodao = new UsuarioDao();
//                    $Tipo = $usuariodao->usuarioTipo($_SESSION['idUsuario']);
                    //$teste = $_SESSION['idUsuario'];
                    //    echo $teste;
                    $controller->montarPerfil('8','Aluno');
                    ?>

                </div>
            </center>

        </div>

    </body>
</html>

