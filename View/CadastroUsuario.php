<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Usuario</title> 
    <!-- MEU CSS -->
         <link rel="stylesheet" href="../View/assets/css/estilo.css" />
  </head>
  <body  style="padding-top: 10px">
     <!--Logo-->
    	<center>
    	<div id="logo" >
    		 <img id="logo" src="..\view\assets\img\teste2.png"  style=" width: 450px; height:200px; position:relative; ">
    	</div><!-- LOGO -->
        </center> 
       <div id="box">
		<div id="formularios">
                    <!-- formulario de cadastro!-->
                    <form name="cadastro" method="post" action="..\Controller\cadastro-controller.php" > 
                        <fieldset>

                            <legend align="center">Cadastro de Usuários</legend>

                            <label>
                                <span>Nome:</span>
                                <input type="text" name="nome" id="inputName" />
                            </label>

                            <label>
                                <span>E-mail:</span>
                                <input type="text" name="email" id="inputEmail" />
                            </label>

                            <label>
                                <span>Data Nascimento:</span>
                                <input type="date" name="nascimento" id="inputDataNasc" />
                            </label>
                            <label>
                                <span>Cidade:</span>
                                    <select name="cidade" id="cidade">
                                        <option value="Opcoes">Opções</option>
                                        <option value="Caieras">Caieras</option>
                                        <option value="Cajamar">Cajamar</option>
                                        <option value="Campinas">Campinas</option>
                                        <option value="Franco da Rocha">Franco da Rocha</option>
                                        <option value="Francisco Morato">Francisco Morato</option>
                                        <option value="Indaiatuba">Indaiatuba</option>
                                        <option value="Itu">Itu</option>
                                        <option value="Itupeva">Itupeva</option>
                                        <option value="Jundiaí">Jundiaí</option>
                                        <option value="Jarinu">Jarinu</option>
                                        <option value="Campinas">Campinas</option>
                                        <option value="Louveira">Louveira</option>
                                        <option value="São Paulo">São Paulo</option>
                                        <option value="Valinhos">Valinhos</option>
                                        <option value="Várzea Paulista">Várzea Paulista</option>
                                        <option value="Vinhedo">Vinhedo</option>
                                    </select>
                            </label>                           
                            <label>
                                <span>RA:</span>
                                <input type="text" name="usuariocol" id="inputUsuarioCol" />
                            </label>

                            <label>
                                <span>Senha:</span>
                                <input type="password" name="senha" id="inputPassword" />
                            </label>

                            <input type="submit" name="enviar" valor="enviar" value="Cadastrar" class="botao" /> 
                        </fieldset>
                    </form>
        
                </div><!--Form cadastro-->
        </div><!-- box-->
        
    </body>
</html>
