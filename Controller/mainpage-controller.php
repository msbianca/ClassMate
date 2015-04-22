<?php

require_once '../model/class-mainpagedao.php';

class MainPageController {

    private $mainDao;

    public function showNotificacao() {
        $i = 0;
        foreach ($this->mainDao->showNotificacao() as $notificacoes) {
            echo '<div class="tabs">'.
            '<input type="radio" name="tabs" id="tab'.$i.'" />'.
            '<label for="tab'.$i.'">'. $notificacoes['nome'] . '</label>'.
            '<div class="tab-content">'.
            $notificacoes['descricao'].
            '</div>'.
            '</div>';
            $i++;
        }
    }
    
    public function showMensagens() {
        foreach ($this->mainDao->showMensagem() as $mensagem) {
            echo '  <br/> <div class="mensagem">'.
            $mensagem['descricao'].
            '</div>';
        }
    }

    public function __construct() {
        $this->mainDao = new MainPageDao();
    }

}
