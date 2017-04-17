<?php

class Controller_404 extends Controller {
    public function action_index(){
        if(!isset($_SESSION)){
            session_start();
        }
        $this->view->generate('404.php', 'template_view.php', null, $_SESSION['lang']);
    }
}