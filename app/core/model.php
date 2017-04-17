<?php

class Model {
    public $db;

    public function __construct()
    {
        if(!isset($_SESSION)){
            session_start();
        }
        $this->db = new Database();
    }

    public function get_data(){

    }

    public function change_male($male, $lang1, $lang2){
        switch ($male){
            case $_SESSION['language'][$lang1]['male-m']:
                $male = $_SESSION['language'][$lang2]['male-m'];
                break;
            case $_SESSION['language'][$lang1]['male-o']:
                $male = $_SESSION['language'][$lang2]['male-o'];
                break;
            case $_SESSION['language'][$lang1]['male-f']:
                $male = $_SESSION['language'][$lang2]['male-f'];
                break;
        }
        return $male;
    }
    
    public function get_link($referer){
        return explode("webmastersforgetest", $referer)[1];
    }

}