<?php

require_once '../Model/class-usuariodao.php';

class BuscarUsuariosController {

    private $dao;

    public function showUsers() {
        if (isset($_SESSION['search'])) {
            foreach ($this->dao->searchUsers($_SESSION['search']) as $usuario) {
                echo '<a href=../view/perfil.php?id=' . $usuario['idUsuario'] . '<tr>' .
                '<td>Nome: ' . $usuario['nome'] . '</td>' .
                '<td>Curso: ' . $usuario['curso'] . '</td>' .
                '</tr></a>';
            }
        }
    }

    public function __construct() {
        $this->dao = new UsuarioDao();
    }

}
