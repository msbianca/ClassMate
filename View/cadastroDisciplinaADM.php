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
    
  </head>
  <body  style="padding-top: 10px">
    <!--Form-->
     	<section class="loginform cf">
	     	<div class="col-md-4" >
				<form id="Cadastro" class="form-horizontal" role="form" name="cadastro" method="post" action="../Controller/disciplina-controller.php">
		             
					<div class="form-group">
						<label for="inputName" class="col-sm-2 control-label">Nome</label>
						<div class="col-sm-10">
							<input class="form-control" id="inputName" placeholder="Nome" name="nome">
						</div>
					</div>
						
							
					<div class="form-group">
						<div class="col-sm-10">
							<label for="inputCurso" class="col-sm-2 control-label">Curso</label>
							<br>
							<select name="curso" id="cidade">
								<option value="Opcoes">Opções</option>
								<?php 
									session_start();
									require_once '../Controller/cadastroadmin-controller.php';
									$lists = new ListsDao();
									$lists->listarCursos();
									foreach ($_SESSION['cursos'] as $cursos) {
										echo "<option value=".$cursos[0].">".$cursos[1]."</option>";
									}
								?>		


							</select>
						</div>
					</div>
					
				<div class="form-group">
						<div class="col-sm-10">
							<label for="inputSemestre" class="col-sm-2 control-label">Semestre</label>
							<br>
							<select name="semestre" id="cidade">
								<option value="Opcoes">Opções</option>
								<?php 
									session_start();
									require_once '../Controller/cadastroadmin-controller.php';
									$lists = new ListsDao();
									$lists->listarSemestre();
									foreach ($_SESSION['semestre'] as $semestre) {
										echo "<option value=".$semestre[0].">".$semestre[1]."</option>";
									}
								?>		
							</select>
						</div>
					</div>		

					<div class="form-group">
						<label for="inputApelido" class="col-sm-2 control-label">Apelido</label>
						<div class="col-sm-10">
							<input type="apelido" class="form-control" id="inputApelido" placeholder="Apelido" name="apelido">
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
  </body>
</html>
