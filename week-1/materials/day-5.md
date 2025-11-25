# **Day 5 — Full Instructional Manual**

## **Topic: Arrays (Indexed) in PHP**

### **Objective:**

By the end of this lesson, students should be able to:

* Understand what arrays are and why they are useful
* Create and access indexed arrays
* Determine array length and loop through arrays
* Use built-in PHP array functions for manipulation
* Apply arrays to practical exercises like student lists, number calculations, and more

---

# **1. Introduction to Arrays**

### **Definition:**

An **array** is a **special type of variable that can store multiple values in a single variable**.

> Think of it like a **list or a basket** where you can keep many items in order.

### **Why Use Arrays?**

* Store multiple values in one variable
* Organize data efficiently
* Perform operations on multiple items easily
* Loop through values for processing

---

# **2. Creating Indexed Arrays**

### **Indexed Arrays:**

* Each element has a **numeric index starting from 0**

### **Syntax**

```php
$fruits = ["Apple", "Banana", "Orange"];
```

### **Explanation**

* `$fruits[0]` → "Apple"
* `$fruits[1]` → "Banana"
* `$fruits[2]` → "Orange"

---

### **Example: Favorite Foods**

```php
<?php
$foods = ["Rice", "Beans", "Yam", "Spaghetti"];
echo $foods[0]; // Rice
?>
```

---

# **3. Accessing Elements**

* Use **index numbers** inside square brackets `[ ]` to access elements.

```php
$students = ["Ali", "Mary", "John"];
echo $students[1]; // Mary
```

* You can also **change a value** using the index:

```php
$students[2] = "David"; // Replaces "John" with "David"
```

---

# **4. Array Length**

* Use `count()` function to find the number of elements in an array:

```php
$fruits = ["Apple", "Banana", "Orange"];
echo count($fruits); // 3
```

---

# **5. Looping Through Arrays**

### **foreach Loop**

* Used to **iterate through each element** of an array

```php
$fruits = ["Apple", "Banana", "Orange"];

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
```

**Explanation:**

* `$fruit` temporarily holds each element in the array
* Loop repeats until all elements are processed

---

# **Practical Exercises — Morning Session**

1. **Favorite Foods:**

* Create an array of 5–10 favorite foods and print each item using `foreach`.

2. **Student Names (Longest Name):**

* Store 5 student names in an array
* Loop through to find the name with the most characters

3. **Sum & Average of Numbers:**

* Create an array of numbers `[10, 20, 30, 40]`
* Calculate total sum and average

4. **Manual Reverse:**

* Print array elements in reverse without using `array_reverse()`

---

# **6. Common Array Functions — Afternoon Session**

### **1. array_push()**

* Adds one or more elements **to the end** of an array

```php
$fruits = ["Apple", "Banana"];
array_push($fruits, "Orange", "Mango");
```

### **2. array_pop()**

* Removes **the last element** from an array

```php
$last = array_pop($fruits);
```

### **3. array_shift()**

* Removes **the first element** from an array

```php
$first = array_shift($fruits);
```

### **4. array_unshift()**

* Adds elements **to the beginning** of an array

```php
array_unshift($fruits, "Pineapple");
```

### **5. in_array()**

* Checks if a value **exists** in an array

```php
if(in_array("Banana", $fruits)){
    echo "Found!";
}
```

### **6. array_search()**

* Finds the **index of a value** in an array

```php
$index = array_search("Orange", $fruits);
```

### **7. sort() / rsort()**

* `sort()` → ascending order
* `rsort()` → descending order

```php
sort($fruits);   // Apple, Banana, Mango, Orange
rsort($fruits);  // Orange, Mango, Banana, Apple
```

### **8. shuffle()**

* Randomizes the order of elements

```php
shuffle($fruits);
```

### **9. array_merge()**

* Combines two or more arrays

```php
$veggies = ["Carrot", "Cabbage"];
$food = array_merge($fruits, $veggies);
```

### **10. array_slice()**

* Extracts a portion of an array

```php
$part = array_slice($fruits, 1, 2); // start at index 1, get 2 elements
```

---

# **Practical Exercises — Afternoon Session**

1. **Student List Manager:**

* Add new students, remove students, find students, and display the list

2. **Number Sorter:**

* Sort an array of numbers in ascending and descending order

3. **Search in Array:**

* Check if a particular item exists in an array and find its index

4. **Array Manipulation Challenge:**

* Combine multiple arrays, shuffle, slice, and display results

---

# **Homework Assignments**

1. **Shopping Cart System:**

* Create an array of items with prices
* Add, remove, and display items using array functions

2. **Todo List Operations:**

* Store tasks in an array
* Add new tasks, mark tasks as done (remove), and display remaining tasks

3. **Number Analysis Tool:**

* Create an array of numbers
* Calculate **min, max, average, and sum**

---

# **7. Mini Project — Day 5**

**Objective:** Build a PHP program that:

1. Stores a list of students in an array
2. Adds a new student to the list
3. Removes a student from the list
4. Checks if a particular student exists
5. Sorts the list alphabetically
6. Displays the first 3 students only

**File Name:** `arrays_project.php`

---

# **8. Self-Check Questions**

1. What is the difference between a variable and an array?
2. How do you access the first element of an array?
3. Name three functions to add or remove array elements.
4. What function gives the length of an array?
5. How can you loop through all elements of an array?

**Answers:**

1. A variable stores a single value; an array stores multiple values.
2. `$array[0]`
3. `array_push()`, `array_pop()`, `array_shift()`, `array_unshift()`
4. `count()`
5. `foreach($array as $element){...}`
