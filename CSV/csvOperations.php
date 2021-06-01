<?php

$list = array(
    array("Pete", "stan", "Moscow"),
    array("Glenn", "King", "Man")
);

$file = fopen("contacts.csv", "w");


/**
 * The fputcsv() function formats a line as CSV
 *  and writes it to an open file.
 */
foreach($list as $l){
    fputcsv($file, $l);
}

fclose($file);

$file1 = fopen("contacts.csv", "r");
print_r(fgetcsv($file1));//to get single line contents of the csv file

fclose($file1);

$file2 = fopen("contacts.csv", "r");

/**
 * The feof() function checks if the "end-of-file" (EOF) 
 * has been reached for an open file.
 * This function is useful for looping through data of unknown length.
 */
while(!feof($file2)){
    print_r(fgetcsv($file2));
}

fclose($file2);

?>