<?php

namespace App\controller;

class feedbackController extends Controller
{
    // public $feedback_file = conf::feedback_file;
    // public $crud_feedback = conf::crud_feedback;

    public $feedback_file = "feedback.php";
    public $crud_feedback = CrudPhp;

    function __construct()
    {
        // parent::__construct($view);
        $this->feedback = new CrudPhp($this->feedback_file);
    }

    function actionAdd()
    {
        $this->feedback->add($_POST);
        $this->redirect('?t=' . $this->classNameNP() . '&a=addForm');
    }

    function actionAddForm()
    {
        $this->render("addform", [
            'targetURL' => '?t=' . $this->classNameNP() . '&a=add'
        ]);
    }
}
