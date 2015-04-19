<?php

require_once '../model/class-mainpagedao.php';

class MainPageController {

    private $mainDao;

    public function showNotificacao($idGrupo) {
        foreach ($this->mainDao->showNotificacao($idGrupo) as $notificacoes) {
            echo '<div class="tabs">'.
            '<input type="radio" name="tabs" id="tab3" />'.
            '<label for="tab3">'. $notificacoes['nome'] . '</label>'.
            '<div class="tab-content">'.
            $notificacoes['descricao'].
            '</div>'.
            '</div>';
        }
    }
    
    public function showMensagens($idGrupo) {
        foreach ($this->mainDao->showMensagem($idGrupo) as $mensagem) {
            echo '<div class="mensagem">'.
            $mensagem['descricao'].
            '</div>';
        }
    }

    public function __construct() {
        $this->mainDao = new MainPageDao();
    }

}
