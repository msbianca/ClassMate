<?php
	class ListsDao
	{
	    public function listarCursos ()
	    {
			session_start();
			require_once '../model/class-cursosdao.php';
			$cursosDao = new CursosDao();
			$_SESSION['cursos'] = $cursosDao->selectCurso();
		}

		public function listarSemestre ()
	    {
			session_start();
			require_once '../model/class-semestredao.php';
			$semestreDao = new SemestreDao();
			$_SESSION['semestre'] = $semestreDao->selectSemestre();
		}
		public function listarDisciplina ($idCurso, $idSemestre)
	    {
			session_start();
			require_once '../model/class-disciplinadao.php';
			$disciplinaDao = new DisciplinaDao();
			$_SESSION['nome'] = $disciplinaDao->listarDisciplina($idCurso, $idSemestre);
		}
		
	}
?>

