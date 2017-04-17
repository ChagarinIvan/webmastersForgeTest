<?php

class Controller_Image extends Controller {

    function __construct()
    {
        $this->model = new Model_Image();
    }

    public function action_avatar(){
        $this->model->avatar();
    }
}