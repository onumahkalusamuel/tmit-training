# **Day 4 — Full Instructional Manual**

## **Topic: Loops & Iteration in PHP**

### **Objective:**

By the end of this lesson, students should be able to:

* Understand what loops are and why they are important in programming
* Use `while`, `do-while`, and `for` loops
* Control loop execution with `break` and `continue`
* Avoid infinite loops
* Use nested loops for patterns and tables
* Apply loops to practical exercises like counting, multiplication tables, and more

---

# **1. Introduction to Loops**

### **Definition:**

A **loop** is a programming structure that **repeats a block of code multiple times** until a specified condition is met.

> Loops save time and make programs efficient. Instead of writing repetitive code manually, we can repeat instructions automatically.

---

### **When to Use Loops**

* Printing a sequence of numbers
* Processing arrays
* Generating patterns
* Performing repeated calculations

---

# **2. While Loop**

### **Definition:**

The `while` loop **repeats a block of code as long as the condition is true**.

### **Syntax**

```php
while (condition) {
    // code to execute
}
```

### **Example: Print numbers 1–10**

```php
<?php
$i = 1; // counter initialization

while ($i <= 10) {
    echo $i . "<br>";
    $i++; // increment to avoid infinite loop
}
?>
```

### **Explanation:**

* `$i = 1` initializes counter
* Condition `$i <= 10` is checked before each iteration
* `$i++` increments the counter

---

# **3. Do-While Loop**

### **Definition:**

`do-while` loop **executes the block at least once**, then checks the condition.

### **Syntax**

```php
do {
    // code to execute
} while (condition);
```

### **Example**

```php
<?php
$i = 1;

do {
    echo $i . "<br>";
    $i++;
} while ($i <= 5);
?>
```

**Key difference from while:**

* Even if the condition is false initially, `do-while` executes once.

---

# **4. For Loop**

### **Definition:**

`for` loop is best when **the number of iterations is known**.

### **Syntax**

```php
for (initialization; condition; increment/decrement) {
    // code to execute
}
```

### **Example: Print 1–10**

```php
<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
?>
```

---

# **5. Loop Control Statements**

### **break**

* Exits the loop immediately

```php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // stop loop at 5
    }
    echo $i . "<br>";
}
```

### **continue**

* Skips the current iteration and moves to the next one

```php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue; // skip odd numbers
    }
    echo $i . "<br>"; // prints only even numbers
}
```

---

# **6. Avoiding Infinite Loops**

### **Definition:**

An infinite loop repeats forever because its condition **never becomes false**.

### **Tips to avoid**

1. Always **update counters** inside the loop
2. Check your **loop condition** before running
3. Test loops with small numbers first

### **Example of Infinite Loop (do not run)**

```php
$i = 1;
while ($i <= 10) {
    echo $i . "<br>";
    // missing $i++; → infinite loop
}
```

---

# **7. Practical Exercises — Morning Session**

1. **Print numbers 1–100**

```php
for($i=1; $i<=100; $i++){
    echo $i . "<br>";
}
```

2. **Print even numbers 1–100**

```php
for($i=2; $i<=100; $i+=2){
    echo $i . "<br>";
}
```

3. **Countdown from 10 to 1**

```php
for($i=10; $i>=1; $i--){
    echo $i . "<br>";
}
```

4. **Multiplication table of 5**

```php
for($i=1; $i<=10; $i++){
    echo "5 x $i = " . (5*$i) . "<br>";
}
```

5. **Sum of first 100 numbers**

```php
$sum = 0;
for($i=1; $i<=100; $i++){
    $sum += $i;
}
echo "Sum = " . $sum;
```

---

# **8. Nested Loops**

### **Definition:**

A **nested loop** is a loop inside another loop. Useful for **patterns, tables, and multidimensional structures**.

### **Syntax**

```php
for($i=1; $i<=3; $i++){
    for($j=1; $j<=3; $j++){
        echo $i . "-" . $j . "<br>";
    }
}
```

### **Example: Pyramid Pattern**

```php
<?php
$rows = 5;
for($i=1; $i<=$rows; $i++){
    for($j=1; $j<=$i; $j++){
        echo "* ";
    }
    echo "<br>";
}
?>
```

**Output:**

```
* 
* * 
* * * 
* * * * 
* * * * * 
```

---

### **Times Table (1–10)**

```php
for($i=1; $i<=10; $i++){
    for($j=1; $j<=10; $j++){
        echo $i . "x" . $j . "=" . ($i*$j) . "\t";
    }
    echo "<br>";
}
```

---

### **Prime Numbers 1–100**

```php
for($i=2; $i<=100; $i++){
    $isPrime = true;
    for($j=2; $j<$i; $j++){
        if($i % $j == 0){
            $isPrime = false;
            break;
        }
    }
    if($isPrime){
        echo $i . "<br>";
    }
}
```

---

# **9. Homework Assignments**

1. **Fibonacci Sequence (20 numbers)**

   * Generate the first 20 numbers in the Fibonacci sequence using loops.

2. **Pattern Generator**

   * Create different star patterns using nested loops (e.g., triangle, diamond).

3. **Factorial Calculator**

   * Use a loop to calculate factorial of a number (e.g., 5! = 5×4×3×2×1 = 120).

---

# **10. Summary Table**

| Loop Type | When to Use                    | Example                                            |
| --------- | ------------------------------ | -------------------------------------------------- |
| while     | Repeat while condition is true | `while($i<=10){...}`                               |
| do-while  | Executes at least once         | `do{...} while($i<=10);`                           |
| for       | Fixed number of iterations     | `for($i=1;$i<=10;$i++){...}`                       |
| Nested    | Loop inside loop               | `for($i=1;$i<=5;$i++){for($j=1;$j<=$i;$j++){...}}` |

**Control Statements:**

* `break` → stop loop immediately
* `continue` → skip current iteration

---

# **11. Mini Project (Day 4)**

**Objective:**
Build a PHP program that:

1. Prints numbers 1–50
2. Prints only even numbers
3. Prints a multiplication table for a user-defined number
4. Generates a pyramid pattern of stars
5. Calculates the sum of first N numbers (user-defined)

**File Name:** `loops_project.php`

---

# **12. Self-Check Questions**

1. What is the difference between `while` and `do-while`?
2. How do you stop a loop from executing further?
3. How can you skip an iteration in a loop?
4. Write a nested loop to print a 3×3 table.
5. What is an infinite loop, and how can it be avoided?

**Answers:**

1. `do-while` executes at least once; `while` may not execute if the condition is false initially.
2. Use `break`.
3. Use `continue`.
4.

```php
for($i=1;$i<=3;$i++){
    for($j=1;$j<=3;$j++){
        echo $i."-".$j."<br>";
    }
}
```

5. A loop that never ends; update counters and check conditions to avoid it.
