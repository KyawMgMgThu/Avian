<?php

class Birds
{
    public function connect()
    {
        $json_file = 'Birds.json';

        $json_data = file_get_contents($json_file);

        $data = json_decode($json_data, true);

        return $data;
    }

    public function bird()
    {
        $data = $this->connect();

        $bird = $data['Tbl_Bird'];

        return $bird;
    }
}

$birds = new Birds();
