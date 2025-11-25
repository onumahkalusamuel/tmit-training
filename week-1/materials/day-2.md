# **Day 2 — Full Instructional Manual**

## **PHP Syntax, Variables, and Data Types**

### *A complete self-study learning material with detailed explanations, definitions, examples, guided practice, and assessments.*

---

# **Learning Objectives (What students should achieve today)**

By the end of Day 2, every student should be able to:

* Understand PHP syntax rules and how PHP code is structured
* Write and use variables correctly
* Identify and use all basic PHP data types
* Perform debugging with `var_dump()` and `print_r()`
* Use operators (arithmetic, comparison, logical, assignment)
* Concatenate strings
* Use constants
* Perform type casting and understand type juggling
* Build small PHP programs using all of the above

---

# **1. Understanding PHP Syntax — Full Explanation**

PHP syntax is the set of rules that determine how PHP code must be written so the interpreter can understand it.

### **1. PHP File Extensions**

PHP programs are typically saved with:

```
filename.php
```

The `.php` extension tells the server to run the file through the PHP interpreter.

---

### **2. PHP Opening & Closing Tags**

PHP code must be written between these tags:

```php
<?php
    // PHP code here
?>
```

If you write PHP without the opening tag, it will appear as plain text in the browser.

---

### **3. Statements End with Semicolons**

Every instruction must end with a semicolon `;`.

Example:

```php
echo "Hello";
$name = "John";
```

**If you forget a semicolon → PHP throws a syntax error.**

---

### **4. Case Sensitivity**

* **Variables ARE case-sensitive**
  `$name`, `$Name`, and `$NAME` are 3 different variables.

* **Functions are NOT case-sensitive**
  `echo()`, `Echo()`, and `ECHO()` all work the same.

---

### **5. Comments**

Comments help explain code. They are ignored by PHP during execution.

**Types of comments:**

#### **Single-line comment**

```php
// This is a single-line comment
```

#### **Multi-line comment**

```php
/* 
  This is a multi-line comment
*/
```

#### **Documentation comment**

Used for functions, classes, or advanced documentation.

```php
/**
 * This describes a block of code
 */
```

---

# **2. Variables — Full Explanations**

Variables store data (information) that can change during the execution of a program.

### **Rules for PHP variables**

* Must start with `$`
* Must begin with a letter or underscore
* Cannot start with a number
* Cannot contain spaces
* Case-sensitive

Example:

```php
$age = 20;
$name = "Mary";
```

### **Why variables are important**

* They store information we need later
* They make programs dynamic
* They allow computation and data manipulation

---

# **3. PHP Data Types — Full Breakdown**

PHP has the following basic data types:

---

### **1. String**

A sequence of characters, enclosed in quotes:

```php
$name = "Abdul";
$city = 'Lagos';
```

---

### **2. Integer**

Whole numbers:

```php
$age = 25;
$students = 300;
```

---

### **3. Float / Double**

Decimal numbers:

```php
$price = 4.75;
$height = 1.65;
```

---

### **4. Boolean**

Represents truth values:

```php
$is_student = true;
$is_adult = false;
```

**Booleans commonly used in conditions (if, while, etc.)**

---

### **5. Debugging Tools**

To inspect what variables contain:

#### **var_dump()**

Shows type + value

```php
var_dump($age);
var_dump($name);
```

#### **print_r()**

Shows readable format for arrays and objects

```php
print_r($students);
```

---

# **4. Practical Tasks (Guided)**

### **Task A — Create a variable demo file**

Create a file named:

```
variables.php
```

Inside it:

```php
<?php

$name = "John Doe";
$age = 20;
$height = 5.9;
$is_student = true;

echo "<h2>Variable Demo</h2>";

echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Height: $height <br>";
echo "Is Student? " . ($is_student ? "Yes" : "No") . "<br>";

echo "<hr>";

echo "<h3>Debugging Output:</h3>";
var_dump($name);
var_dump($age);
var_dump($height);
var_dump($is_student);

?>
```

Open:
➡️ `http://localhost/training/variables.php`

---

# **5. Operators — Full Explanation**

Operators perform operations on variables and values.

---

## **A. Arithmetic Operators**

| Operator | Meaning             | Example   |
| -------- | ------------------- | --------- |
| +        | Addition            | `$a + $b` |
| -        | Subtraction         | `$a - $b` |
| *        | Multiplication      | `$a * $b` |
| /        | Division            | `$a / $b` |
| %        | Modulus (remainder) | `$a % $b` |

Example program:

```php
$a = 10;
$b = 3;

echo $a + $b; // 13
echo $a % $b; // 1
```

