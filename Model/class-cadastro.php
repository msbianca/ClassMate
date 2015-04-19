<?php 

	//require '..\model\class-alunodao.php';
	
	class Cadastro
	{
		public function efetuarCadastroAluno($usuario){
			$senha = $this->criptografarSenha($usuario->senha);
			$dao = new AlunoDao();
			$dao->inserirAluno($usuario);
			$this->enviarEmail();
		}
		
		public function criptografarSenha($senha){
			return md5($senha);
		}
		
		public function enviarEmail($usuario){
		//	$mensagem = "O usuário " . $usuario->nome . " deseja se cadastrar ao sistema ClassMate, para aprovar o cadastro acesse http://www.classmate.com.br/adminarea.php e aprove a solicitação";
		//	$assunto = "Solicitação de Cadastro";
		//	$destinatario = "bia.mart05@gmail.com";
		//	mail($destinatario, $assunto, $mensagem);
		}	
	}
?>