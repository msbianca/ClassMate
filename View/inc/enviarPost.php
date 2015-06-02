<!-- Carrega o jQuery, necessário para exibir o popup -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>

<textarea name="post" form="nomeDoForm"></textarea>


<form enctype="multipart/form-data" action="..\controller\efetuarpost-controller.php" method=POST id="nomeDoForm">
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
                                <input type=submit value="Postar">
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


