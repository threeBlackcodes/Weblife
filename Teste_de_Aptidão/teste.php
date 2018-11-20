<?php

    require 'db/Model.PHP';

    $Model = new Quiz_DB("weblife");
$result = $Model->DataExp("Select * From tb_perguntas ");
if($result == null) echo "error";
    while($row = mysqli_fetch_array($result)){
        echo utf8_encode ( $row["ds_perguntas"]."$".$row["ds_respostas"]."@");
    }
        // Qual sua cor favorita?$AMarelo,vermelho@
    
?>