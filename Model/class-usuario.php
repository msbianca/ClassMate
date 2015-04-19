<?php

	class Usuario
	{
		public $idUsuario;
		public $nome;
		public $email;
		public $nascimento;
		public $estado;
		public $cidade;
		public $usuariocol;
		public $senha;
		public $ativo;
		public $logado;
		
		public function setIdUsuario($idUsuario){
			$this->idUsuario = $idUsuario;
		}
		
		public function getIdUsuario(){
			return $this->idUsuario;
		}
		
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getNome(){
			return $this->nome;
		}	
		
		public function setEmail($email){
			$this->email = $email;
		}
		
		public function getEmail(){
			return $this->email;
		}	
		
		public function setNascimento($nascimento){
			$this->nascimento = $nascimento;
		}
		
		public function getNascimento(){
			return $this->nascimento;
		}	
		
		public function setEstado($estado){
			$this->estado = $estado;
		}
		
		public function getEstado(){
			return $this->estado;
		}	
		
		public function setCidade($cidade){
			$this->cidade = $cidade;
		}
		
		public function getCidade(){
			return $this->cidade;
		}	
		
		public function setUsuariocol($usuariocol){
			$this->usuariocol = $usuariocol;
		}
		
		public function getUsuariocol(){
			return $this->usuariocol;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}
		
		public function getSenha(){
			return $this->senha;
		}	
	
		public function setAtivo($ativo){
			$this->ativo = $ativo;
		}
		
		public function isAtivo(){
			return $this->ativo;
		}
		
		public function setLogado($logado){
			$this->logado = $logado;
		}
		
		public function isLogado(){
			return $this->logado;
		}
	}
?>