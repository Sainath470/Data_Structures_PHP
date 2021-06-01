<?php 

$fruits = ["apple", "banana", "orange"];

/**
 * shift function will target the first entry and delete's it
 */
array_shift($fruits);
print_r($fruits);

$fruits2 = ["apple", "mango", "pinapple"];

/**
 * adds the element before first index
 */
array_unshift($fruits2, "banana");
print_r($fruits2);


$a = array(10, 20, 30, 40);

/**
 * delete's the last element of array
 */
array_pop($a);
print_r($a);

$b = array("a", "b", "c", "d");

/**
 * adds element at the end of the array
 */
array_push($b, "z", "hello");
print_r($b);

$firstArray = array("venkata", "sai", "nath");

$secondArray = array("Hello", "hi");

/**
 * used to merge two or more arrays and returns new array
 */
$newArray = array_merge($firstArray, $secondArray);

print_r($newArray);
?>