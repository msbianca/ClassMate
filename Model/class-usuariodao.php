<?php
    require '..\model\class-cadastro.php';
	class UsuarioDao
	{
		public function loginViraId($login){
		$query = "SELECT L.idUsuario FROM tbUsuario as U, tbLogin as L WHERE U.idUsuario = L.idUsuario AND L.usuarioco = '$login' OR L.email = '$login'";
			$result = mysql_query($query);
			return mysql_result($result, 0);
		}
		public function habilitarUsuario($idUsuario){
			$query = "UPDATE tbLogin SET ativo = 1 WHERE idUsuario	= '".$idUsuario."'";
			mysql_query($query) or die(mysql_error());
		}
		
		public function desabilitarUsuario($idUsuario){
			$query = "UPDATE tbLogin SET ativo = 0 WHERE idUsuario = '$idUsuario'";
			mysql_query($query);
		}
		
		public function efetuarLogin($login, $senha){
			$query = "SELECT usuarioco, email, senha, ativo FROM tbLogin WHERE usuarioco = '$login' or email = '$login'";
			$result = mysql_query($query) or die (mysql_error());
			$cadastro = new Cadastro();
			$senhaCriptografada = $cadastro->criptografarSenha($senha);
			
			while($consulta = mysql_fetch_array($result)){
				
					if((($consulta[0] == $login) or ($consulta[1] == $login)) and ($consulta[2] == $senhaCriptografada)){
						if($consulta[3] == 1){
							$this->iniciarSession($consulta[0]);
							header('location: ..\view\principal.php');
						}else{
							header('location: ..\view\desabilitado.html');
						}
					}else{
						header('location: ..\view\senhaInvalida.html');	
					}	
			} 
			mysql_free_result($result); 
		}
		
		public function iniciarSession($login){
			session_start();
			$_SESSION['login'] = $login;
		}
		
		public function usuariosDesabilitados(){
			$query = "SELECT * FROM tbLogin as LOG INNER JOIN tbUsuario as USU ON LOG.idUsuario = USU.idUsuario WHERE LOG.ativo = 0";
			$result = mysql_query($query) or die (mysql_error());
			while($consulta = mysql_fetch_array($result)){		
				echo "<tr>";
				echo "	<td>" . $consulta[7] . "</td>";
				echo "	<td>" . $consulta[2] . "</td>";
				echo "	<td>" . $consulta[3] . "</td>";
				echo "	<td>" . $consulta[8] . "</td>";
				echo "	<td>" . $consulta[10] . "</td>";
				echo "	<td>" . $consulta[9] . "</td>";
				echo "	<td>";
				echo "	    <form method=post action='..\controller\habilitarusuario-controller.php'>";
				echo "		   <input type=hidden name=idUsuario value=" . $consulta[1] . " >";
				echo "		   <input type=submit value='Habilitar!'>";
				echo "  	</form>";
				echo "	</td>";
				echo "</tr>";
			} 
			mysql_free_result($result);
		}

		public function consultarUsuarios($login){
			$query = "SELECT usuariocol, email, senha, ativo FROM tbLogin WHERE usuariocol = '$login' or email = '$login'";
			$result = mysql_query($query) or die (mysql_error());
			
			
			while($consulta = mysql_fetch_array($result)){
				
					if(($consulta[0] == $login) or ($consulta[1] == $login)){
						if($consulta[3] == 1){
							$this->iniciarSession($consulta[0]);
							//header('location: ..\view\principal.php');
						}else{
							header('location: ..\view\desabilitado.html');
						}
					}else{
						//header('location: ..\view\senhaInvalida.html');	
					}	
			} 
			mysql_free_result($result); 
		}

		public function listarDisciplinas($idUsuario){
			$query = "SELECT d.nome FROM tbDisciplinas AS d INNER JOIN tbAlunoCursando AS a ON d.idDisciplina = a.idDisciplina WHERE a.idAluno =".$idAluno;
			$result = mysql_query($query) or die (mysql_error());
			$disciplinas = Array();
			$i = 0;
			while($consulta = mysql_fetch_array($result)){
					$disciplinas[$i] = $consulta[0];
					$i++;
			}
			return $disciplinas;
		}

		public function listarGrupos($idUsuario){
			$query = "SELECT d.nome FROM tbGrupos AS d INNER JOIN tbgrupomembro AS g ON d.idGrupo = g.idGrupo WHERE g.idAluno =".$idAluno;
			$result = mysql_query($query) or die (mysql_error());
			$grupos = Array();
			$i = 0;
			while($consulta = mysql_fetch_array($result)){
					$grupos[$i] = $consulta[0];
					$i++;
			}
			return $grupos;
		}

		public function listarSalas($idUsuario){
			$query = "SELECT d.nome FROM tbSala AS s INNER JOIN tbAlunoSala AS a ON s.idSala = a.idSala WHERE g.idAluno =".$idAluno;
			$result = mysql_query($query) or die (mysql_error());
			$grupos = Array();
			$i = 0;
			while($consulta = mysql_fetch_array($result)){
					$salas[$i] = $consulta[0];
					$i++;
			}
			return $salas;
		}

		public function consultarGrupos($login){
			$login = self::loginViraId($login);
			$query = "SELECT G.nome FROM tbGrupo AS G, tbUsuario AS U, tbParticipante AS P WHERE P.idUsuario = U.idUsuario AND P.idGrupo = G.idGrupo AND  U.idUsuario = '".$login."'";
			$result = mysql_query($query) or die (mysql_error());
			$i = 0;
			$listagem = Array();
			while($consulta = mysql_fetch_array($result)){
				$listagem[$i] = $consulta[0];
			} 
			mysql_free_result($result); 
			return $listagem;
		}
		
		
		public function consultarDisciplinas($login){
			$login = self::loginViraId($login);
			$query = "SELECT D.nome FROM tbDisciplina AS D, tbDisciplinaGrupo AS DG, tbParticipante AS P, tbGrupo AS G WHERE P.idGrupo = G.idGrupo AND D.idDisciplina = DG.idDisciplina AND DG.idGrupo = G.idGrupo AND P.idUsuario = '".$login."'";
						$result = mysql_query($query) or die (mysql_error());
			$i = 0;
			$listagem = Array();
			while($consulta = mysql_fetch_array($result)){
				$listagem[$i] = $consulta[0];
			} 
			mysql_free_result($result); 
			return $listagem;
		}
	}
?>