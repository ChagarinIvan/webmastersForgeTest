<?php

class Controller_Main extends Controller {
    function action_index()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        $this->view->generate('main_view.php', 'template_view.php', null, $_SESSION['lang']);
    }

}