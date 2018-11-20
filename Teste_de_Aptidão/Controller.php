<?php
require 'DB/Model.php'


class Controller{
         public function RequireData($){
            $Data = $_GET['type'] or null;


            if($Data == null){
               die("Data vaiza!")
            }
            $QModel = new Model();
         }
}


?>