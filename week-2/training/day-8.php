<?php
// ========================
// Day 8: Forms & User Input
// ========================

// ------------------------
// 1. HTML Form Example (GET)
// ------------------------
/*
<form method="get" action="">
    Name: <input type="text" name="name"><br>
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_GET['name'])){
    echo "Hello, " . htmlspecialchars($_GET['name']);
}
?>
*/

// ------------------------
// 2. HTML Form Example (POST)
// ------------------------
/*
<form method="post" action="">
    Email: <input type="email" name="email"><br>
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['email'])){
    echo "Your email: " . htmlspecialchars($_POST['email']);
}
?>
*/

// ------------------------
// 3. Form Validation Example
// ------------------------
/*
$name = $email = "";
$nameErr = $emailErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $nameErr = "Name is required";
    }else{
        $name = htmlspecialchars($_POST["name"]);
    }
    
    if(empty($_POST["email"])){
        $emailErr = "Email is required";
    }else{
        $email = htmlspecialchars($_POST["email"]);
    }
}
echo $nameErr . "<br>";
echo $emailErr . "<br>";
echo "Name: $name <br> Email: $email <br>";
*/
?>
