<?php
	class ArquivoDao
	{
	public function inserirArquivo($idPasta, $idParticipacao,$nome, $descricao, $caminho = ""){
		$query = "INSERT INTO tbArquivo (idPasta, idParticipacao, nome, descricao, caminhoArquivo)  VALUES ( '".$idPasta."', '".$idParticipacao."', '".$nome."', '".$descricao."', '".$caminho."')";
		
				mysql_query($query) or die($query.mysql_error());
		
	}

	public function alterarArquivo($idArquivo, $idPasta, $idParticipacao,$nome, $descricao, $caminho){
		$query = "UPDATE tbArquivo SET idPasta = $idPasta AND idParticipacao = $idParticipacao AND nome = $nome AND descricao = $descricao AND  caminhoArquivo = $caminho  WHERE idArquivo = $idArquivo";
		
				mysql_query($query);
			
		}

	public function removerArquivo($idArquivo){
		$query = "DELETE  FROM tbArquivo WHERE idArquivo = $idArquivo";
		mysql_query($query);
		
		}

	public function listarTodosArquivos($idUsuario){
		$query = "SELECT A.* FROM tbArquivo AS A INNER JOIN tbParticipacao AS P ON P.idParticipacao = A.idParticipacao INNER JOIN tbUsuario AS U ON U.idUsuario = P.idUsuario";
		$stmt = mysql_query($query);
		$result  = array();
		if(mysql_affected_rows() > 0 ){
			while ($rs = mysql_fetch_array($stmt)){
				array_push($result, $rs);
			}
			return $result;
		}
		else
			return 0;
	}
	public function listarArquivos($idArquivo){
		$query = "SELECT * FROM tbArquivo WHERE idArquivo = $idArquivo";
		$stmt = mysql_query($query);
				$result  = array();
				if(mysql_affected_rows() > 0){
				while ($rs = mysql_fetch_array($stmt)){
					array_push($result, $rs);
				}
				return $result;
			}
			else
					return 0;
				
		
		
	}

		public function buscarArquivo($idUsuario,$nome){
		$query = "SELECT A.* FROM tbArquivo AS A INNER JOIN tbParticipacao AS P ON P.idParticipacao = A.idParticipacao INNER JOIN tbUsuario AS U ON U.idUsuario = P.idUsuario WHERE U.idUsuario = '.$idUsuario.' AND A.nome LIKE %'.$nome.'";
		$stmt = mysql_query($query);
				$result  = array();
				if(mysql_affected_rows() > 0){
				while ($rs = mysql_fetch_array($stmt)){
					array_push($result, $rs);
				}
				return $result;
			}
			else
					return 0;
				
		
		
	}

		

		
	}
	
