<?php

require_once '../Model/class-usuariodao.php';

class BuscarUsuariosController {

    private $dao;

    public function showUsersAluno() {
        if (isset($_GET['id']) && $_GET['id'] != "") {
            foreach ($this->dao->searchUserAluno($_GET['id']) as $usuario) {
                echo '<td>Nome: ' . $usuario['Usuario'] . '</td>' .
                '<td>Curso: ' . $usuario['Curso'] . '</td>' .
                
                '<td><a href=../view/perfil.php?id=' . $usuario['idUsuario'] . '>Visitar Perfil</a> </td>'.
                '</tr>';
            }
        }
    }

    public function __construct() {
        $this->dao = new UsuarioDao();
    }

}
