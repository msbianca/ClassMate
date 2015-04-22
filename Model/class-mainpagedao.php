<?php

class MainPAgeDao{
    
    public function showNotificacao(){
        $sql = 'SELECT nome,descricao FROM vwnotificacao LIMIT 3';
        $stmt = mysql_query($sql) or die($sql);
        $result = Array();
        while($rs = mysql_fetch_array($stmt)){
            array_push($result, $rs);
        }

        return $result; 
    }
    
    public function showMensagem(){
        $sql = 'SELECT nome, descricao FROM vwmensagem LIMIT 3';
        $stmt = mysql_query($sql);
        $result = Array();
        while($rs = mysql_fetch_array($stmt)){
            array_push($result, $rs);
        }
        return $result;
    } 
}

