# **Day 9 — Full Instructional Manual**

## **Topic: File Handling in PHP**

### **Objective:**

By the end of this lesson, students should be able to:

* Understand why file handling is important
* Read and write files using PHP
* Use different functions to manipulate files (`fopen`, `fread`, `fwrite`, `file_get_contents`, `file_put_contents`)
* Perform common file operations (delete, copy, rename)
* Work with CSV and JSON files
* Apply file handling in practical exercises like loggers, guestbooks, and inventory systems

---

# **1. Introduction to File Handling**

### **Definition:**

File handling is the ability to **read, write, and manipulate files on the server** using PHP.

> Think of it as **storing data without using a database**.

### **Why File Handling is Useful**

* Save user-submitted data (form submissions, messages)
* Store application logs
* Manage small data sets or configuration files
* Work offline without a database

---

# **2. Reading & Writing Files (Simple)**

### **`file_get_contents()` and `file_put_contents()`**

```php
// Writing to a file
file_put_contents("example.txt", "Hello World");

// Reading from a file
$content = file_get_contents("example.txt");
echo $content; // Hello World
```

> `file_put_contents` will **overwrite** the file if it already exists. Use `FILE_APPEND` to add instead of overwriting.

```php
file_put_contents("example.txt", "Hello Again\n", FILE_APPEND);
```

---

# **3. Advanced File Handling with fopen, fread, fwrite**

### **Opening Files**

```php
$handle = fopen("example.txt", "r"); // r = read, w = write, a = append
```

### **Reading Files**

```php
$content = fread($handle, filesize("example.txt"));
fclose($handle);
echo $content;
```

### **Writing Files**

```php
$handle = fopen("example.txt", "a"); // a = append
fwrite($handle, "Appending this line\n");
fclose($handle);
```

---

# **4. File Operations**

### **Delete a File**

```php
unlink("example.txt"); // Removes the file
```

### **Copy a File**

```php
copy("example.txt", "copy_example.txt");
```

### **Rename a File**

```php
rename("example.txt", "renamed_example.txt");
```

---

# **5. Practical Exercises — Morning Session**

### **Exercise 1 — Create a Text File**

* Use `file_put_contents()` to create `notes.txt`
* Write a short message inside it

### **Exercise 2 — Read & Display File Contents**

* Read `notes.txt` using `file_get_contents()`
* Display contents in a browser

### **Exercise 3 — Append Data**

* Add multiple lines to the file using `FILE_APPEND`

### **Exercise 4 — Line-by-Line Reading**

* Use `fopen()` and `fgets()` to read each line of a file
* Display lines individually

---

# **6. CSV & JSON Handling — Afternoon Session**

### **Working with CSV**

* CSV = Comma Separated Values, useful for tables

```php
// Sample array
$data = [
    ["Name", "Age", "Email"],
    ["Ali", 20, "ali@example.com"],
    ["Mary", 22, "mary@example.com"]
];

// Write to CSV
$fp = fopen('students.csv', 'w');
foreach ($data as $row) {
    fputcsv($fp, $row);
}
fclose($fp);
```

* Reading CSV:

```php
$rows = [];
if (($handle = fopen("students.csv", "r")) !== false) {
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        $rows[] = $data;
    }
    fclose($handle);
}
print_r($rows);
```

---

### **Working with JSON**

* JSON = JavaScript Object Notation, great for structured data

```php
// Encode array as JSON and save
$students = [
    ["name" => "Ali", "age" => 20],
    ["name" => "Mary", "age" => 22]
];
file_put_contents("students.json", json_encode($students));

// Read JSON and decode
$jsonData = file_get_contents("students.json");
$studentsArray = json_decode($jsonData, true);
print_r($studentsArray);
```

> JSON is useful for exchanging data with JavaScript or APIs.

---

# **7. Practical Exercises — Afternoon Session**

1. **Save Form Data to a File:**

   * Create a simple feedback form
   * Save submissions to `feedback.txt` or `feedback.csv`

2. **Logger:**

   * Append every visit or submission to `log.txt` with date and time

3. **Display CSV Data:**

   * Read a CSV file of products or students
   * Display as an HTML table

4. **JSON Storage:**

   * Store an array of items or students in JSON
   * Read and display in a readable format

---

# **8. Homework Assignments**

1. **Guestbook:**

* Users can submit name and comment
* Save entries to a text file
* Display all previous entries

2. **File-Based Notes App:**

* Add new notes to a file
* List existing notes
* Allow deleting or editing notes (optional)

3. **Log Analyzer:**

* Read `log.txt`
* Count total visits, display entries per day

---

# **9. Mini Project — Day 9**

**Objective:** Build a **Mini File-Based Student Management System**

* Store student data in CSV or JSON
* Add new students through a form
* Display student list in a table
* Optional: allow deleting students by index

**File Names:** `students_form.php`, `students.csv`, `students.json`

---

# **10. Self-Check Questions**

1. What is the difference between `file_get_contents()` and `fopen()`?
2. How do you append data to an existing file?
3. Which function deletes a file?
4. How can you write an array to a CSV file?
5. How do you convert JSON data back into a PHP array?

**Answers:**

1. `file_get_contents()` reads the entire file at once; `fopen()` allows more control with reading/writing line by line.
2. Use `file_put_contents("file.txt", "data", FILE_APPEND)` or `fwrite()` with `"a"` mode.
3. `unlink("filename")`
4. Use `fputcsv()` inside a loop.
5. `json_decode($jsonString, true)`

---

# **11. Summary / Key Points (Ready-to-print)**

* File handling allows reading, writing, and manipulating files in PHP
* Use `file_get_contents()` / `file_put_contents()` for simple operations
* Use `fopen()` / `fread()` / `fwrite()` for more control
* Common file operations: delete (`unlink()`), copy (`copy()`), rename (`rename()`)
* CSV files store tabular data; use `fgetcsv()` and `fputcsv()`
* JSON files store structured data; use `json_encode()` and `json_decode()`
* Practice: feedback forms, guestbooks, loggers, CSV/JSON displays