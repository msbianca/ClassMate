	<?php
		class ParticipacaoDao
		{
		public function inserirParticipacao($idMenssagem, $idNotificacao,$idPost, $idgrupo, $idUsuario, $idArquivo){
			$query = "INSERT INTO tbparticipacao(idMenssagem, idNotificacao, idPost, idgrupo, idUsuario, idArquivo) VALUES ('$idMenssagem', '$idNotificacao', '$idPost', '$idgrupo','$idUsuario', '$idArquivo')";
		     mysql_query($query) or die($query.mysql_error());
			
		}

		public function inserirParticipacaoPost($idPost,$idGrupo, $idUsuario,$idArquivo){
			$query = "INSERT INTO tbparticipacao SET idPost = $idPost, idGrupo = $idGrupo, idUsuario = $idUsuario";
			mysql_query($query) or die($query.mysql_error());
		}

		public function buscarUltimaParticipacao($idUsuario){
			$query = "SELECT MAX(PAR.idparticipacao) FROM tbParticipacao AS PAR  INNER JOIN tbGrupo AS G ON G.idGrupo = PAR.idGrupo INNER JOIN tbparticipante AS P ON P.idGrupo = G.idGrupo INNER JOIN tbUsuario AS U ON U.idUsuario = P.idUsuario WHERE P.idUsuario = '$idUsuario' AND G.idGrupo = 32  ORDER BY  PAR.idparticipacao";
			$stmt = mysql_query($query);
			return mysql_result($stmt, 0);
	}
}