<?php
/**
 * Created by PhpStorm.
 * User: CIA
 * Date: 13.04.2017
 * Time: 11:22
 */
class Model_Image extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function avatar()
    {
        $id=$_GET['id'];
        $bd=$this->db;
        $quer = "SELECT `image` from `users` WHERE `id`=$id";
        $query=$bd->query($quer, PDO::FETCH_ASSOC);
        $row = $query->fetch();
        header("Content-type: image/*");
        return $row['image'];
    }

}