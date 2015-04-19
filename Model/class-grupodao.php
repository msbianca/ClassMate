<?php
class grupoDao{
	public function inserirGrupo($idTipoGrupo,$nome){
		$query = "INSERT INTO tbgrupo VALUES (" . $idTipoGrupo . "," . $nome . ")";
		mysql_query($query);
	}
    
    public function BuscarUltimoGrupo(){
			$result = mysql_query('SELECT MAX(idGrupo) FROM tbGrupo');
			return mysql_result($result, 0);
		}
	public function selectQtdGrupo($idUsuario){
			$sql = 'SELECT COUNT(G.idGrupo) FROM tbGrupo AS G, tbparticipante AS P WHERE G.idGrupo = P.idGrupo AND P.idUsuario ="'.$idUsuario.'"';
			$result = mysql_query($sql) or die($sql);
			return mysql_result($result,0);
		}

	public function selecionarGrupoEstudo($idUsuario)
	{
		$query = "SELECT G.idGrupo, G.nome, P.IdUsuario, U.nome FROM tbgrupo AS G, tbparticipante AS P, tbusuario AS U  WHERE U.idUsuario = P.IdUsuario AND G.idTipoGrupo = 70 AND G.$idGrupo = P.$idGrupo AND P.idUsuario =" .$idUsuario;
		$result = mysql_query($query);
			$grupo = Array();
			while($row = mysql_fetch_array($result)){
				//array_push($grupo, $row);
				$grupo[] = $row;
			}
			return $grupo;
	}

	public function selecionarGrupo($idGrupo,$idTipoGrupo,$nome){
		
		if($idTipoGrupo = null AND $nome = null)
		{
			$query = "SELECT * FROM tbgrupo WHERE  idGrupo =".$idGrupo;
			$result = mysql_query($query);
			return mysql_result($result, 0);
		}
		
		if($nome = null)
		{
			$query = "SELECT * FROM tbgrupo WHERE  idGrupo =".$idGrupo. " AND idTipoGrupo =" .$idTipoGrupo;
			$result = mysql_query($query);
			return mysql_result($result, 0);
		}
		
		if($idGrupo = null AND $idTipoGrupo = null)
		{
			$query = "SELECT * FROM tbgrupo WHERE  nome LIKE %".$nome."%";
			$result = mysql_query($query);
			return mysql_result($result, 0);
		}

		else
		{
			$query = "SELECT * FROM tbgrupo WHERE  idGrupo =".$idGrupo. " AND idTipoGrupo =" .$idTipoGrupo. "AND nome =" .$nome;
			$result = mysql_query($query);
			return mysql_result($result, 0);
		}
				
    
	}	

	public function inserirDisciplinaGrupo($idGrupo, $idDisciplina){
		$query = "INSERT INTO tbdisciplinagrupo VALUES (" . $idGrupo . "," . $idDisciplina . ")";
		mysql_query($query);
	}
	
	public function inserirParticipantesGrupo($idGrupo, $idUsuario){
		$query = "INSERT INTO tbparticipante VALUES (" . $idGrupo . "," . $idUsuario . ")";
		mysql_query($query);
	}

	public function selecionarParticipantes($idGrupo, $idUsuario)
		{
			$query = "SELECT U.nome, G.nome FROM tbparticipante AS P, tbusuario as U, tbgrupo as G WHERE  P.IdGrupo = G.IdGrupo AND P.IdUsuario = U.IdUsuario P.IdGrupo=" .$IdGrupo. "AND P.IdUsuario =" .$IdUsuario;
			$result = mysql_query($query);
			return mysql_result($result, 0);
		}	

	public function inserirParticipacaoGrupo($idGrupo, $idUsuario, $idMensagem, $idNotificacao, $idPost, $idArquivo  ){
		$query = "INSERT INTO tbparticipacao VALUES (" .$idMensagem. "," .$idNotificacao. "," .$idPost. "," . $idGrupo . "," . $idUsuario . "," .$idArquivo. ")";
		mysql_query($query);
	}

	public function inserirPostGrupo( $idDescricao, $NomeArquivo, $CaminhoArquivo){
		$query = "INSERT INTO tbpost VALUES (" .$idDescricao. "," .$NomeArquivo. "," .$CaminhodoArquivo. ")";
		mysql_query($query);
	}

	public function inserirMensgemGrupo( $idDescricao, $NomeArquivo, $CaminhoArquivo){
		$query = "INSERT INTO tbMensagem VALUES (" .$idDescricao. "," .$NomeArquivo. "," .$CaminhodoArquivo. ")";
		mysql_query($query);
	}

	public function inserirNotificacaoGrupo( $idDescricao, $NomeArquivo, $CaminhoArquivo){
		$query = "INSERT INTO tbNotificacao VALUES (" .$idDescricao. "," .$NomeArquivo. "," .$CaminhodoArquivo. ")";
		mysql_query($query);
	}
}
?>