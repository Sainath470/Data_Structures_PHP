<?php

$marks = array(
    "Krishna" => array("physics" => 43, "Maths" => 40),
    "Sai" => array("physics" => 48, "Maths" => 40),
    "Malik" => array("physics" => 53, "Maths" => 60)
);

foreach($marks as $key => $val1){
    echo $key . " "  ;
    foreach($val1 as $key2 => $val2){
        echo $key2 . "=>" . $val2 . " ";
    }
    echo "\n";
};

?>