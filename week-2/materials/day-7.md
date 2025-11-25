# **Day 7 — Full Instructional Manual**

## **Topic: Functions in PHP**

### **Objective:**

By the end of this lesson, students should be able to:

* Understand what functions are and why they are used (DRY principle)
* Create and call functions in PHP
* Use parameters and return values
* Understand variable scope (local vs global)
* Work with default parameters and type declarations
* Use functions that return multiple values
* Apply functions in practical exercises like calculators, converters, and string utilities

---

# **1. Introduction to Functions**

### **Definition:**

A **function** is a **block of code that performs a specific task** and can be **reused** multiple times.

> Think of it as a **mini-program** inside your program.

### **Why Use Functions?**

* Avoid repeating code (**DRY principle** – Don’t Repeat Yourself)
* Organize code into logical, reusable blocks
* Make programs easier to read, maintain, and debug

---

# **2. Creating and Calling Functions**

### **Syntax**

```php
function functionName() {
    // code to execute
}
```

### **Example**

```php
<?php
function greet() {
    echo "Hello, Student!";
}

greet(); // Call the function
?>
```

**Output:**

```
Hello, Student!
```

---

# **3. Functions with Parameters**

### **Definition**

Parameters allow you to pass data into a function.

### **Syntax**

```php
function greetUser($name) {
    echo "Hello, $name!";
}
```

### **Example**

```php
greetUser("Amina"); // Hello, Amina!
greetUser("John");  // Hello, John!
```

> **Tip:** Parameters act like variables that exist only **inside the function**.

---

# **4. Functions with Return Values**

Functions can **return a value** instead of directly printing it.

### **Syntax**

```php
function add($a, $b) {
    return $a + $b;
}
```

### **Example**

```php
$sum = add(10, 20);
echo "Sum: $sum"; // Sum: 30
```

> `return` allows you to **store the result** for later use.

---

# **5. Variable Scope**

### **Local Scope**

Variables declared inside a function exist **only inside** the function:

```php
function test() {
    $message = "Hello";
    echo $message; // Works
}
test();
// echo $message; // Error! $message not accessible here
```

### **Global Scope**

Variables declared outside a function are global:

```php
$message = "Hello";

function showMessage() {
    global $message;
    echo $message; // Access global variable
}

showMessage(); // Hello
```

> **Tip:** Avoid using global variables excessively; prefer passing parameters.

---

# **6. Default Parameters & Type Declarations**

### **Default Parameters**

You can give parameters a default value if no argument is passed:

```php
function welcome($name = "Guest") {
    echo "Welcome, $name!";
}

welcome();      // Welcome, Guest!
welcome("Amina"); // Welcome, Amina!
```

### **Type Declarations**

Ensure parameters and return types are specific:

```php
function sum(int $a, int $b): int {
    return $a + $b;
}

echo sum(5, 10); // 15
```

> **Tip:** Type declarations help catch errors and make code predictable.

---

# **7. Multiple Return Values**

PHP doesn’t support returning multiple values directly, but you can return an **array**:

```php
function calculate($a, $b) {
    return [
        "sum" => $a + $b,
        "diff" => $a - $b,
        "product" => $a * $b
    ];
}

$result = calculate(10, 5);
echo "Sum: ".$result["sum"];       // Sum: 15
echo "Difference: ".$result["diff"]; // Difference: 5
echo "Product: ".$result["product"]; // Product: 50
```

---

# **8. Practical Exercises — Morning Session**

### **Exercise 1 — Greeting Function**

* Create a function `greetUser($name)` that prints a personalized greeting.
* Call it for at least 3 different names.

### **Exercise 2 — Calculator Functions**

* Create functions for `add`, `subtract`, `multiply`, `divide`.
* Call each function with two numbers and display the result.

### **Exercise 3 — Area Calculator**

* Function `areaOfRectangle($length, $width)` returns area.
* Function `areaOfCircle($radius)` returns area (use `3.14 * radius * radius`).

### **Exercise 4 — Temperature Converter**

* Function `celsiusToFahrenheit($c)` converts Celsius to Fahrenheit.
* Function `fahrenheitToCelsius($f)` converts Fahrenheit to Celsius.

---

# **9. Advanced Functions — Afternoon Session**

### **Validation Functions**

* Function `isPositive($number)` returns `true` if number is positive, otherwise `false`.
* Function `isAdult($age)` returns `true` if age >= 18, otherwise `false`.

### **String Utilities**

* Function `reverseString($str)` returns the reversed string.
* Function `capitalize($str)` returns the string with the first letter capitalized.

### **Array Utilities**

* Function `sumArray($arr)` returns the sum of all elements.
* Function `maxArray($arr)` returns the maximum value.

---

# **10. Practical Exercises — Afternoon Session**

1. **Validation Functions:**
   Check a list of ages to determine who is an adult.

2. **String Toolkit:**
   Reverse a string, capitalize words, and count characters.

3. **Array Utilities:**
   Calculate sum, average, min, and max of a numeric array using functions.

4. **Combined Exercise:**
   Build a small calculator program that takes two numbers and prints sum, difference, product, and quotient using functions.

---

# **11. Homework Assignments**

1. **Library of Functions:**

* Create 10 reusable functions: greetings, math, string manipulation, and validation.
* Test each function with different inputs.

2. **Calculator Using Functions Only:**

* No inline calculations; all operations must call functions.
* Include addition, subtraction, multiplication, division, and average.

3. **String Toolkit:**

* Functions to: reverse string, capitalize, count vowels, count consonants, find word length.
* Test with sample sentences.

---

# **12. Mini Project — Day 7**

**Objective:** Build a **Small Student Utility System**

* Functions to:

  1. Add a student (`name`, `age`, `course`)
  2. Display all students
  3. Search for a student by name
  4. Calculate average age
  5. Print all course names without duplicates

**File Name:** `functions_project.php`

---

# **13. Self-Check Questions**

1. What is the difference between a function and a normal block of code?
2. How do you pass data to a function?
3. What is the purpose of a `return` statement?
4. What is the difference between local and global scope?
5. How can you give a default value to a function parameter?

**Answers:**

1. A function is reusable and can be called multiple times; a normal block runs inline.
2. Using **parameters**, e.g., `function myFunc($param)`.
3. To send a value back from the function for use elsewhere.
4. Local variables exist inside the function; global variables exist outside.
5. By assigning a value in the function definition, e.g., `function greet($name = "Guest")`.

---

# **14. Summary / Key Points (Ready-to-print)**

* **Functions** = reusable blocks of code.
* **Parameters** pass data; **return** sends results back.
* **Variable scope** matters: local vs global.
* **Default values** and **type declarations** improve flexibility and safety.
* **Multiple return values** can be handled with arrays.
* **Practical use**: calculators, string tools, validation utilities, student record systems.