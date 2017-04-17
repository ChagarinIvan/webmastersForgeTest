<?php

class Model_Acount extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_data()
    {
        $referer = $_SERVER['HTTP_REFERER'];
        $link=$this->get_link($referer);
        if ($link!='/create/'&&$link!='/acount/'){
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password']= $_POST['password'];
        }
        $login=$_SESSION['login'];
        $pass=$_SESSION['password'];
        $quer="SELECT `password` from `users` WHERE BINARY `login`='$login'";
        $bd=$this->db;
        $query=$bd->query($quer, PDO::FETCH_ASSOC);
        $row = $query->fetch();
        if (!empty($row)) {
            if (password_verify($pass, $row['password'])) {
                $quer = "SELECT `email`,`name`,`surname`,`male`,`birthday`,`id`, `image` from `users` WHERE `login`='$login'";
                $bd = $this->db;
                $query = $bd->query($quer, PDO::FETCH_ASSOC);
                $row = $query->fetch();

                $lang = $_SESSION['lang'];
                $male = $row['male'];
                if ($lang=='rus'){
                    $male=$this->change_male($male, 'eng', 'rus');
                }
                $row['male']=$male;
                return $row;
            }
        }
        $_SESSION['result']=true;
        header('Location: /main/');
        return null;
    }

}