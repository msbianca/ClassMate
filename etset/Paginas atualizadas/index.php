<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ClassMate</title>
	<!--scripts para funcionamento do jquery [menu] obs: funciona apenas conectado a internet-->
	  <script src='//assets.codepen.io/assets/libs/fullpage/jquery-c152c51c4dda93382a3ae51e8a5ea45d.js'></script>
    
		 <script>
            if (document.location.search.match(/type=embed/gi)) {
              window.parent.postMessage('resize', "*");
            }
         </script>

      <script src="//assets.codepen.io/assets/common/stopExecutionOnTimeout-6c99970ade81e43be51fa877be0f7600.js"></script>
      <script type="text/javascript" src="script/jquery_menu.js"> </script> 
     <!-- CSS --> 
      <link href="estilo.css" rel="stylesheet" type="text/css" media="all" />
 
</head>

<body>

<div id="principal">

	<div id="divEsquerda">
    	
        <div id="logo">
        	<img  id="logo" src="imagens/logo.png" />
        </div> <!-- LOGO-->
       
        <div id="menuEsquerda">
        	
            <ul>
            	<li> Disciplinas</li>
              	<li> Sala</li>
                <li> Grupos</li>
            </ul>
            
            
        </div><!-- menuEsquerda-->
        
    </div><!-- DivEsquerda-->
    
    <div class="divMenu">
    	
        <div class="menu">
        	
            <ul>
            	<li> <a href="#">Home</a> </li>
            	<li> <a href="paginas/perfil.html">Perfil</a> </li>
              	<li> <a href="paginas/alunos.html">Alunos</a> </li>
                <li> <a href="paginas/professores.html">Professores</a> </li>
                <li><a href="paginas/arquivos.html">Arquivos</a></li>
                <li> <a href="paginas/atualizacoes.html">Atualizações</a> </li>
                <li> <a href="paginas/comunicado.html">Comunicado</a> </li>
                <li> <a href="#">Sair</a> </li>
            </ul>
            
        </div><!-- menu-->
        
    </div><!-- DivMenu-->
    
      <div id="divConteudo">
      
            <div class="content">
              <div class="tabs-content">
                <div class="tabs-menu clearfix">
                  <ul>
                    <li><a class="active-tab-menu" href="#" data-tab="tab1">ABA 1</a></li>
                    <li><a href="#" data-tab="tab2">ABA 2</a></li>
                    <li><a href="#" data-tab="tab3">ABA 3</a></li>
                  </ul>
                </div> <!-- tabs-menu -->
                
                <div class="tab1 tabs first-tab">
                 Conteúdo da aba 1
                </div> <!-- .tab1 -->
                
                <div class="tab2 tabs">
                  Conteúdo da aba 2
                </div> <!-- .tab2 -->
                
                <div class="tab3 tabs">
                  Conteúdo da aba 3 
                </div> <!-- .tab3 -->
                
              </div> <!-- .tabs -->
        </div> <!-- .content -->
      
       
   	 </div><!-- divConteudo -->

</div><!-- principal-->

</body>
</html>