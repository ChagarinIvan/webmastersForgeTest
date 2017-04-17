<?php

class Controller_Acount extends Controller {

    function __construct()
    {
        $this->model = new Model_Acount();
        $this->view = new View();
    }

    public function action_index()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        $data = $this->model->get_data();
        $this->view->generate('acount_view.php', 'template_view.php', $data, $_SESSION['lang']);
    }
}