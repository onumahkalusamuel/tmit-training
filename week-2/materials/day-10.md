# **Day 10 — Full Instructional Manual**

## **Topic: MySQL + PHP Integration & CRUD Operations**

### **Objective:**

By the end of this lesson, students should be able to:

* Understand the basics of relational databases
* Create databases and tables using phpMyAdmin
* Use SQL commands (`SELECT`, `INSERT`, `UPDATE`, `DELETE`)
* Connect PHP to MySQL using MySQLi
* Fetch and display database records in HTML
* Implement CRUD operations with forms and PHP
* Start building a student registration system

---

# **1. Introduction to Databases**

### **Definition:**

A **database** is a structured collection of data stored on a server for easy access, management, and manipulation.

> Think of it like an **organized digital filing cabinet**.

### **Why Databases?**

* Store data persistently
* Retrieve, update, and manage large datasets efficiently
* Support multiple users concurrently

---

# **2. Relational Databases**

* Data is organized in **tables** (rows & columns)
* **Rows** = individual records
* **Columns** = fields or attributes (name, email, age)
* Tables can relate to each other using **primary keys** and **foreign keys**

### **Example Table: `students`**

| id | name | age | email                                       |
| -- | ---- | --- | ------------------------------------------- |
| 1  | Ali  | 20  | [ali@example.com](mailto:ali@example.com)   |
| 2  | Mary | 22  | [mary@example.com](mailto:mary@example.com) |

---

# **3. Using phpMyAdmin**

* phpMyAdmin is a web-based tool to manage MySQL databases.

### **Step A — Create Database**

1. Open phpMyAdmin via `http://localhost/phpmyadmin`
2. Click **New** → enter `training_db` as database name → **Create**

### **Step B — Create Table**

1. Inside `training_db`, click **Create Table**
2. Name: `students`
3. Columns:

   * `id` INT AUTO_INCREMENT PRIMARY KEY
   * `name` VARCHAR(50)
   * `age` INT
   * `email` VARCHAR(100)

---

# **4. SQL Commands**

### **1. SELECT — Retrieve Data**

```sql
SELECT * FROM students;
SELECT name, email FROM students WHERE age > 20;
```

### **2. INSERT — Add Data**

```sql
INSERT INTO students (name, age, email) VALUES ('Ali', 20, 'ali@example.com');
```

### **3. UPDATE — Modify Data**

```sql
UPDATE students SET age = 21 WHERE name = 'Ali';
```

### **4. DELETE — Remove Data**

```sql
DELETE FROM students WHERE name = 'Mary';
```

---

# **5. Connecting PHP to MySQL (MySQLi)**

### **Step A — Create Connection**

```php
<?php
$conn = mysqli_connect("localhost", "root", "", "training_db");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
```

> `localhost` = server, `root` = username, `""` = password, `training_db` = database name

---

### **Step B — Execute Queries**

```php
// Select data
$result = mysqli_query($conn, "SELECT * FROM students");

while ($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row['name'] . ", Email: " . $row['email'] . "<br>";
}

// Insert data
mysqli_query($conn, "INSERT INTO students (name, age, email) VALUES ('Mary', 22, 'mary@example.com')");
```

---

# **6. Display Data in HTML Table**

```php
<?php
$result = mysqli_query($conn, "SELECT * FROM students");

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Email</th></tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            <td>{$row['email']}</td>
          </tr>";
}
echo "</table>";
?>
```

---

# **7. CRUD Operations with PHP Forms**

### **1. CREATE — Add Student Form**

```php
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
```

### **2. READ — Display All Students**

* Use the HTML table example above

### **3. UPDATE — Edit Student**

* Fetch existing student data
* Use a form to update fields
* Run an `UPDATE` SQL query on submit

### **4. DELETE — Remove Student**

```php
<a href="delete.php?id=1">Delete</a>
```

```php
<?php
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM students WHERE id=$id");
?>
```

---

# **8. Practical Exercises — Morning & Afternoon Sessions**

1. **Create Database & Table:**

   * Database: `training_db`
   * Table: `students` with 4 columns

2. **Insert 5 Student Records:**

   * Use phpMyAdmin and PHP scripts

3. **Display Students in Table:**

   * Show all students in an HTML table

4. **Filter & Search:**

   * Filter students by age
   * Search by name

5. **Add/Edit/Delete Records:**

   * Implement forms to create, update, and delete student records

---

# **9. Homework Assignments**

1. Complete CRUD system for students
2. Add input validation (no empty names or invalid emails)
3. Apply basic CSS to display tables nicely

---

# **10. Mini Project — Day 10**

**Objective:** Build a **Student Registration System**

* Form submission for adding students
* List all students in an HTML table
* Edit and delete functionality
* Input validation
* Optional: preserve user input if validation fails

**File Names:** `add_student.php`, `list_students.php`, `edit_student.php`, `delete_student.php`

---

# **11. Self-Check Questions**

1. What is a relational database?
2. Name the four main SQL commands for CRUD.
3. How do you connect PHP to MySQL using MySQLi?
4. Which PHP function fetches rows as an associative array?
5. How can you display MySQL data in an HTML table?

**Answers:**

1. A database where data is organized in tables with rows and columns.
2. `SELECT`, `INSERT`, `UPDATE`, `DELETE`
3. `mysqli_connect("localhost", "root", "", "database_name")`
4. `mysqli_fetch_assoc()`
5. Loop through `mysqli_fetch_assoc()` results and echo `<tr><td>...</td></tr>`

---

# **12. Summary / Key Points (Ready-to-print)**

* MySQL stores data in tables, PHP interacts via MySQLi
* CRUD = Create, Read, Update, Delete
* Use forms to add or update data
* Always validate user input before saving
* Display data in HTML tables
* Practice: student registration system with full CRUD
