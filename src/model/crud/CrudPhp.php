<?php

namespace App\Model\Crud;

class CrudPhp extends CrudEntity
{

    function get()
    {

        return include($this->file_name);

    }

    function write_file(array $data_array)
    {

        file_put_contents($this->file_name, '<?php return '.var_export($data_array, true).';');

    }

}

?>