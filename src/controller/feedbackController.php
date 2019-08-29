<?php

abstract class feedbackController extends Controller
{
    public $table_name;

    function __construct($view)
    {
        parent::__construct($view);
        $this->table = new tableModel(new mysqli(conf::mysql_host, conf::mysql_username, conf::mysql_password, conf::mysql_db), $this->table_name);
        $this->table->set_page_size(10);
    }

    function actionAddForm()
    {
        $this->render("addform", [
            'fields' => array_diff($this->table->get_field(), ['id']),
            'targetURL' => '?t=' . $this->classNameNP() . '&a=addrow'
        ]);
    }
}
