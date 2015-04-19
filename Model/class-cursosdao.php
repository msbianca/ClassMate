<?php
    
	require_once '../model/class-dao.php';
	class CursosDao
	{
		public function selectCurso(){
			$query = "SELECT idCurso, nome FROM tbcurso";
			$result = mysql_query($query);
			$i = 0;
			while($consulta = mysql_fetch_array($result)){
				$cursos[$i][0] = $consulta[0];
				$cursos[$i][1] = $consulta[1];
				$i++;
			}

			return $cursos;
		}

		public function __construct(){
			$dao = new Dao();
			$dao->abrirBD();
		}
	}
?>