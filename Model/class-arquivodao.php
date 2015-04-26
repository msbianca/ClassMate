<?php
	class ArquivoDao
	{
	public function inserirArquivo($idPasta, $idParticipacao,$nome, $descricao, $caminho){
		$query = "INSERT INTO tbArquivo (idPasta, idParticipacao, nome, descricao, caminhoArquivo)  VALUES ( '".$idPasta."', '".$idParticipacao."', '".$nome."', '".$descricao."', '".$caminho."')";
		
				mysql_query($query);
		
	}

	public function alterarArquivo($idArquivo, $idPasta, $idParticipacao,$nome, $descricao, $caminho){
		$query = "UPDATE tbArquivo SET idPasta = $idPasta AND idParticipacao = $idParticipacao AND nome = $nome AND descricao = $descricao AND  caminhoArquivo = $caminho)  WHERE idArquivo = $idArquivo");
		
				mysql_query($query);
			
		}

	public function removerArquivo($idArquivo){
		$query = "DELETE  FROM tbArquivo WHERE idArquivo = $idArquivo");
		mysql_query($query);
		
		}

	public function listarTodosArquivos($idParticipacao){
		$query = "SELECT * FROM tbArquivo WHERE idParticipacao = $idParticipacao");
		mysql_query($query);
		
	}
	public function listarArquivos($idArquivo){
		$query = "SELECT * FROM tbArquivo WHERE idArquivo = $idArquivo");
		mysql_query($query);
		
	}



		

		
	}
	
?>	