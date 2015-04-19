<?php
	require_once '../model/class-dao.php';
	class DisciplinaDao
	{
		public function inserirDisciplina($nome, $apelido, $idSemestreCurso)
		{
			$query = "INSERT INTO tbDisciplina (nome, apelido, idSemestreCurso) VALUES ('".$nome."','".$apelido."','".$idSemestreCurso."')";
			mysql_query($query) or die (mysql_error());
		}

		public function listarDisciplina($idCurso, $idSemestre)
		{
				$query = "SELECT  D.idDisciplina, D.nome FROM tbDisciplina AS D, tbsemestrecurso AS SC WHERE SC.idSemestrenaCurso = D.idSemestreCurso AND SC.idSemestre  = ".$idSemestre." AND SC.idCurso = ".$idCurso;
				$result = mysql_query($query);
				$disciplinas = Array();
				while($row = mysql_fetch_array($result)){
					array_push($disciplinas, $row);
				}
				return $disciplinas;
		}

		public function selecionarDisciplina($idDisciplina,$nome,$apelido)
		{
			if($nome = null AND $apelido = null)
			{
				$query = "SELECT * FROM tbDisciplina WHERE  idDisciplina =".$idDisciplina;
				$result = mysql_query($query);
				return mysql_result($result, 0);
			}
			
			if($apelido = null)
			{
				$query = "SELECT * FROM tbDisciplina WHERE  idDisciplina =".$idDisciplina." AND nome =".$nome;
				$result = mysql_query($query);
				return mysql_result($result, 0);
			}
		    if($idDisciplina = null)
		    {
		    	$query = "SELECT * FROM tbDisciplina WHERE nome =".$nome." AND apelido = ".$apelido;
				$result = mysql_query($query);
				return mysql_result($result, 0);
		    }
			if($idDisciplina= null and $apelido = null)
			{
				$query = "SELECT * FROM tbDisciplina WHERE nome =".$nome;
				$result = mysql_query($query);
				return mysql_result($result, 0);
			}			
			if($idDisciplina= null and $nome = null)
			{
				$query = "SELECT * FROM tbDisciplina WHERE apelido = ".$apelido;
				$result = mysql_query($query);
				return mysql_result($result, 0);
			}
			else
			{
				$query = "SELECT * FROM tbDisciplina WHERE  idDisciplina =".$idDisciplina." AND nome =".$nome." AND apelido = ".$apelido;
				$result = mysql_query($query);
				return mysql_result($result, 0);
			}			
		}			

		public function getSemestreCurso($semestre, $curso)
		{
			$query = "SELECT idSemestrenaCurso FROM tbSemestreCurso WHERE idSemestre = ".$semestre." AND idCurso = ".$curso;
			$result = mysql_query($query);
			return mysql_result($result, 0);
		}


		public function __construct(){
			$dao = new Dao();
			$dao->abrirBD();
		}
	}