<?php
	class ArquivoDao
	{
		public function inserirArquivo($idUsuario){
			$query = "INSERT INTO tbarquivo(idUsuario) VALUES ('".$idPasta.")";
						try {
				mysql_query($query);
			} catch (exception $e) {
				header('location: ..\view\error.php');
			}
		}

		
	}
	
?>	