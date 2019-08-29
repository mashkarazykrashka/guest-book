<?php

namespace App\controller;

class siteController extends Controller
{
    function actionHome()
    {
        $this->render("home", [
            'title' => "Home page",
            'main' => "Welcome!!!"
        ]);
    }

    function actionAbout()
    {
        $this->render("about", [
            'title' => "About site",
            'main' => "About!!!"            
        ]);
    }
}