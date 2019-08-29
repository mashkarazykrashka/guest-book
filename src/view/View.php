<?php

namespace App\view;

class View
{
    public $viewName;
    public $viewData;
    public $viewPath = __DIR__.'/../../templates/site/';
    public $layoutPath = __DIR__.'/../../templates/_layouts/mainLayout.php';

    function __construct()
    {}

    function render ($viewName, $viewData =[])
    {
        $this->viewName = $viewName;
        $this->viewData = $viewData;

        extract($this->viewData);
        include $this->layoutPath;
    }

    function body()
    {
        extract($this->viewData);
        include $this->viewPath . $this->viewName . '.php';
    }

    function setNewLayoutPath($layoutPath)
    {   
        $this->layoutPath = $layoutPath;
        return $this;
    }

    function setNewViewPath($viewPath)
    {
        $this->viewPath = $viewPath;
        return $this;

    }

}