<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
	
	<!-- Bootstrap -->
    <link href="..\bootstrap\css\bootstrap.min.css" rel="stylesheet">
	
	
  
  </head>
   <body>

              
	<div class="row">
		
		<div class="col-md-4">
		</div>
		
	
		<div class="col-md-4">
		<table size="1">
			<?php  
				require '..\model\class-dao.php';
				require '..\model\class-usuariodao.php';
				
				$dao = new DAO();
				$dao->abrirBD();
				$usuariodao = new UsuarioDao();
				$usuariodao->usuariosDesabilitados();	
			?> 
		</table>

	</div>
		
		<div class="vol-md-4">
		</div>
	
	</div>	
			
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="..\bootstrap\js\bootstrap.min.js"></script>
  
 
  
  </body>
</html>
