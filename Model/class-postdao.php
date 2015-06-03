<?php

class PostDao {
    
    public function inserirPost($descricao){
        $sql = "INSERT INTO tbPost SET descricao = '$descricao'";
        mysql_query($sql);
        $sql = "SELECT MAX(idPost) FROM tbPost";
        return mysql_result(mysql_query($sql), 0);
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

