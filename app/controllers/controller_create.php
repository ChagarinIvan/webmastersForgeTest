<?php

class Controller_Create extends Controller {

    function __construct()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        $this->model = new Model_Create();
        $this->view = new View();
    }

    public function action_index()
    {
        $this->view->generate('create_view.php', 'template_view.php', null, $_SESSION['lang']);
    }
    public function action_run(){
        $data = $this->model->run();
        $this->view->generate('result_view.php', 'template_view.php', $data, $_SESSION['lang']);
    }
}