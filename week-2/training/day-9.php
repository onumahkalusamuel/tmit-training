<?php
// ========================
// Day 9: File Handling
// ========================

// ------------------------
// 1. file_put_contents & file_get_contents
// ------------------------
/*
file_put_contents("example.txt", "Hello World\n");
file_put_contents("example.txt", "Hello Again\n", FILE_APPEND);
echo file_get_contents("example.txt");
*/

// ------------------------
// 2. fopen, fread, fwrite Example
// ------------------------
/*
$handle = fopen("example.txt", "r");
echo fread($handle, filesize("example.txt"));
fclose($handle);

$handle = fopen("example.txt", "a");
fwrite($handle, "Appending this line\n");
fclose($handle);
*/

// ------------------------
// 3. File Operations
// ------------------------
/*
copy("example.txt", "copy_example.txt");
rename("copy_example.txt", "renamed_example.txt");
unlink("renamed_example.txt");
*/

// ------------------------
// 4. CSV Example
// ------------------------
/*
$data = [
    ["Name", "Age", "Email"],
    ["Ali", 20, "ali@example.com"],
    ["Mary", 22, "mary@example.com"]
];
$fp = fopen('students.csv', 'w');
foreach($data as $row){
    fputcsv($fp, $row);
}
fclose($fp);

// Read CSV
if(($handle = fopen("students.csv", "r")) !== false){
    while(($row = fgetcsv($handle, 1000, ",")) !== false){
        print_r($row);
        echo "<br>";
    }
    fclose($handle);
}
*/

// ------------------------
// 5. JSON Example
// ------------------------
/*
$students = [
    ["name" => "Ali", "age" => 20],
    ["name" => "Mary", "age" => 22]
];
file_put_contents("students.json", json_encode($students));

$jsonData = file_get_contents("students.json");
$studentsArray = json_decode($jsonData, true);
print_r($studentsArray);
*/
?>
