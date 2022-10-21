<?php

class BaseController
{
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
