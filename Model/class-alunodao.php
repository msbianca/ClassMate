<?php

require '../model/class-usuariodao.php';

class AlunoDao {

    public function inserirAluno($aluno) {
        $udao = new UsuarioDao();
        $idCodTipoMaster = $udao->usuarioTipo($_SESSION['login']);
        switch ($idCodTipoMaster) {
            case 40: {
                    $idCodTipo = 20;
                    break;
                }
            case 30: {
                    $idCodTipo = 60;
                    break;
                }
            default : {
                    $idCodTipo = 50;
                }
        }
        
        $result = $this->BuscarUltimo();

        $query = "INSERT INTO tbUsuario (nome, datanascimento, estado, cidade, idTipoCargo) VALUES ('$aluno->nome','$aluno->nascimento','$aluno->estado','$aluno->cidade','$idCodTipo')";
        mysql_query($query) or print (mysql_error());

        $idUsuario = $result + 1;

        $query = "INSERT INTO tbLogin (idUsuario, UsuarioCo, email, senha) VALUES ('" . $idUsuario . "','" . $aluno->usuariocol . "','" . $aluno->email . "','" . $aluno->senha . "')";
        mysql_query($query) or print (mysql_error());
    }

    /* 	
      public function inserirAluno($aluno){

      $aluno->$idUsuario;
      echo $idUsuario;
      $aluno->$nome;
      echo $nome;
      $aluno->$nascimento;
      echo $nascimento;
      $aluno->$estado;
      echo $estado;
      $aluno->$cidade;
      echo $cidade;
      $aluno->usuariocol;
      echo $usuariocol;
      $aluno->email;
      echo $email;
      $aluno->senha;
      echo $senha;

      /*			$query = "INSERT INTO tbUsuario VALUES ('$nome->nome','$nascimento->nascimento','$estado->estado','$cidade->cidade','$usuariocol->usuariocol')";
      mysql_query($query) or print (mysql_error());
      $query = "INSERT INTO tbLogin VALUES ('$idUsuario->idUsuario','$usuariocol->usuariocol','$email->email','$senha->senha',0)";
      mysql_query($query);

      '$aluno->idUsuario', '$aluno->idUsuario',

      $alunodao = new AlunoDao();

      $result = $alunodao->BuscarUltimo();

      $idUsuario = ((int)$result /10)+1;


      } */

    public function BuscarUltimo() {
        $result = mysql_query('SELECT MAX(idUsuario) FROM tbusuario');
        //	$result = mysql_query($result);
        return mysql_result($result, 0);
    }

}

?>