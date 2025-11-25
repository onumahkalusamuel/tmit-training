<?php
// ========================
// Day 6: Associative & Multidimensional Arrays
// ========================

// ------------------------
// 1. Associative Arrays Example
// ------------------------
/*
$student = [
    "name" => "John Doe",
    "age" => 20,
    "email" => "john@example.com"
];

// Access elements
echo "Email: " . $student["email"] . "<br>";

// Loop through associative array
foreach($student as $key => $value){
    echo "$key: $value<br>";
}

// Array keys and values
print_r(array_keys($student));
print_r(array_values($student));
*/

// ------------------------
// 2. Practical Exercise: Student Record
// ------------------------
/*
$student = [
    "name" => "Mary Jane",
    "age" => 22,
    "email" => "mary@example.com",
    "course" => "Computer Science"
];
foreach($student as $key => $value){
    echo "$key: $value<br>";
}
*/

// ------------------------
// 3. Multidimensional Arrays Example
// ------------------------
/*
$students = [
    ["name" => "John", "age" => 20],
    ["name" => "Mary", "age" => 22],
    ["name" => "Ali", "age" => 21]
];

foreach($students as $student){
    foreach($student as $key => $value){
        echo "$key: $value<br>";
    }
    echo "<hr>";
}
*/

// ------------------------
// 4. Mini-Exercise: Class Roster
// ------------------------
/*
$classRoster = [
    ["name" => "Alice", "math" => 80, "english" => 75],
    ["name" => "Bob", "math" => 90, "english" => 85]
];
foreach($classRoster as $student){
    echo "Student: " . $student['name'] . "<br>";
    echo "Math: " . $student['math'] . "<br>";
    echo "English: " . $student['english'] . "<br><hr>";
}
*/

// ------------------------
// 5. Homework Examples
// ------------------------
/*
// 1. Create a student database with 5 students
// 2. Create a menu system with categories
// 3. Create a phonebook array and implement search functionality
*/
?>
