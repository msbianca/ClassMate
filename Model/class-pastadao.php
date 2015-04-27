	<?php
		class PastaDao
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
				$query = "SELECT P.* FROM tbPasta AS P INNER JOIN tbArquivo AS A ON A.idPasta = P.idPasta INNER JOIN tbParticipacao AS PAR ON PAR.idParticipacao = A.idParticipacao INNER JOIN tbUsuario AS U ON U.idUsuario = PAR.idUsuario WHERE U.idUsuario ='$idUsuario'";
				$stmt = mysql_query($query) or die ($query. mysql_error());
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
			public function listarPasta($idPasta){
				$query = "SELECT P.*, A.* FROM tbPasta AS P INNER JOIN tbArquivo AS A ON A.idPasta = P.idPasta WHERE P.idPasta = $idPasta";		
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

			public function buscarPasta($idUsuario , $nome){
				$query = "SELECT P.* FROM tbPasta AS P INNER JOIN tbArquivo AS A ON A.idPasta = P.idPasta INNER JOIN tbParticipacao AS PAR ON PAR.idParticipacao = A.idParticipacao INNER JOIN tbUsuario AS U ON U.idUsuario = PAR.idUsuario WHERE U.idUsuario = '$idUsuario' AND P.nome LIKE '%".$nome."%'";
				$stmt = mysql_query($query) or die ($query. mysql_error());
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
		
	?>	