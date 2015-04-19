<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Disciplinas</title>
<title>ClassMate</title>
<link href="assets/estilo.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="assets/css/default.css" />
<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="assets/js/modernizr.custom.js"></script>
<!--Our CSS stylesheet file -->
<link href="..\view\assets\css\styles.css" rel="stylesheet">
<!-- Font Awesome Stylesheet -->
<link rel="stylesheet" href="../View/assets/font-awesome/css/font-awesome.css" />
<!-- Including Open Sans Condensed from Google Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" />
  
	<script type="text/javascript">
		
		$(document).ready(function(){

           $("#semestre").change(function(){
			    var idCurso = $('#curso').val();
			    var idSemestre = $('#semestre').val();
        		location.href = "../view/CadastroDisciplinaCursando.php?idCurso=" + idCurso + "&idSemestre=" + idSemestre;

			});  
        });

        //function selectCurso(){
        //	var idCurso = $('.curso').val();
        //	 $.post("../view/CadastroDisciplinaCursando.php", { idCurso:idCurso};
        //}
	</script>

	</head>
  <body  style="padding-top: 10px">

<div id="principal">

	 <?php 
              include("master.php");
      ?>
    
     <div id="divConteudo">
     <center>
     	<h1>Cadastro de Disciplina</h1>
     </center>

    <!--Form-->
     	<section class="loginform cf">
	     	<div class="col-md-4" >
				<form id="Cadastro" class="form-horizontal" role="form" name="cadastro" method="post" action="../Controller/disciplina-controller.php">
		            <div class="form-group">
						
				
							
					<div class="form-group">
						<div class="col-sm-10">
							<label for="inputCurso" class="col-sm-2 control-label">Curso</label>
							<br>
							<?php 
							if(isset($_GET['idCurso'])){
								$idCurso = $_GET['idCurso'];
								$query = "SELECT nome FROM tbCurso WHERE idCurso = " . $idCurso;
								$stmt = mysql_query($query);
								$rs = mysql_result($stmt, 0);
								echo "<input type='text' readonly value=" . $rs . " >";
							} else {
								echo "<select name='curso' class='curso' id='curso'>";
								echo "<option value='Opcoes'>Opções</option>"; 
								session_start();
								require_once '../Controller/cadastroadmin-controller.php';
								$lists = new ListsDao();
								$lists->listarCursos();
								foreach ($_SESSION['cursos'] as $cursos) {
									echo "<option value=".$cursos[0].">".$cursos[1]."</option>";
								}
								echo "</select>";


							}
						?>
						</div>
					</div>
					
				<div class="form-group">
						<div class="col-sm-10">
							<label for="inputSemestre" class="col-sm-2 control-label">Semestre</label>
							<br>
								<?php 
							if(isset($_GET['idSemestre'])){
								$idSemestre = $_GET['idSemestre'];
								$query = "SELECT descricao FROM tbSemestre WHERE idSemestre = " . $idSemestre;
								$stmt = mysql_query($query);
								$rs = mysql_result($stmt, 0);
								echo "<input type='text' readonly value=" . $rs . " >";
							} else {
								echo "<select name='semestre' class='semestre' id='semestre'>";
								echo "<option value='Opcoes'>Opções</option>"; 
									require_once '../Controller/cadastroadmin-controller.php';
									$lists = new ListsDao();
									$lists->listarSemestre();
									foreach ($_SESSION['semestre'] as $semestre) {
										echo "<option value=".$semestre[0].">".$semestre[1]."</option>";
									}
								echo "</select>";


							}
						?>
			
						</div>
					</div>	

					<div class="col-sm-10">
							<label for="inputCurso" class="col-sm-2 control-label">Disciplina</label>
							<br>
							<select name="curso" id="cidade">
								<option value="Opcoes">Opções</option>
								<?php 
									session_start();
									require_once '../Controller/cadastroadmin-controller.php';
									$lists = new ListsDao();
									$lists->listarDisciplina($idCurso, $idSemestre);
									print_r($_SESSION['disciplinas']);
									foreach ($_SESSION['nome'] as $nome) {
										echo "<option value=".$nome[0].">".$nome[1]."</option>";
									}
								?>		


							</select>
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
