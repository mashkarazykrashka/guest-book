<?php
namespace App\controller;

use App\view\View;

abstract class Controller
{
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function render($viewName, $viewData = [])
    {
        $this->view->render($viewName, $viewData);
    }

    function redirect($location)
    {
        header("Location: " . $location);
    }

    function actionAbout(){
        echo "ActionAbout";
    }

    function classNameNP()
    {
        return strtolower(preg_replace('/Controller$/', '', get_class($this)));
    }

    function currentActionNameNP()
    {
        return strtolower(preg_replace('/^action/', '', debug_backtrace()[1]['function']));
    }
}
