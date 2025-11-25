<?php
/*
=========================
Day 4 — Loops & Iteration
=========================

Uncomment sections to try different loops.
*/

// Example 1: While loop
/*
$i = 1;
while($i <= 5){
    echo $i . "<br>";
    $i++;
}
*/

// Example 2: Do-While loop
/*
$i = 1;
do{
    echo $i . "<br>";
    $i++;
}while($i <= 5);
*/

// Example 3: For loop
/*
for($i=1; $i<=5; $i++){
    echo $i . "<br>";
}
*/

// Example 4: Break and Continue
/*
for($i=1;$i<=10;$i++){
    if($i == 5) break; // stops loop at 5
    echo $i . "<br>";
}

for($i=1;$i<=10;$i++){
    if($i % 2 != 0) continue; // skips odd numbers
    echo $i . "<br>";
}
*/

// Example 5: Nested loops (pyramid)
/*
$rows = 5;
for($i=1; $i<=$rows; $i++){
    for($j=1; $j<=$i; $j++){
        echo "* ";
    }
    echo "<br>";
}
*/
?>
