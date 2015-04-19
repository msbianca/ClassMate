<?php 
	class DAO
	{
		private  $database = "dbClassMate";
		private  $usuario  = "root";
		private  $senha = "";
		private  $host = "localhost";
		
		public function conectarBD(){
			return mysql_connect($this->host, $this->usuario, $this->senha) or print (mysql_error());
		}
		
		public function abrirBD(){
			//$conexao = $this->conectarBD();
			mysql_select_db($this->database,  mysql_connect($this->host, $this->usuario, $this->senha)) or print (mysql_error());
		}
	}
?>
			