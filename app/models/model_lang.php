<?php
class Model_Lang extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function ru()
    {
        $_SESSION['lang']='rus';
        $this->return_to_referer();
    }

    public function eng()
    {
        $_SESSION['lang']='eng';
        $this->return_to_referer();
    }

    function return_to_referer(){
        $referer = $_SERVER['HTTP_REFERER'];
        $link = $this->get_link($referer);
        header("Location: $link");
    }

}