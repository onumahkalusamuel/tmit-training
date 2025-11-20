<?php
$str1 = "Hello, ";
$str2 = "world!";
$num1 = 10;
$num2 = 20;
$float1 = 5.5;
$float2 = 2.3;
$bool1 = true;
$bool2 = false;

// String operations
$concat = $str1 . $str2;
$length = strlen($str1);
$substring = substr($str2, 0, 5);
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
$assign -= 3;
$assign *= 2;
$assign /= 4;
$assign %= 3;

// increment and decrement
$increment = $num1;
$increment++;
$decrement = $num2;
$decrement--;


// Boolean operations
$and = $bool1 && $bool2;
$or = $bool1 || $bool2;
$not = !$bool1;
$xor = $bool1 xor $bool2;
$equal = ($num1 == $num2);
$identical = ($num1 === $num2);
$not_equal = ($num1 != $num2);
$not_identical = ($num1 !== $num2);
$greater_than = ($num2 > $num1);
$less_than = ($num1 < $num2);
$greater_equal = ($num2 >= $num1);
$less_equal = ($num1 <= $num2);

// Arrays
$fruits = ["Apple", "Banana", "Cherry"];
$first_fruit = $fruits[0];
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
