<?php

namespace App\Model\Crud;

class CrudJson extends CrudEntity
{

    function get()
    {

        return json_decode(file_get_contents($this->file_name), true);

    }

    function write_file(array $data_array)
    {

        return file_put_contents($this->file_name, json_encode($data_array, JSON_FORCE_OBJECT));

    }

}

?>