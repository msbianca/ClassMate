<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Grupo</title>
</head>
  <body  style="padding-top: 10px">
<link href="assets/estilo.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="assets/css/default.css" />
<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
<script src="assets/js/modernizr.custom.js"></script>

   <div id="principal">

	 <?php 
           include("master.php");
      ?>
    
     <div id="divConteudo">
     <center>
     	<h1>Grupos</h1>
     </center>

   	<div class="col-md-4" >
     	<form id="Cadastro" class="form-horizontal" role="form" name="cadastro" method="post" action="../Controller/disciplina-controller.php">
		     <div class="form-group">
				<div class="col-sm-10">
					<?php 

						Include('../Controller/verificacaogrupos-controller.php'); 
									
					?>	
				</div>
		    </div>
		</form>						
							
					
  </body>
</html>
