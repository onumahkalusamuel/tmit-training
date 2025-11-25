<?php
/*
====================================
Day 3 — Control Structures (If/Else)
====================================

Uncomment sections to test conditions.
*/

// Example 1: If statement
/*
$score = 65;
if($score > 50){
    echo "Passed";
}
*/

// Example 2: If-Else
/*
$age = 17;
if($age >= 18){
    echo "Adult";
}else{
    echo "Minor";
}
*/

// Example 3: If-ElseIf-Else
/*
$score = 78;
if($score >= 80){
    echo "Grade A";
}elseif($score >= 60){
    echo "Grade B";
}elseif($score >= 50){
    echo "Grade C";
}else{
    echo "Grade F";
}
*/

// Example 4: Nested If
/*
$age = 20;
$hasID = true;
if($age >= 18){
    if($hasID){
        echo "Access granted";
    }else{
        echo "Show ID";
    }
}else{
    echo "Access denied";
}
*/

// Example 5: Ternary Operator
/*
$age = 16;
echo ($age >= 18) ? "Adult" : "Minor";
*/

// Example 6: Switch statement
/*
$day = 3;
switch($day){
    case 1: echo "Monday"; break;
    case 2: echo "Tuesday"; break;
    case 3: echo "Wednesday"; break;
    default: echo "Invalid day";
}
*/
?>
