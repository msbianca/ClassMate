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
                            <form enctype="multipart/form-data" action="..\controller\upload-controller.php" method=POST>
                    <table>
                        <tr>
                            <td><h2><b>Insira seu arquivo</b></h2></td>
                        </tr>
                        <tr>
                            <td>Nome:</td>
                            <td><input type=text name=nome></td>
                        </tr>
                        <tr>
                            <td>Descricao:</td>
                            <td><input type=text name=descricao></td>
                        </tr>
                        <tr>
                            <td>
                                Arquivo:
                            </td>
                            <td>
                                <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
                                <input name="userfile" type="file">
                            </td>
                        <tr>
                            <td>
                                <input type=submit value="Enviar Arquivo">
                            </td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>    
                    </table>
                </form>

                </div>
            </center>

        </div>

    </body>
</html>