<?php

class MainPAgeDao{
    
    public function showNotficacao($idGrupo){
        $sql = 'SELECT TOP 3 nome,descricao FROM vwnotificacao WHERE idGrupo = ' . $idGrupo;
        $stmt = mysql_query($sql);
        $result = Array();
        while($rs = mysql_fetch_array($stmt)){
            array_push($result, $rs);
        }
        return $result; 
    }
    
    public function showMensagem($idGrupo){
        $sql = 'SELECT TOP 3 nome, descricao FROM vwmensagem WHERE idGrupo = ' . $idGrupo;
        $stmt = mysql_query($sql);
        $result = Array();
        while($rs = mysql_fetch_array($stmt)){
            array_push($result, $rs);
        }
        return $result;
    } 
}

