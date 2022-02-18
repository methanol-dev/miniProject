<?php

class Controller
{
    //xu ly model
    public function model($model)
    {
        require_once('./mvc/models/' . $model . '.php');

        return new $model;
    }
    //xu ly view
    public function view($view, $data = [])
    {
        require_once('./mvc/views/' . $view . '.php');
    }
}
