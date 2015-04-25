<?php
	class Arquivo{
		private $idArquivo;
		private $idPasta;
		private $idParticipacao;
		private $nome;
		private $descricao;
		private $caminhoArquivo; 
		
		public function setIdArquivo($idArquivo){
			$this->IidArquivo = $idArquivo;
		}
		
		public function getIidArquivo(){
			return $this->idArquivo;
		}
		
		public function setIdPasta($idPasta){
			$this->idPasta = $idPasta;
		}
		
		public function getIdPasta(){
			return $this->idPasta;
		}
		
		public function setIdParticipacao($idParticipacao){
			$this->idParticipacao = $idParticipacao;
		}
		
		public function getIdParticipacao(){
			return $this->idParticipacao;
		}
		
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}
		
		public function getDescricao(){
			return $this->descricao;
		}
		
		public function setCaminhoArquivo($caminhoArquivo){
			$this->caminhoArquivo = $caminhoArquivo;
		}
		
		public function getCaminhoArquivo(){
			return $this->caminhoArquivo;
		}
		
		public function efetuarUpload($arquivo){
			$uploaddir = '..\resources\arquivo\\';
			$uploadfile = $uploaddir . $arquivo->getidArquivo();
			try {
				if($_FILES['userfile']['type'] == 'application/pdf'){
					move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
					$arquivoDao = new ArquivoDao();
					$arquivoDao->inserirArquivo($arquivo);
				}else{
					header('location: ..\view\formatoInvalido.php');
				}
			}catch(exception $e){
				header('location: ..\view\erro.php');
			}
		}
		
		
	}