<?php
// ========================
// Day 10: MySQL + PHP Integration & CRUD
// ========================

// ------------------------
// 1. Connect to MySQL
// ------------------------
/*
$conn = mysqli_connect("localhost", "root", "", "training_db");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
*/

// ------------------------
// 2. SELECT Query Example
// ------------------------
/*
$result = mysqli_query($conn, "SELECT * FROM students");
while($row = mysqli_fetch_assoc($result)){
    echo "Name: " . $row['name'] . ", Email: " . $row['email'] . "<br>";
}
*/

// ------------------------
// 3. INSERT Example
// ------------------------
/*
mysqli_query($conn, "INSERT INTO students (name, age, email) VALUES ('Ali', 20, 'ali@example.com')");
*/

// ------------------------
// 4. UPDATE Example
// ------------------------
/*
mysqli_query($conn, "UPDATE students SET age=21 WHERE name='Ali'");
*/

// ------------------------
// 5. DELETE Example
// ------------------------
/*
mysqli_query($conn, "DELETE FROM students WHERE name='Mary'");
*/

// ------------------------
// 6. Display Data in HTML Table
// ------------------------
/*
$result = mysqli_query($conn, "SELECT * FROM students");
echo "<table border='1'>
<tr><th>ID</th><th>Name</th><th>Age</th><th>Email</th></tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['name']}</td>
    <td>{$row['age']}</td>
    <td>{$row['email']}</td>
    </tr>";
}
echo "</table>";
*/

// ------------------------
// 7. Form Example: Add Student
// ------------------------
/*
<form method="post" action="">
Name: <input type="text" name="name"><br>
Age: <input type="number" name="age"><br>
Email: <input type="email" name="email"><br>
<input type="submit" name="submit" value="Add Student">
</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    mysqli_query($conn, "INSERT INTO students (name, age, email) VALUES ('$name', $age, '$email')");
}
?>
*/
?>
