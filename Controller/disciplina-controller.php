<?php
	require_once '../model/class-disciplinadao.php';

	$nome = $_POST['nome'];
	$curso = $_POST['curso'];
	$apelido = $_POST['apelido'];
	$semestre = $_POST['semestre'];

	$disciplinadao = new DisciplinaDao();

	$disciplinadao->inserirDisciplina($nome, $apelido, $disciplinadao->getSemestreCurso($semestre, $curso));
?>