<?php
	class ArtigoDao
	{
		public function inserirArquivo($arquivo){
			$query = "INSERT INTO tbarquivo(idPasta, idParticipacao, nome, descricao, caminhoArquivo) VALUES ('".$idPasta."','".$idParticipacao."','".$nome."','".$descricao."','".$caminhoArquivo."')";
			try {
				mysql_query($query);
			} catch (exception $e) {
				header('location: ..\view\error.php');
			}
		}
	}
	
?>	