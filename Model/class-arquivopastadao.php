<?php
	public function inserirArquivo( $idPasta, $idParticipacao, $NomeArquivo, $CaminhodoArquivo){
		$query = "INSERT INTO tbArquivo VALUES (" .$idPasta. "," .$idParticipacao. "," .$NomeArquivo. "," .$CaminhodoArquivo. ")";
		mysql_query($query); 
	}

	public function inserirPasta( $idParticipacao, $Nome, $Descricao){
		$query = "INSERT INTO tbArquivo VALUES (" .$idParticipacao. "," .$Nome. "," .$Descricao. ")";
		mysql_query($query);
	}
?>