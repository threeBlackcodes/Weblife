<?php


class Quiz_DB{



    private static $Server = "localhost";
    private static $Username = "root";
    private static $Password = "";
    private static $Con;

    private $Conection;
    function __construct($db) {
        self::$Con = new mysqli(self::$Server,self::$Username,self::$Password,$db);

    }


    public function Connect(){
        self::$Server = "";
        

        return $Con;
    }
    public function DataExp($My_Exp){
       $query =  mysqli_query(self::$Con,$My_Exp);
        return $query;
    }
}

?>