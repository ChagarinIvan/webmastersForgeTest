<?php

class Model_Create extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function run(){
        $lang = $_SESSION['lang'];
        $lang_array = $_SESSION['language'][$lang];
        //delet html tegs
        $login=strip_tags($_POST['login']);
        $email=strip_tags($_POST['email']);
        $title=strip_tags($_POST['name']);
        $surname=strip_tags($_POST['surname']);
        //login verify
        $quer="SELECT `id` from `users` WHERE `login` = '$login'" ;
        $bd=$this->db;
        $query=$bd->query($quer, PDO::FETCH_ASSOC);
        $row = $query->fetch();
        if (empty($row)) {
            $sth = $this->db->prepare("INSERT INTO `users` (`id`, `login`, `password`, `email`, `name`, `surname`, `male`, `birthday`, `image`) VALUES (NULL, :login, :password, :email, :title, :surname, :male, :birthday, :image);");
            $filename = $_FILES['image']['name'];
            //check image
            $imageinfo = getimagesize($_FILES['image']['tmp_name']);
            echo $imageinfo['mime'];
            if($imageinfo['mime'] != 'image/jpeg'&&$imageinfo['mime'] != 'image/png'&&$imageinfo['mime'] != 'image/gif') {
                return $lang_array['error-image'];
            }

            $file_array = explode('.', $filename);
            //download image
            $prefix = $file_array[count($file_array) - 1];
            $templocation = $_FILES['image']['tmp_name'];
            $name = $this->generateFileName();
            $file = 'images/' . $name . '.' . $prefix;
            move_uploaded_file($templocation, $file);

            $password = $_POST['pass1'];
            //male translate

            $male = $_POST['male'];
            if ($lang == 'rus') {
                $male = $this->change_male($male, 'rus', 'eng');
            }

            $data = array(
                'login' => $login,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'email' => $email,
                'title' => $title,
                'surname' => $surname,
                'male' => $male,
                'birthday' => $_POST['birthday'],
                'image' => $file,
            );
            $state = $sth->execute($data);
            if ($state) {
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['password'] = $password;
                header('Location: /acount/');
            } else {
                return $lang_array['dont-create'];
            }
        } else {
            return $lang_array['user-exist'];
        }
    }

    function generateFileName(){
        $charses = "123456789zxcvbnmasdfghjklqwertyuiopZXCVBNMASDFGHJKLQWERTYUIOP";
        $numChars = strlen($charses);
        $string = "";
        for ($i = 0; $i < 10; $i++) {
            $string.= substr($charses, rand(1, $numChars) - 1, 1);
        }
        return $string;
    }
}