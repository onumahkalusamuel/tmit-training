<?php
include '../common/header.php';

$str1 = "Hello, ";
$str2 = "woRld!";
$num1 = 10;
$num2 = 20;
$float1 = 5.5;
$float2 = 2.3;
$bool1 = true;
$bool2 = false;

// echo $num1;
// String operations
$concat = $str1 . $str2 . $num1 . $num2;
// echo $concat;
// echo $num1 . $num2;

// string functions
$length = strlen($str1);
$substring = substr($str2, 3, 2);
$uppercase = strtoupper($str1);
$lowercase = strtolower($str2);

/*


"woRld!"

w => 0
o => 1
R => 2
l => 3
d => 4
! => 5


*/

// die();

// Numeric/Arithmetic operations
$sum = $num1 + $num2;
$difference = $num2 - $num1;
$product = $num1 * $num2;
$quotient = $num2 / $num1;
$modulus = $num2 % $num1;
$power = pow($num1, 4);
$sqrt = sqrt(81);
$float_sum = $float1 + $float2;
$float_diff = $float1 - $float2;
$float_product = $float1 * $float2;
$float_quotient = $float1 / $float2;

// Assignment operations
$assign = $num1; // 10
$assign += 5; // 15
$assign = $assign + 5; // 20

$assign -= 3; // 17
$assign = $assign - 3; // 14

$assign *= 2; // 28
$assign = $assign * 2; // 56

$assign /= 4;
$assign = $assign / 2;

$assign %= 3;
$assign = $assign % 3;

// increment and decrement
$increment = $num1;
// echo "<br>";
$increment++;
// echo "<br>";
$increment;
$decrement = $num2;
$decrement--;

// die();

// Boolean operations
$and = $bool1 && $bool2;
// echo (int) $and;
// echo "<br>";
$or = $bool1 || $bool2;
// echo (int) $or;
// echo "<br>---<br>";
$not = !$bool1;
// echo (int) $not;
// echo "<br>";
$xor = $bool1 xor $bool2;
// echo (int) $xor;
// echo "<br>---<br>";
$equal = ($num1 == $num2);
// echo (int) $equal;

// echo '6' == 6; // true
// echo "<br>";
$identical = ($num1 === $num2);
// echo (int) $identical;
// var_dump('6' === 6); // false
// echo "<br>---<br>";
$not_equal = ($num1 != $num2);
// var_dump($not_equal);
// echo (int) $not_equal;
// echo "<br>";
$not_identical = ($num1 !== $num2);
// echo (int) $not_identical;
// echo "<br>---<br>";
$greater_than = ($num2 > $num1);
// echo (int) $greater_than;
// echo "<br>";
$less_than = ($num1 < $num2);
// echo (int) $less_than;
// echo "<br>---<br>";
$greater_equal = ($num2 >= $num1);
// echo (int) $greater_equal;
// echo "<br>";
$less_equal = ($num1 <= $num2);
// echo (int) $less_equal;
// echo "<br>---<br>";

// die();

// Arrays
$fruits = ["Apple", "Banana"];
$first_fruit = $fruits[0];
// print_r($fruits);
// echo "<br>";
/*
on this array ($fruits)
in the position of the next item ([])
add this new value (= "Date")
*/
$fruits[] = "Date";
// print_r($fruits);
// echo "<br>";

array_push($fruits, "Elderberry");
// print_r($fruits);
// echo "<br>";
array_pop($fruits);
// print_r($fruits);
// echo "<br>";
array_shift($fruits);
// print_r($fruits);
// echo "<br>";
array_unshift($fruits, "Fig");
// print_r($fruits);
// echo "<br>";
$fruit_count = count($fruits);
$fruit_keys = array_keys($fruits);
$fruit_values = array_values($fruits);
$fruit_exists = in_array("Banana", $fruits);
$fruit_string = implode("; ", $fruits);
// $plain_string = $fruits[0] . "; " . $fruits[1] 
//                 . "; " . $fruits[2] . "; " . $fruits[3];
$fruits_from_string = explode("; ", $fruit_string);

// array_chunk($fruits, 2);

// print_r($fruits);
// echo "<br>";
// var_dump($fruit_string);
// echo "<br>";
// print_r($fruits_from_string);

$assoc_array =  [
    "age" => 25,
    "city" => "New York",
    "name" => "John Doe",
];

// $assoc_array['city'];

$simple_array = [
    25,
    "John Doe",
    "New York"
];

$simple_array[1];

$assoc_keys = array_keys($assoc_array);
$simple_keys = array_keys($simple_array);

// print_r($assoc_keys);
// echo "<br>";
// print_r($simple_keys);
// echo "<br>---<br>";

$assoc_values = array_values($assoc_array);
$simple_values = array_values($simple_array);

// print_r($assoc_values);
// echo "<br>";
// print_r($simple_values);
// echo "<br>---<br>";

// die();

// array dimensions
$singleDimensionalArray = [1, 2, 3, 4, 5];
// echo $singleDimensionalArray[0];

$twoDimensionalArray = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// echo $twoDimensionalArray[1][1];

$threeDimensionalArray = [
    [
        [1, 2],
        [3, 4]
    ],
    [
        [5, 6],
        [7, 8]
    ]
];

// echo $threeDimensionalArray[0][1][1];

// echo "<pre>";
// print_r($threeDimensionalArray[1]);
