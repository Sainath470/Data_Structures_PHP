<?php

$persons = array(
    "Bill" => "Boy",
    "Joe"  => 20,
    "Peter"=> 30
);

var_dump($persons);

echo $persons["Bill"]. "\n";
print_r($persons);

foreach($persons as $key => $value){
    echo $key . "=>" . $value . "\n";
}

?>