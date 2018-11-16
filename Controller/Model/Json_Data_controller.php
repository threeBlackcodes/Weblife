<?php 

class json_controller_data
{
    private $data_path = "";
    public  $data_from_file;
    function __construct($data_path)
    {
        $data_path = $data_path;
        $content = file_get_contents($data_path);
        $data_from_file = json_decode($content);
    }
}


        ?>