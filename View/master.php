
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perfil</title>
<link href="estilo.css" rel="stylesheet" type="text/css" media="all" />



        <?php
            header("Content-Type: text/html; charset=UTF-8",true);
            if(!isset($_SESSION)){
                session_start();
            }
            require_once '../controller/master-controller.php';
            $masterControl = new MasterController();
            if(!isset($_SESSION['login'])){
                header('location:../index.php');
            }
            
            //require '..\controller\montarperfil-controller.php'; 
        ?>



</head>

<body>

<div id="principal">

    <div id="divEsquerda">
        
        <div id="logo">
            <img  id="logo" src="../View/assets/img/teste2.png" />
        </div>
       
        <div id="menuEsquerda">
            
            <ul>
                <li> Disciplinas</li>
                <li><?php $masterControl->listarDisciplinas($_SESSION['login']); ?>  </li>
                <li> Grupos</li>
                <li><?php $masterControl->listarGrupos($_SESSION['login']); ?>  </li>
            </ul>
            
        </div>
        
    </div>
    
    <div class="divMenu">
        
        <div class="menu">
            
    <ul>
                <li> <a href="../index.php">Home</a> </li>
                <li> <a href="#">Perfil</a> </li>
                <li> <a href="alunos.html">Alunos</a> </li>
                <li> <a href="professores.html">Professores</a> </li>
                <li><a href="arquivos.html">Arquivos</a></li>
                <li> <a href="atualizacoes.html">Atualizações</a> </li>
                <li> <a href="comunicado.html">Comunicado</a> </li>
                <li> <a href="cofiguracao.php">Configuração</a> </li>
                <li> <a href="#">Sair</a> </li>
            </ul>
            
        </div>
        
    </div>

</body>
</html>