---

## **B. Assignment Operators**

| Operator | Meaning             | Example                   |
| -------- | ------------------- | ------------------------- |
| =        | Assign              | `$x = 5`                  |
| +=       | Add and assign      | `$x += 2` → `$x = $x + 2` |
| -=       | Subtract and assign | `$x -= 1`                 |

---

## **C. Comparison Operators**

Used in conditions (if statements).

| Operator | Meaning                       |
| -------- | ----------------------------- |
| ==       | Equal                         |
| ===      | Identical (same value + type) |
| !=       | Not equal                     |
| >        | Greater than                  |
| <        | Less than                     |
| >=       | Greater or equal              |
| <=       | Less or equal                 |

Example:

```php
$age = 18;

if ($age >= 18) {
    echo "Adult";
} else {
    echo "Minor";
}
```

---

## **D. Logical Operators**

Used to combine multiple conditions.

| Operator | Meaning                    |
| -------- | -------------------------- |
| &&       | AND (both true)            |
| ||       | OR (at least one true)     |
| !        | NOT (reverses truth value) |

---

# **6. String Concatenation**

Use the `.` operator to join strings.

```php
$first = "Smart";
$second = "School";

$full = $first . " " . $second;

echo $full; // Smart School
```

---

# **7. Type Juggling & Casting**

### **Type Juggling**

PHP automatically converts data types when needed.

```php
$number = "20" + 10; 
// becomes 30 automatically
```

### **Casting**

Force a variable into a certain type:

```php
$value = "100";
$intValue = (int) $value; // cast to integer
```

---

# **8. Constants**

Constants store values that never change.

Two ways to create them:

### **1. Using define()**

```php
define("SCHOOL", "Smart School Africa");
```

### **2. Using const**

```php
const PI = 3.14;
```

---

# **9. Guided Practical: Calculator Program**

Create a file:

```
calculator.php
```

Write:

```php
<?php

$a = 15;
$b = 4;

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Remainder: " . ($a % $b) . "<br>";

?>
```

---

# **10. Guided Practical: Bio Page**

Create:

```
mybio.php
```

```php
<?php

$name = "Precious";
$age = 19;
$school = "Smart School Africa";

echo "<h1>Student Bio</h1>";

echo "Name: $name <br>";
echo "Age: $age <br>";
echo "School: $school <br>";

?>
```

---

# **11. 10 Math Operations — Sample Answers**

Students are asked to perform 10 operations.
Here’s an example reference:

```php
echo 5 + 4;
echo 10 - 8;
echo 6 * 3;
echo 9 / 2;
echo 11 % 2;
echo 5 ** 2;       // exponent
echo (4 + 3) * 2;
echo 20 / (5 - 1);
echo (15 % 4) + 1;
echo 100 / 4;
```

---

# **12. Comparison Operator Practice**

Example comparisons:

```php
$a = 10;
$b = "10";

var_dump($a == $b);  // true
var_dump($a === $b); // false
var_dump($a > 5);    // true
var_dump($a <= 9);   // false
```

---

# **13. Quick Self-Test (with answers)**

### **1. Which symbol starts every PHP variable?**

**Answer:** `$`

### **2. What does `===` check for?**

**Answer:** identical value AND type.

### **3. What function shows both variable type and value?**

**Answer:** `var_dump()`

### **4. How do you join two strings?**

**Answer:** Using the `.` operator.

### **5. What is the difference between `=` and `==`?**

**Answer:**

* `=` is assignment
* `==` is comparison

---

# **14. Mini Project for Day 2**

## **Build a Student Profile Page with Variables, Operations, and Debugging**

Create a file named:

```
student_profile.php
```

### **Requirements**

* Use variables for name, age, class, height, phone number
* Perform at least 5 operations on age (add, subtract, etc.)
* Display all info in HTML
* Use concatenation to build full sentences
* Use `var_dump()` to debug at least two variables
* Use at least 1 constant (`define`)
* Include comments documenting what each section does

### **Sample Output Example**

```
Student Profile
Name: John David
Age: 20
Age + 5 = 25
Height: 5.9
Phone: 0812345678

Debugging:
string(10) "John David"
int(20)
```

This ensures they apply everything taught in Day 2.

---

# **15. Printable Checklist for Day 2**

* [ ] I understand PHP syntax rules
* [ ] I can create and use variables
* [ ] I know all major PHP data types
* [ ] I can debug using `var_dump()`
* [ ] I know arithmetic, comparison, logical, and assignment operators
* [ ] I can concatenate strings properly
* [ ] I understand type casting
* [ ] I can use constants
* [ ] I completed the Day 2 mini project
