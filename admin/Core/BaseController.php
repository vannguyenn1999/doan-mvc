<?php

class BaseController

{
    protected $main_content;
    public $error;
    public function model($model)
    {
        require_once './admin/Models/'.$model.'.php';
        return new $model;
    }
    public function view($viewFile , $view, $data=[])
    {
        require_once './admin/Views/'.$viewFile.'/'.$view.'.php';
        
    }
}
