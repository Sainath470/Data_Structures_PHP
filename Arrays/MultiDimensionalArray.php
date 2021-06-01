<?php

$emp = [
    [1, "Krishna", "Manager", 50000],
    [2, "Salman", "Salesman", 20000],
    [3, "Mohan", "Computer Operator", 12000]
];


for($row = 0; $row < 3; $row++){
    for($col =0; $col < 3; $col++){
        echo $emp[$row][$col]. " ";
    }
    echo "\n";
}

foreach($emp as $value1){
    foreach($value1 as $value2){
        echo $value2. " ";
    }
    echo "\n";
}

foreach($emp as list($id, $name, $des, $sal)){
    echo "$id $name $des $sal\n";
}
?>