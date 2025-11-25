# **Day 8 — Full Instructional Manual**

## **Topic: Forms & User Input in PHP**

### **Objective:**

By the end of this lesson, students should be able to:

* Understand HTML forms and their purpose
* Differentiate between GET and POST methods
* Access user-submitted data using PHP
* Validate and sanitize user input
* Preserve form data after submission
* Build practical examples like contact forms, login forms, and search interfaces

---

# **1. Introduction to Forms**

### **Definition:**

A **form** is an HTML element that **collects input from users** and sends it to the server for processing.

> Think of it as a **way for the user to talk to your PHP program**.

### **Why Use Forms?**

* Collect user data (name, email, password, etc.)
* Submit information for processing or storage
* Make websites interactive

---

# **2. HTML Form Basics**

### **Form Tag Syntax**

```html
<form action="process.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="Submit">
</form>
```

### **Attributes**

* `action` → the file that will process the form (PHP file)
* `method` → how data is sent: `GET` or `POST`

---

### **GET vs POST**

| Feature      | GET                   | POST                           |
| ------------ | --------------------- | ------------------------------ |
| Data in URL  | Yes                   | No                             |
| Max length   | Limited (~2000 chars) | Very large                     |
| Security     | Less secure           | More secure for sensitive data |
| Caching      | Can be cached         | Not cached                     |
| Bookmarkable | Yes                   | No                             |

> Use **POST** for passwords, registration forms, and sensitive data. Use **GET** for search queries or simple navigation.

---

# **3. Accessing Form Data in PHP**

### **Using `$_GET`**

```php
<?php
// process_get.php
$name = $_GET['name'];
echo "Hello, $name!";
?>
```

**Example Form (GET method):**

```html
<form action="process_get.php" method="get">
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>
```

---

### **Using `$_POST`**

```php
<?php
// process_post.php
$email = $_POST['email'];
echo "Your email is $email";
?>
```

**Example Form (POST method):**

```html
<form action="process_post.php" method="post">
    <input type="email" name="email">
    <input type="submit" value="Submit">
</form>
```

> **Tip:** Always check if the input exists using `isset()` before accessing it.

---

# **4. Form Validation & Sanitization**

### **Why Validate?**

* Ensure the user entered correct and safe data
* Prevent errors in your PHP program
* Avoid malicious attacks (XSS, SQL Injection)

### **Common Validation Functions**

```php
trim($input);           // Remove whitespace from beginning and end
htmlspecialchars($input); // Convert special characters to HTML entities
stripslashes($input);    // Remove backslashes
```

### **Example: Validating a Name Field**

```php
$name = trim($_POST['name']);
$name = stripslashes($name);
$name = htmlspecialchars($name);
```

---

# **5. Preserving Form Data**

* Useful if the form has errors and you want the user to re-edit without retyping everything.

```php
<input type="text" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
```

---

# **6. Practical Exercises — Morning Session**

### **Exercise 1 — Contact Form**

* Create a form with fields: `name`, `email`, `message`
* Use POST method
* Display submitted data on another page

### **Exercise 2 — Search Form**

* Create a search form with a GET method
* Display the searched query on the results page

### **Exercise 3 — Login Form**

* Fields: `username` and `password`
* Use POST method
* Display a welcome message with the username

### **Exercise 4 — Form with Multiple Input Types**

* Include: text, email, password, radio, checkbox, select
* Display all submitted values

---

# **7. Form Validation & Sanitization — Afternoon Session**

### **Example: Registration Form**

```php
<?php
$nameErr = $emailErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}
?>
```

---

### **Displaying Error Messages and Preserving Data**

```html
<form method="post" action="">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span><?php echo $nameErr; ?></span><br>

    Email: <input type="email" name="email" value="<?php echo $email; ?>">
    <span><?php echo $emailErr; ?></span><br>

    <input type="submit" value="Submit">
</form>
```

---

# **8. Practical Exercises — Afternoon Session**

1. **Registration Form:**

* 6–8 input fields: `name`, `email`, `password`, `age`, `gender`, `city`
* Validate each field
* Display errors next to fields

2. **Survey Form:**

* Include radio buttons, checkboxes, and textarea
* Display all submitted responses neatly

3. **Calculator Form:**

* Fields: `number1` and `number2`
* Submit and display sum, difference, product, and quotient

4. **Preserving Data:**

* Make sure fields retain user input after submission if validation fails

---

# **9. Homework Assignments**

1. **Complete Registration System:**

* 8 input fields
* Validate all inputs
* Preserve entered data after submission

2. **Feedback Form:**

* Include rating (radio), comments (textarea), email
* Display error messages if any field is empty

3. **Search Interface:**

* Create a search form
* Accept a query via GET method
* Display a filtered list of items matching the query

---

# **10. Mini Project — Day 8**

**Objective:** Build a **Simple Registration & Feedback System**

* Form with multiple input types
* Validate and sanitize all inputs
* Preserve data if errors occur
* Display a summary of submitted data on a separate page

**File Names:** `register.php`, `feedback.php`

---

# **11. Self-Check Questions**

1. What is the difference between GET and POST methods?
2. How do you access form data in PHP?
3. Why should we validate and sanitize user input?
4. How do you preserve user input after form submission?
5. Give an example of a built-in PHP function used for sanitization.

**Answers:**

1. GET sends data via URL; POST sends data hidden in the request body.
2. Using `$_GET['fieldname']` or `$_POST['fieldname']`
3. To ensure correctness, prevent errors, and protect against attacks.
4. By setting the `value` attribute to `<?php echo htmlspecialchars($_POST['fieldname']); ?>`
5. `htmlspecialchars()`, `trim()`, `stripslashes()`

---

# **12. Summary / Key Points (Ready-to-print)**

* Forms collect user input via HTML `<form>` elements
* `method="GET"` → data visible in URL, `method="POST"` → data hidden
* Access input via `$_GET` or `$_POST`
* Always **validate and sanitize** inputs before using
* Preserve data after submission for better user experience
* Practice: contact forms, login forms, search forms, registration systems
