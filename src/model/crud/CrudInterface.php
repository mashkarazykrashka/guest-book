<?php

namespace App\Model\Crud;

interface CrudInterface {

    public function get();

    public function del(int $id);

    public function edit(int $id, array $array);

    public function add(array $array);

}

?>