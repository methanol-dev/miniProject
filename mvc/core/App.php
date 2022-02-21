<?php

class App
{

    protected $controller = 'Home';
    protected $action = 'index';
    protected $param = [];
    function __construct()
    {
        $arr = $this->UrlProcess();

        // Xu ly controller
        if (isset($arr[0])) {
            $this->controller = file_exists('./mvc/controllers/' . $arr[0] . '.php') ? $arr[0] : $this->controller;
            unset($arr[0]);
        }
        require_once('./mvc/controllers/' . $this->controller . '.php');
        $this->controller = new $this->controller;

        // Xu ly acction
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        // echo $this->action;

        // Xu ly param
        $this->param = $arr ? array_values($arr) : [];
        // print_r($this->param);

        call_user_func_array([$this->controller, $this->action], $this->param);
    }

    function UrlProcess()
    {
        if (isset($_GET['url'])) {
            // return $u = $_GET['url'];
            return explode("/", filter_var(trim($_GET['url'], "/")));
        }
    }
}
