<?php

class PostDao {
    
    public function inserirPost(){
        $sql = "INSERT INTO tbPost "
                . "SET ";
        mysql_query($sql);
    }
    
    public function alterarPost(){
        $sql = "UPDATE tbPost "
                . "SET "
                . "WHERE codpost = $codpost";
        mysql_query($sql);
    }
    
    public function removerPost(){
        $sql = "DELETE FROM tbPost "
                . "WHERE codpost = $codpost";
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

