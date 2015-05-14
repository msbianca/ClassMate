<?php
	$idUsuario = 0;
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$nascimento = $_POST['nascimento'];
	$estado = "São Paulo";
	$cidade = $_POST['cidade'];
	$usuariocol = $_POST['usuariocol'];
	$senha = $_POST['senha'];
		
	require '..\model\class-cadastro.php';
	require '..\model\class-usuario.php';
	require '..\model\class-alunodao.php';
	require '..\model\class-dao.php';
	

	$cadastro = new Cadastro();
	
	$senha = $cadastro->criptografarSenha($senha);
	
	$usuario = new usuario();
	
	$usuario->setidUsuario($idUsuario);
	$usuario->setNome($nome);
	$usuario->setEmail($email);
	$usuario->setNascimento($nascimento);
	$usuario->setEstado($estado);
	$usuario->setCidade($cidade);
	$usuario->setUsuariocol($usuariocol);
	$usuario->setSenha($senha);
	
	$dao = new DAO();
	
	$dao->abrirBD();
	
	$alunodao = new AlunoDao();

	$alunodao->inserirAluno($usuario);
?>
		
		
		
		
		
		
		
		