<?php

require_once '../Model/class-usuariodao.php';

class BuscarUsuariosController {

    private $dao;

    public function showUsersAluno() {
        if (isset($_GET['id']) && $_GET['id'] != "") {
            foreach ($this->dao->searchUserAluno($_GET['id']) as $usuario) {
                echo '<td>Nome: ' . $usuario['Usuario'] . '</td>' .
                '<td>Curso: ' . $usuario['Curso'] . '</td>' .
                
                '<td><a href=../view/perfilA.php?id=' . $usuario['idUsuario'] . '>Visitar Perfil</a> </td>'.
                '</tr>';
            }
        }
    }

    public function showUsersProfessor() {
        if (isset($_GET['id']) && $_GET['id'] != "") {
            foreach ($this->dao->searchUserProfessor($_GET['id']) as $usuario) {
                echo '<tr>'.
                '<td>Nome: ' . $usuario['Usuario'] . '</td>'.
                '<td>E-mail: ' . $usuario['email'] . '</td>'.
                '<td>Disciplina: ' . $usuario['Disciplina'] . '</td>'.
                '<td><a href=../view/perfilP.php?id=' . $usuario['idUsuario'] . '>Visitar Perfil</a> </td>'.
                '</tr>';
            }
        }
    }

    public function __construct() {
        $this->dao = new UsuarioDao();
    }

}
