<?php 
/**
 * Storing integer elements into an Indexed Array
 */
$a = array(10, 20, 30);
echo "Printing array using index";
echo $a[0]. "\n";
/**
 * Storing multiple datatypes into an Indexed Array
 */
$colors = array("Red", 10, "Blue", 12.5);

/**
 * Using foreach loop to print the elements of array
 */
foreach($colors as $col){
    echo $col. " ";
}

//this function prints index and the value
print_r($colors);

/**
 * creating an empty array
 */
 $emptyArray = array();

 array_push($emptyArray, 10, "HI", 11, "Hello", 12.5);

 foreach($emptyArray as $empty){
     echo $empty. "\n";
 }

?>