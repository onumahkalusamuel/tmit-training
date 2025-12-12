<?php
$host = "127.0.0.1"; // 127.0.0.1
$user = "root";
$pass = "";
$dbname = "tmit_training_attendance";

$dbcon;

try {
    // code that is prone to exceptions
} catch (Exception $e) {
    $e->getMessage();
    // code
    // log the error for debugging
    // return a nice error to the user
}


// try {
//     $dbcon = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
//     $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
//     exit();
// }

//mysqli_connect
$dbcon = mysqli_connect($host, $user, $pass, $dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
