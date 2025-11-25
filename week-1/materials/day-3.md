# **Day 3 — Full Instructional Manual**

## **Topic: Control Structures (Conditional Statements)**

### *Foundations & Programming Basics*

### **Objective:**

By the end of this lesson, students should be able to:

* Understand what conditional statements are and why they are used
* Implement `if`, `if-else`, `if-elseif-else`, and nested if statements
* Use the ternary operator for short conditional expressions
* Implement switch statements for multi-case conditions
* Apply these concepts to practical examples like number checking, grade calculation, age verification, menu systems, and more

---

# **1. Introduction to Conditional Statements**

### **Definition:**

Conditional statements allow a program to **decide which code to execute based on a condition**. They are essential because programs often need to make decisions.

> Think of it like: “If it is raining, take an umbrella; otherwise, wear sunglasses.”

---

# **2. If Statement**

### **Syntax**

```php
if (condition) {
    // code to execute if condition is true
}
```

### **Explanation**

* The `if` statement checks a **condition** (something that evaluates to true or false).
* If the condition is **true**, the code inside the `{ }` executes.
* If **false**, nothing happens.

### **Example**

```php
$score = 65;

if ($score > 50) {
    echo "Passed";
}
```

**Explanation:**

* `$score > 50` is the condition.
* Since 65 > 50, the message “Passed” will be displayed.

---

### **Exercise 1: Number Checker**

Create a PHP file `number_check.php`:

```php
<?php
$number = 10;

if ($number > 0) {
    echo "$number is positive";
}
?>
```

* Test with positive, zero, and negative numbers.
* Observe how the message appears only if the condition is true.

---

# **3. If-Else Statement**

### **Syntax**

```php
if (condition) {
    // code if true
} else {
    // code if false
}
```

### **Explanation**

* Adds an **alternative path** if the condition is false.

### **Example**

```php
$age = 17;

if ($age >= 18) {
    echo "Adult";
} else {
    echo "Minor";
}
```

**Explanation:**

* Age 17 < 18 → prints “Minor”
* Age >= 18 → would print “Adult”

---

### **Exercise 2: Age Verification**

* Create `age_check.php`
* Ask the student to change the `$age` variable and check the output
* Test with 15, 18, 20, etc.

---

# **4. If-ElseIf-Else Chain**

### **Use Case**

* Use when **more than two conditions** need to be checked.

### **Syntax**

```php
if (condition1) {
    // code for condition1
} elseif (condition2) {
    // code for condition2
} else {
    // code if none of the above
}
```

### **Example: Grade Calculator**

```php
$score = 78;

if ($score >= 80) {
    echo "Grade A";
} elseif ($score >= 60) {
    echo "Grade B";
} elseif ($score >= 50) {
    echo "Grade C";
} else {
    echo "Grade F";
}
```

---

# **5. Nested If**

### **Definition**

* An **if statement inside another if statement**.
* Useful for making decisions based on multiple levels of conditions.

### **Example**

```php
$age = 20;
$hasID = true;

if ($age >= 18) {
    if ($hasID) {
        echo "Access granted";
    } else {
        echo "You must show ID";
    }
} else {
    echo "Access denied";
}
```

**Explanation:**

* First, checks if age >= 18.
* Then, inside it checks if user has ID.

---

# **6. Ternary Operator**

### **Definition**

* A **short-hand way to write an if-else statement**
* Syntax:

```php
$result = (condition) ? value_if_true : value_if_false;
```

### **Example**

```php
$age = 17;
$result = ($age >= 18) ? "Adult" : "Minor";
echo $result;
```

---

# **Practical Exercises — Morning Session**

1. **Number Checker:** Check if a number is positive, negative, or zero.
2. **Grade Calculator:** Assign grades based on scores.
3. **Age Verification:** Check if someone is adult or minor.
4. **Simple Login:** Check username and password using `if-else`.

---

# **7. Switch Statement**

### **Definition**

* Used to **compare one value with multiple cases**
* Cleaner alternative to long if-elseif chains

### **Syntax**

```php
switch (variable) {
    case value1:
        // code
        break;
    case value2:
        // code
        break;
    default:
        // code if no case matches
}
```

### **Example: Day of the Week**

```php
$day = 3;

switch ($day) {
    case 1: echo "Monday"; break;
    case 2: echo "Tuesday"; break;
    case 3: echo "Wednesday"; break;
    default: echo "Invalid day";
}
```

**Explanation:**

* `$day = 3` matches `case 3` → prints "Wednesday"
* `break;` stops further execution inside switch

---

### **When to Use Switch**

* When **one variable** needs to be compared to **multiple constant values**
* Cleaner and easier to read than multiple if-elseif statements

---

# **Practical Exercises — Afternoon Session**

1. **Day of the Week:** Use switch to print day names from numbers 1–7
2. **Menu System:** Build a simple menu with 3–4 options
3. **Season Identifier:** Enter a month number and output the season (Winter, Spring, Summer, Autumn)

---

# **Homework Assignments**

1. **BMI Calculator:**

   * Create `bmi_calculator.php`
   * Use `if-elseif-else` to classify BMI: Underweight, Normal, Overweight, Obese

2. **Five-question quiz:**

   * Implement `if-else` to check answers of multiple-choice questions

3. **Traffic Light Simulator:**

   * Input a color (`red`, `yellow`, `green`) and print action (`Stop`, `Get Ready`, `Go`)

---

# **Quick Recap Table**

| Structure      | Use Case                                | Syntax Example                                  |
| -------------- | --------------------------------------- | ----------------------------------------------- |
| if             | One condition                           | `if ($x > 10) { ... }`                          |
| if-else        | Two possibilities                       | `if ($x>10){...} else {...}`                    |
| if-elseif-else | Multiple possibilities                  | `if($x>80){...} elseif($x>50){...} else {...}`  |
| Nested if      | Multiple levels                         | `if($a){ if($b){...} }`                         |
| Ternary        | Short if-else                           | `$result = ($age>=18)? "Adult":"Minor";`        |
| switch         | Compare one variable to multiple values | `switch($x){case 1: ...; break; default: ...;}` |

---

# **Mini Project (Day 3)**

**Build a PHP program that:**

1. Accepts a number from a variable `$num`
2. Checks if the number is positive, negative, or zero using if-elseif-else
3. Determines whether it is odd or even using nested if
4. Displays a short message using ternary operator
5. Uses a switch statement to print a custom message based on number ranges (1–3, 4–6, 7–9)

**File Name:** `day3_project.php`

---

# **Self-Check Questions**

1. What is the difference between `if` and `switch` statements?
2. When would you use a nested `if` statement?
3. Rewrite the following `if-else` using a ternary operator:

```php
if($score >= 50){echo "Pass";} else {echo "Fail";}
```

4. What happens if you forget `break;` in a switch case?
5. Give an example where using `switch` is better than multiple `if-elseif` statements.

**Answers:**

1. `if` is used for conditional logic with expressions; `switch` is cleaner for comparing a single variable to multiple values.
2. When decisions depend on multiple conditions at different levels.
3. `$result = ($score >= 50) ? "Pass" : "Fail";`
4. Execution continues to the next case (fall-through).
5. Choosing day names from numbers 1–7; menu options; seasonal assignment.
