<?php

class MainPAgeDao{
    
    public function getNotficacao($idGrupo){
        $sql = 'SELECT TOP 3 N.idNotificacao, N.descricao FROM tbnotificacao AS N INNER JOIN tbparticip';
        $stmt = mysql_query($sql);
        $result = Array();
        while($rs = mysql_fetch_array($stmt)){
            array_push($result, $rs);
        }
        return $result; 
    }
    
    public function getMensagem($idGrupo){
        $sql = 'SELECT TOP 3 N.idNotificacao, N.descricao FROM tbnotificacao AS N INNER JOIN tbparticip';
        $stmt = mysql_query($sql);
        $result = Array();
        while($rs = mysql_fetch_array($stmt)){
            array_push($result, $rs);
        }
        return $result;
    } 
}

