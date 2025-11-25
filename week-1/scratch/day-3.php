<?php
include '../common/header.php';

/**
 * PHP Day 3 Exercises
 * Note about loops: control loops with break and continue.
 * Avoid infinite loops by updating counters.
 * Make sure the direction of check aligns with counter updates.
 */

// Loops

// while loop: perform an action while a 
// condition is true.

//echo "<br>---<br>";
//echo "While loops<br>";
$counter = 1;
while ($counter <= 20) {
    $product = $counter * 2;
    //echo "$counter x 2 = " . $product . "<br>";
    $counter++;
}

/*
 condition = x 
 while ($counter <= 5) {
     // code to be executed
     echo $counter * 2;
     // update condition
 } 
 */

// do while loop: perform an action at least once,
// then repeat while a condition is true.

//echo "<br>---<br>";
//echo "Do while loops<br>";
$do_counter = 1;
do {
    $product = $do_counter * 2;
    //echo "$do_counter times 2 = " . $product . "<br>";
    $do_counter++;
} while ($do_counter <= 5);

// for loop: perform an action a set number of times.
//echo "<br>---<br>";
//echo "For loops<br>";
for ($i = 1; $i <= 10; $i++) {
    $product = $i * 3;
    //echo "$i multiplied by 3 = " . $product . "<br>";
}

// foreach loop
$colors = ["Red", "Green", "Blue", "Yellow"];
// echo "Colour: " . $colors[0] . "<br>";
// echo "Colour: " . $colors[1] . "<br>";
// echo "Colour: " . $colors[2] . "<br>";
// echo "Colour: " . $colors[3] . "<br>";

// for each item in $colors, named as $color, do something
foreach ($colors as $color) {
    //echo "Colour: $color<br>";
}

// echo "<br>---<br>";

// die();


// Sample CGPA Calculation for 5 students (from GPAs)
$studentResults = [
    [
        'name' => "Alice", 
        'dept' => "Computer Science", 
        'gpas' => [3.5, 3.7, 3.8, 4.0]
    ],
    [
        'name' => "Bob",
        'dept' => "Mathematics",
        'gpas' => [3.0, 3.2, 3.4, 3.6],
    ],
    [
        'name' => "Charlie", 
        'dept' => "Physics",
        'gpas' => [2.5, 2.7, 2.9, 3.1],
    ],
    [
        'name' => "Diana",
        'dept' => "Chemistry",
        'gpas' => [3.8, 3.9, 4.0, 3.7],
    ],
    [
        'name' => "Ethan", 
        'dept' => "Biology",
        'gpas' => [2.0, 2.13, 2.4, 2.6],
    ]
];

//print_r($studentResults[1]['gpas']);

//die();
/*
echo array_sum([1,2,3,4,5,6]);
echo "<br>";
echo count([1,2,3,4,5,6]);
echo "<br>";
echo array_sum([1,2,3,4,5,6]) / count([1,2,3,4,5,6]);
*/

// die();

// Calculate and display cgpa for each student
foreach ($studentResults as $student) {
    $name = $student['name'];
    $dept = $student['dept'];
    $gpas = $student['gpas'];

    $total = array_sum($gpas);
    $totalItems = count($gpas);

    $cgpa = $total / $totalItems;

    $cgpa = number_format($cgpa, 2);
    echo "Name: $name, Department: $dept, CGPA: $cgpa<br>";
}
