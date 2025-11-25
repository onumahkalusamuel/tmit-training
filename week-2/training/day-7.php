<?php
// ========================
// Day 7: Functions
// ========================

// ------------------------
// 1. Basic Function Example
// ------------------------
/*
function greet(){
    echo "Hello Student<br>";
}
greet();
*/

// ------------------------
// 2. Function with Parameters & Return
// ------------------------
/*
function add($a, $b){
    return $a + $b;
}
echo "Sum: " . add(10, 5) . "<br>";
*/

// ------------------------
// 3. Default Parameters
// ------------------------
/*
function welcome($name = "Guest"){
    echo "Welcome, $name<br>";
}
welcome();
welcome("Ali");
*/

// ------------------------
// 4. Type Declarations & Multiple Return Values
// ------------------------
/*
function calculate(int $a, int $b): array {
    return ["sum" => $a + $b, "diff" => $a - $b];
}
$result = calculate(10, 5);
echo "Sum: " . $result['sum'] . ", Diff: " . $result['diff'] . "<br>";
*/

// ------------------------
// 5. Practical Exercises
// ------------------------
/*
function greetUser($name){
    echo "Hello, $name<br>";
}

function areaCircle($radius){
    return 3.14 * $radius * $radius;
}

function celsiusToFahrenheit($c){
    return ($c * 9/5) + 32;
}
*/

// ------------------------
// 6. Homework & Mini Project
// ------------------------
/*
// 1. Library of 10 reusable functions
// 2. Calculator using functions
// 3. String manipulation toolkit
*/
?>
