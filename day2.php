<?php error_reporting(E_ALL);?>
<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        /* dark mode */
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }
    </style>
<?php
$str1 = "Hello, ";
$str2 = "woRld!";
$num1 = 10;
$num2 = 20;
$float1 = 5.5;
$float2 = 2.3;
$bool1 = true;
$bool2 = false;

// String operations
$concat = $str1 . $str2;
$length = strlen($str1);
$substring = substr($str2, 1, 5);
$uppercase = strtoupper($str1);
$lowercase = strtolower($str2);

// Numeric operations
$sum = $num1 + $num2;
$difference = $num2 - $num1;
$product = $num1 * $num2;
$quotient = $num2 / $num1;
$modulus = $num2 % $num1;
$power = pow($num1, 2);
$sqrt = sqrt($num2);
$float_sum = $float1 + $float2;
$float_diff = $float1 - $float2;
$float_product = $float1 * $float2;
$float_quotient = $float1 / $float2;

// Assignment operations
$assign = $num1;
$assign += 5;
$assign = $assign + 5;

$assign -= 3;
$assign = $assign - 3;

$assign *= 2;
$assign = $assign * 2;

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
// echo "<br>";
$identical = ($num1 === $num2);
// echo (int) $identical;
// echo "<br>---<br>";
$not_equal = ($num1 != $num2);
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
$fruits = ["Apple", "Banana", "Cherry"];
echo $first_fruit = $fruits[0];
$fruits[] = "Date";
array_push($fruits, "Elderberry");
array_pop($fruits);
array_shift($fruits);
array_unshift($fruits, "Fig");
$fruit_count = count($fruits);
$fruit_keys = array_keys($fruits);
$fruit_values = array_values($fruits);
$fruit_exists = in_array("Banana", $fruits);
$fruit_string = implode(", ", $fruits);
$fruits_from_string = explode(", ", $fruit_string);

die();

// intro to loop. Only foreach loop
$colors = ["Red", "Green", "Blue", "Yellow"];
foreach ($colors as $color) {
    echo "Color: $color\n";
}
echo "<br>---<br>";

// die();

// Sample CGPA Calculation for 5 students (from GPAs)
$studentNamesAndDepts = [
    ["Alice", "Computer Science"],
    ["Bob", "Mathematics"],
    ["Charlie", "Physics"],
    ["Diana", "Chemistry"],
    ["Ethan", "Biology"]
];

$grades = [
    [3.5, 3.7, 3.8, 4.0],
    [3.0, 3.2, 3.4, 3.6],
    [2.5, 2.7, 2.9, 3.1],  
    [3.8, 3.9, 4.0, 3.7],
    [2.0, 2.2, 2.4, 2.6]
];

$cgpas = [];
foreach ($grades as $student_grades) {
    $total = array_sum($student_grades);
    $cgpa = $total / count($student_grades);
    $cgpas[] = $cgpa;
}

// Display cgpa for each student
foreach ($studentNamesAndDepts as $index => $student) {
    $name = $student[0];
    $dept = $student[1];
    $cgpa = number_format($cgpas[$index], 2);
    echo "Name: $name, Department: $dept, CGPA: $cgpa\n";
}
?>
