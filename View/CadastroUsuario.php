<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Usuario</title>
	
	<!--Our CSS stylesheet file -->
    <link href="..\view\assets\css\styles.css" rel="stylesheet">

	<!-- Font Awesome Stylesheet -->
	<link rel="stylesheet" href="../View/assets/font-awesome/css/font-awesome.css" />

    <!-- Including Open Sans Condensed from Google Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" />
   
    <!-- MEU CSS -->
         <link rel="stylesheet" href="../View/assets/css/estilo.css" />
         
  </head>
  <body  style="padding-top: 10px">
     <!--Logo-->
    	<center>
    	<div id="logo" >
    		 <img id="logo" src="..\view\assets\img\teste2.png"  style=" width: 450px; height:200px; position:relative; Margin-top:0px; ">
    	</div>
        </center> 
         
     <!--Form-->
     
     <!-- FORM DE CADASTRO ANTIGO
     
     	<section class="loginform cf">
	     	<div class="col-md-4" >
			<form id="Cadastro" class="form-horizontal" role="form" name="cadastro" method="post" action="..\Controller\cadastro-controller.php">
	             
				<div class="form-group">
					<label for="inputName" class="col-sm-2 control-label">Nome</label>
					<div class="col-sm-10">
						<input class="form-control" id="inputName" placeholder="Nome" name="nome">
					</div>
				</div>
					
						
				<div class="form-group">
					<label for="inputEmail" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputDataNasc" class="col-sm-2 control-label">Data Nascimento</label>
					<div class="col-sm-10">
						<input type="date"class="form-control" id="inputDataNasc" placeholder="inputDataNasc" name="nascimento">
					</div>
				</div>				
		
				<div class="form-group">
					<div class="col-sm-10">
						<label for="inputCidade" class="col-sm-2 control-label">Cidade</label>
						<br>
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
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputUsuarioCol" class="col-sm-2 control-label">Registro do Usuario (EX.: ra)</label>
					<div class="col-sm-10">
						<input class="form-control" id="inputUsuarioCol" placeholder="xxxxxxxx" name="usuariocol">
					</div>
				</div>		

				<div class="form-group">
					<label for="inputPasswor" class="col-sm-2 control-label">Senha</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword" placeholder="Senha" name="senha">
					</div>
				</div>
		
								
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-success" name="cadastrar" onClick="">Salvar</button>
					
				</div>
					
				</div>
			</form>
		    </div>
		</section>
       FIM FORM DE CADASTRO ANTIGO -->
       
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
        
        </div><!--cadastro-->
    </div><!-- box-->
        
  </body>
</html>
