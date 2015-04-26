<?php
	class PastasDao
	{
		public function inserirPasta($nome, $descricao){
			$query = "INSERT INTO tbPasta (nome, descricao)  VALUES ('".$nome."', '".$descricao."')";
			
					mysql_query($query);
			
		}

		public function alterarPasta($idPasta, $nome, $descricao){
			$query = "UPDATE tbPasta SET  nome = $nome AND descricao = $descricao WHERE idPasta = $idPasta";
			
					mysql_query($query);
				
			}

		public function removerPasta($idPasta){
			$query = "DELETE  FROM tbPasta WHERE idPasta = $idPasta";
			mysql_query($query);
			
			}

		public function listarTodosPasta($idUsuario){
			$query = "SELECT P.* FROM tbPasta AS P INNER JOIN tbArquivo AS A ON A.idPasta = P.idPasta INNER JOIN tbParticipacao AS PAR ON PAR.idParticipacao = A.idParticipacao INNER JOIN tbUsuario AS U ON U.idUsuario = PAR.idUsuario WHERE U.idUsuario = $idUsuario";
			mysql_query($query);
			
		}
		public function listarPasta($idPasta){
			$query = "SELECT P.*, A.* FROM tbPasta AS P INNER JOIN tbArquivo AS A ON A.idPasta = P.idPasta WHERE P.idPasta = $idPasta";		mysql_query($query);
			
		}



		

		
	}
	
?>	