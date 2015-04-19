<?php
	require_once '../model/class-dao.php';
	class SemestreDao
	{
		public function selectSemestre(){
			$query = "SELECT idSemestre, descricao FROM tbsemestre";
			$result = mysql_query($query);
			$i = 0;
			while($consulta = mysql_fetch_array($result)){
				$semestre[$i][0] = $consulta[0];
				$semestre[$i][1] = $consulta[1];
				$i++;
			}

			return $semestre;
		}

		public function __construct(){
			$dao = new Dao();
			$dao->abrirBD();
		}
	}
?>