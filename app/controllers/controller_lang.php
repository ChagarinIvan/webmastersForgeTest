<?php
class Controller_Lang extends Controller {

    function __construct()
    {
        $this->model = new Model_Lang();
    }

    public function action_ru(){
        $this->model->ru();
    }

    public function action_eng(){
        $this->model->eng();
    }
}