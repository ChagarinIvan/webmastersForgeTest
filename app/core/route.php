<?php

class Route {

    static function start() {
        if(!isset($_SESSION)){
            session_start();
        }
        if (!isset($_SESSION['lang'])){
            $_SESSION['lang']='rus';
        }
        if (!isset($_SESSION['language'])){
            $language=parse_ini_file(__DIR__.'/../language.ini', true);
            $_SESSION['language']=$language;
        }

        $controller_name = 'Main';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if( !empty($routes[1])){
            $controller_name = $routes[1];
        }

        if (!empty($routes[2])){
            $action_name = $routes[2];
        }
       
        if (strpos($action_name, '?')){
            $action_name = explode('?', $action_name)[0];
        }


        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;

        $model_file = strtolower($model_name).'.php';
        $model_path = "app/models/". $model_file;

        if(file_exists($model_path)){
            include_once $model_path;
        }

        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "app/controllers/". $controller_file;


        if(file_exists($controller_path)){
            include_once $controller_path;
        }else{
           Route::ErrorPage404();
        }

        $controller = new $controller_name;
        $action = $action_name;

        if(method_exists($controller, $action)){
            $controller->$action();
        }else{
            Route::ErrorPage404();
        }


    }

    function ErrorPage404() {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }

}