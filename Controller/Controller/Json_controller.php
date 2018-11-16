<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
require "../model/json_Data_controller.php";
$operation =  $_GET["operation"];

if($operation == "Insert"){
          
}else{
    $data_con = new json_controller_data("../data/data.json");

    echo file_get_contents("../data/data.json");
}
?>