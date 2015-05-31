<?php

class PostDao {
    
    public function inserirPost($login, $descricao, $caminho='', $nomeArquivo=''){
        $sql = "INSERT INTO tbPost "
                . "SET idUsuario = $login, "
                . "descricao = $descricao, "
                . "caminhoArquivo = $caminho, "
                . "nomeArquivo = $nomeArquivo";
        mysql_query($sql);
        return mysql_insert_id();
    }
    
    public function alterarPost($idPost,$descricao, $caminho='', $nomeArquivo=''){
        $sql = "UPDATE tbPost "
                . "SET descricao = $descricao, "
                . "caminhoArquivo = $caminho, "
                . "nomeArquivo = $nomeArquivo "
                . "WHERE codpost = $idPost";
        mysql_query($sql);
    }
    
    public function removerPost($idPost){
        $sql = "DELETE FROM tbPost "
                . "WHERE codpost = $idPost";
        mysql_query($sql);
    }
    
    public function consultarPost(){
        $sql = "SELECT * "
                . "FROM tbPost";
        $stmt = mysql_query($sql);
        $aPost = array();
        while($rs -> mysql_fetch_object($stmt)){
            array_push($aPost, $rs);
        }
        return $aPost;
    }
}

