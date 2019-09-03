<?php

namespace App\Model\DataStorage;

class CSVstorage extends CrudEntity
{

    function get()
    {

        $this->checkFileExists();

        $dataArray = file_get_contents($this->file_name);
        $newArr = explode("\n", $dataArray);

        $dataArray = [];
        foreach ($newArr as $value)
        {
            $dataArray[] = explode(";", $value);
        }

        return $dataArray;
    }

    function write_file(array $data_array)
    {
        $csv = '';
        foreach ($data_array as $key) {

            foreach ($key as $value) {
                $csv .= "$value;";
            }
            $csv .= "\n";
        }
        file_put_contents($this->file_name, $csv);
    }
}
