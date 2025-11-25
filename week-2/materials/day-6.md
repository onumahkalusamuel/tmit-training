# **Day 6 — Full Instructional Manual**

**Core PHP Skills — Associative Arrays & Multidimensional Arrays**
Full explanations, definitions, step-by-step procedures, examples, checks, exercises and answers so a student can learn without an instructor.

---

## **Learning objectives (what the student will be able to do after Day 6)**

* Explain what associative arrays are and when to use them.
* Create, access, and modify associative arrays in PHP.
* Loop through associative arrays using `foreach`.
* Use `array_keys()` and `array_values()` functions.
* Understand multidimensional arrays and their structure.
* Loop through multidimensional arrays using nested `foreach`.
* Build practical examples like student records, product catalogs, and mini-gradebooks.

---

## **Prerequisites / Materials**

* A Windows PC (instructions use Windows paths; Linux/macOS paths may differ).
* PHP development environment set up (Laragon, XAMPP, or similar).
* VS Code installed with PHP Intelephense extension.
* Browser (Chrome recommended).
* Files/folders from Week 1 exercises (optional but helpful).

---

# **1. Associative Arrays (Key-Value Pairs)**

### **Plain Definition**

Associative arrays are PHP arrays that use **named keys** instead of numeric indexes. Each key is a string (or number) that maps to a value.

Example:

```php
$student = [
    "name" => "John Doe",
    "age" => 20,
    "email" => "john@example.com"
];
```

---

### **Key Concepts**

* **Key**: a string identifier for an array element (`"name"`, `"age"`, `"email"`).
* **Value**: the data stored (`"John Doe"`, `20`, `"john@example.com"`).
* **Use Case**: structured data storage, e.g., student records, configuration settings.

---

### **Accessing Elements**

To access a value, use its key:

```php
echo $student["email"]; // Output: john@example.com
```

> **Tip:** If the key doesn’t exist, PHP will throw a notice. Use `isset($array['key'])` to check.

---

### **Looping Through Associative Arrays**

Use `foreach` to iterate over keys and values:

```php
foreach ($student as $key => $value) {
    echo "$key: $value <br>";
}
```

**Output:**

```
name: John Doe
age: 20
email: john@example.com
```

---

### **Useful Functions**

* `array_keys($array)` → returns all keys.
* `array_values($array)` → returns all values.

Example:

```php
$keys = array_keys($student);   // ["name", "age", "email"]
$values = array_values($student); // ["John Doe", 20, "john@example.com"]
```

---

### **Step-by-step Example**

**Creating a student record:**

```php
$student = [
    "name" => "Amina",
    "age" => 21,
    "email" => "amina@example.com",
    "course" => "Computer Science"
];

echo "Student Name: " . $student["name"];
```

**Output:**

```
Student Name: Amina
```

---

# **2. Practical Exercises (Morning Session)**

Follow these exercises to build confidence with associative arrays.

### **Exercise 1 — Student Record**

Create an associative array for a student with keys: `name`, `age`, `email`, `course`.
Print each key-value pair using a `foreach` loop.

### **Exercise 2 — Product Catalog**

Create a product catalog array where each product is represented as:

```php
$product = [
    "name" => "Laptop",
    "price" => 1200,
    "stock" => 15
];
```

Loop through and print all details.

### **Exercise 3 — User Profile System**

Create multiple users as associative arrays with `username`, `email`, `role`.
Loop through each user and print details.

### **Exercise 4 — Configuration Settings**

Store settings as key-value pairs:

```php
$config = [
    "site_name" => "My Website",
    "maintenance" => false,
    "max_upload" => 5
];
```

Access and print each configuration value.

---

# **3. Multidimensional Arrays (Afternoon Session)**

### **Plain Definition**

A multidimensional array is an array containing one or more arrays.
Think of it as **arrays inside arrays**.

Example — list of students:

```php
$students = [
    ["name" => "John", "age" => 20],
    ["name" => "Mary", "age" => 22],
    ["name" => "Amina", "age" => 21]
];
```

---

### **Nested Loops**

To iterate over multidimensional arrays, use **nested `foreach` loops**:

```php
foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo "$key: $value <br>";
    }
    echo "<hr>";
}
```

**Output:**

```
name: John
age: 20
----------------
name: Mary
age: 22
----------------
name: Amina
age: 21
----------------
```

---

### **Step-by-step Examples**

**1. Class Roster**

```php
$roster = [
    ["name" => "John", "age" => 20, "course" => "Math"],
    ["name" => "Mary", "age" => 22, "course" => "English"],
];
foreach ($roster as $student) {
    echo $student["name"] . " studies " . $student["course"] . "<br>";
}
```

**Output:**

```
John studies Math
Mary studies English
```

**2. Product Inventory**

```php
$products = [
    ["name" => "Laptop", "price" => 1200, "stock" => 10],
    ["name" => "Mouse", "price" => 20, "stock" => 50]
];
foreach ($products as $product) {
    echo "{$product['name']} - $ {$product['price']} - Stock: {$product['stock']}<br>";
}
```

---

# **4. Practical Exercises (Afternoon Session)**

### **Exercise 1 — Mini-gradebook**

* Create a multidimensional array for 3 students and 2 subjects.
* Print each student’s name and their grades in all subjects.

### **Exercise 2 — Phonebook**

* Store contacts as arrays with `name`, `phone`, `email`.
* Loop through contacts and print in a formatted list.

### **Exercise 3 — Menu System**

* Create categories as keys, each with an array of items:

```php
$menu = [
    "Breakfast" => ["Pancakes", "Eggs"],
    "Lunch" => ["Burger", "Salad"]
];
```

* Print all categories and items neatly.

### **Exercise 4 — Student Database**

* Create 5 student records in a multidimensional array.
* Print all details using nested loops.

---

# **5. Homework**

1. Create a **student database** with 5 students. Include: `name`, `age`, `email`, `course`.
2. Build a **menu system** with at least 3 categories and multiple items per category.
3. Build a **phonebook** with at least 5 contacts and implement a simple search function to find a contact by name (hint: `foreach` + `if` statement).

---

# **6. Quick Quiz / Self-check**

1. What is the difference between indexed and associative arrays?
2. How do you access the email of a student stored in an associative array?
3. How do you get all keys of an associative array?
4. What is a multidimensional array?
5. How do you loop through a multidimensional array to print all values?

**Answers:**

1. Indexed arrays use numeric keys; associative arrays use named keys.
2. `$student["email"]`
3. `array_keys($array)`
4. An array containing other arrays.
5. Nested `foreach` loops.

---

# **7. Mini Project Idea**

Create a **Student Records System**:

* Store 5 students in a multidimensional array with: `name`, `age`, `email`, `course`.
* Print each student’s info in a readable table format.
* Add an extra feature: count total students using `count($array)`.

---

# **8. Summary / Key Points (Ready-to-print)**

* **Associative Arrays** — key-value pairs, great for structured data.
* **Access values** using `$array["key"]`.
* **Loop** using `foreach($array as $key => $value)`.
* **Useful functions** — `array_keys()`, `array_values()`.
* **Multidimensional Arrays** — arrays inside arrays for complex data.
* **Looping nested arrays** — use nested `foreach`.
* **Practice** — student records, product catalogs, menu systems, phonebooks.
