<?php
/*
====================
Day 5 — Indexed Arrays
====================

Uncomment sections to test arrays.
*/

// Example 1: Creating and accessing arrays
/*
$fruits = ["Apple", "Banana", "Orange"];
echo $fruits[0]; // Apple
echo "<br>";
echo $fruits[1]; // Banana
*/

// Example 2: Looping through an array
/*
$fruits = ["Apple", "Banana", "Orange"];
foreach($fruits as $fruit){
    echo $fruit . "<br>";
}
*/

// Example 3: Array functions
/*
$fruits = ["Apple", "Banana"];
array_push($fruits, "Orange"); // add to end
array_unshift($fruits, "Pineapple"); // add to start
array_pop($fruits); // remove last
array_shift($fruits); // remove first
print_r($fruits);
*/

// Example 4: Searching and sorting
/*
$fruits = ["Mango", "Apple", "Banana"];
echo in_array("Apple", $fruits) ? "Found" : "Not Found";
echo "<br>";
echo array_search("Banana", $fruits);
sort($fruits); // ascending
print_r($fruits);
rsort($fruits); // descending
print_r($fruits);
shuffle($fruits); // randomize
print_r($fruits);
*/
?>
