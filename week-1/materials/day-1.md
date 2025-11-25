# Day 1 — Full Instructional Manual

**Foundations & Environment Setup — Full explanations, definitions, step-by-step procedures, examples, checks, exercises and answers so a student can learn without an instructor.**

---

## Learning objectives (what the student will be able to do after Day 1)

* Explain what programming is and why we use it.
* Describe how the web works (Client-Server model & HTTP).
* Explain what PHP is and where it runs.
* Install and configure a local development environment (Laragon, Apache, MySQL, PHP).
* Install VS Code and useful extensions.
* Create and run a simple PHP page (`hello.php`) and view it in a browser.
* Use basic browser DevTools to inspect a page and view console output.

---

## Prerequisites / Materials

* A Windows PC (instructions use Windows paths). If using macOS or Linux, the concepts are the same but install steps differ.
* Internet access to download Laragon and VS Code.
* Administrator access on the machine to install programs.
* A web browser (Chrome recommended for DevTools examples).
* Time: follow the exercises at your own pace.

---

# 1. Big-picture: What is programming?

### Plain definition

Programming is the activity of writing **instructions** (code) that tell a computer what to do. Each instruction is precise so the computer can execute it exactly.

### Key ideas (definitions)

* **Program**: a set of instructions the computer runs.
* **Programmer**: a person who writes these instructions.
* **Algorithm**: a step-by-step plan for solving a problem (what you'll later translate into code).
* **Compile vs Interpret**: some languages are compiled (turned into machine code beforehand) and others are interpreted (a program reads and executes them at runtime). PHP is an interpreted language executed by a PHP runtime on the server.
* **Debugging**: finding and fixing errors in code.

### How to think like a programmer (short list)

1. Break problems down into small steps.
2. Use logic and sequence—computers do exactly what you write.
3. Test small pieces often.
4. Read error messages—they tell you where to start looking.

---

# 2. Example: Making tea — an algorithm

This demonstrates how an everyday task becomes a stepwise algorithm.

1. Fill kettle with water.
2. Boil water.
3. Place tea leaves in teapot or cup.
4. Pour boiled water onto tea leaves.
5. Add sugar/milk if desired.
6. Stir and serve.

Compare this to writing a program: each line above would map to one or more code statements.

---

# 3. How the Web Works — full explanation

### Client-Server Model (simple)

* **Client**: what the user controls—usually a web browser (Chrome, Firefox). It **sends** requests for pages or data.
* **Server**: a computer or service that **responds** to client requests by sending files, HTML, JSON, etc. Example server software: Apache, Nginx.
* **Request/Response**: the client requests `http://example.com/index.html`, the server responds with the file or runs code (e.g., PHP) and returns the result.

### HTTP (HyperText Transfer Protocol)

* Protocol used to move data between client and server.
* Common methods: `GET` (retrieve), `POST` (submit data).
* URL structure: `http://hostname/path?query=...`
* Example local request: `http://localhost/hello.php` — the browser asks the local server for `hello.php`, the server runs PHP and returns the resulting HTML.

### Where PHP runs

* PHP runs **on the server**. When the server receives a request for a `.php` file it executes the PHP code and returns the generated HTML (or other response) to the browser.
* The browser only sees the **output** (HTML, CSS, JS), not the PHP source.

---

# 4. Introduction to PHP — detailed

### What is PHP?

* **PHP** stands for *PHP: Hypertext Preprocessor*.
* It is a **server-side scripting language** designed for web development (but also used for CLI scripts).
* Widely used for dynamic websites and content management systems (e.g., WordPress).

### Why use PHP?

* Easy to learn and friendly for beginners.
* Common on shared hosting (many servers support PHP by default).
* Integrates easily with HTML.
* Has strong ecosystem: frameworks (Laravel), CMSs, libraries.

### Basic PHP syntax (core concepts)

* PHP code is embedded in files using `<?php ... ?>`.
* Statements end with `;`.
* Variables start with `$`, e.g. `$name = "John";`
* Strings can be enclosed in double or single quotes.
* PHP is case-sensitive for variables (`$age` ≠ `$Age`) but function names are not.

---

# 5. Setting up the Development Environment (step-by-step)

We’ll use **Laragon** (Windows) to create a local web server containing Apache, MySQL and PHP bundled together. If you prefer WAMP, XAMPP or MAMP (for mac) the logic is similar.

### Step A — Download & install Laragon

1. Open your browser and go to **Laragon** official site (search for “Laragon download” to find latest).
2. Download the full installer (recommended).
3. Run the installer and follow prompts. Install to default location (e.g., `C:\laragon`).
4. After install, run Laragon.

> If Laragon requests ports or asks about shortcuts, accept defaults unless you have a reason to change them.

### Step B — Start services

1. Open Laragon.
2. Click **Start All** (or start Apache and MySQL individually).
3. Wait until indicators show services are running (green).
4. Click **Menu → Apache → httpd.conf** if you need to view Apache settings (advanced).

### Step C — Verify

1. Open a browser and visit `http://localhost/`. You should see Laragon's dashboard or a success page.
2. From a command prompt (optional), check PHP version:

   ```bash
   php -v
   ```

   This shows PHP version installed with Laragon.

### Step D — Create a project folder

1. On Windows, Laragon uses `C:\laragon\www` as the document root.
2. Create a folder named `training`:

   * Path: `C:\laragon\www\training`
   * You can create folders using File Explorer or command line.

---

# 6. Install VS Code & recommended extensions (step-by-step)

### Install VS Code

1. Download from the official Visual Studio Code site.
2. Run the installer and accept defaults.

### Recommended extensions and why

* **PHP Intelephense** — intelligent code completion, symbol search, error checking.
* **Prettier** — consistent formatting of HTML, CSS, JS, and PHP (if configured).
* **Bracket Pair Colorizer** or built-in bracket highlighting — helps match braces `{}()`.

### How to add an extension

1. Open VS Code → Extensions icon (left sidebar) → search extension name → Install.
2. After installing, reload VS Code if prompted.

---

# 7. Browser Developer Tools (brief guide)

Open Chrome, right-click any page and choose **Inspect** or press `Ctrl+Shift+I`.

### Important tabs

* **Elements**: view HTML structure and live edit.
* **Console**: view JavaScript errors or messages logged using `console.log(...)`.
* **Network**: see every request the page makes and its response (useful to understand HTTP requests).
* **Sources**: view and debug JavaScript files.

### Quick exercise

* With `http://localhost/hello.php` open, right-click and Inspect. See the HTML returned by PHP in Elements tab.

---

# 8. Practical: Create `hello.php` and view it

### Step-by-step

1. Open VS Code.
2. Create the folder `C:\laragon\www\training` as your workspace. In VS Code: **File → Open Folder → select training**.
3. Create a new file named `hello.php` inside `training`.
4. Paste the following code into `hello.php`:

```php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hello PHP</title>
</head>
<body>
    <?php
        // This line outputs Hello World to the browser
        echo "Hello World";
    ?>
</body>
</html>
```

5. Save the file.
6. In your browser, navigate to `http://localhost/training/hello.php`.
7. You should see **Hello World** displayed on the page.

### Explanation of the code

* The HTML is the structure the browser understands.
* `<?php ... ?>` wraps PHP code that runs on the server.
* `echo` prints output into the generated HTML sent to the browser.

---

# 9. Practical checks and debugging common problems

### If page shows PHP code as text (instead of running)

* Cause: Server is not running or file isn't being served through the server.
* Fix: Ensure Laragon/Apache is started and you opened `http://localhost/training/hello.php` (not `file://C:/...`). Restart Apache if necessary.

### If you get 404 Not Found

* Cause: Wrong URL or file not in the document root.
* Fix: Confirm file exists at `C:\laragon\www\training\hello.php`. Use `http://localhost/training/hello.php`.

### Blank page or internal server error

* Check `Apache` error log (Laragon menu → Apache → Logs) — it will show PHP parse errors.
* Check PHP syntax: missing semicolons or unmatched braces. VS Code with Intelephense will often highlight syntax errors.

---

# 10. Teaching notes: explanation of terms used on Day 1 (mini-glossary)

* **Apache**: a popular web server program that listens for HTTP requests and serves files or runs server-side code.
* **MySQL**: a relational database used to store persistent data (user accounts, posts).
* **Localhost**: a hostname that means “this computer” (127.0.0.1).
* **Document root**: the folder Apache serves files from (`C:\laragon\www`).
* **Server-side**: code that runs on the server (PHP).
* **Client-side**: code that runs in the browser (HTML, CSS, JavaScript).
* **PHP interpreter**: the program that executes PHP code and returns output.
* **IDE / Code editor**: program where you write and edit code (VS Code).
* **DevTools**: built-in browser tools to inspect and debug web pages.

---

# 11. Step-by-step checklist (printable)

1. Download & install Laragon.
2. Start Laragon (Start All).
3. Open browser → `http://localhost/` (confirm server running).
4. Create folder: `C:\laragon\www\training`.
5. Install VS Code and recommended extensions.
6. Create `hello.php` with the sample code.
7. Visit `http://localhost/training/hello.php`.
8. Inspect the page using Chrome DevTools.
9. If errors occur, open Apache logs and check PHP syntax.

---

# 12. Practical exercises (with step-by-step guidance)

### Exercise 1 — Create 3 PHP greeting pages (homework from original plan)

* Create `greet1.php`, `greet2.php`, `greet3.php` in the `training` folder.
* Each file should output a unique greeting, for example:

```php
<?php
echo "Good morning, student!";
```

* Open each page in browser using `http://localhost/training/greet1.php`, etc.

### Exercise 2 — Wrap greetings in HTML tags

* Use different HTML tags around the PHP output, e.g.:

```php
<h1><?php echo "Hello World"; ?></h1>
<p><?php echo "This is a paragraph."; ?></p>
```

* Observe how the browser renders these differently.

### Exercise 3 — Small guided task: Variable and output

* Create `bio.php`:

```php
<!DOCTYPE html>
<html>
<body>
<?php
$name = "Amina";
$age = 20;
echo "<h2>Student Bio</h2>";
echo "<p>Name: $name</p>";
echo "<p>Age: $age</p>";
?>
</body>
</html>
```

* Visit `http://localhost/training/bio.php` and confirm the displayed data.

---

# 13. Short quiz (self-check)

1. What does PHP stand for?
2. Where does PHP code run — client or server?
3. What is `http://localhost/` used for?
4. Which folder did we use as the document root in Laragon?
5. How do you output text in PHP?

**Answers (don’t peek until you try):**

1. *PHP: Hypertext Preprocessor.*
2. *Server.*
3. *To access the local web server on your own machine.*
4. *`C:\laragon\www` (we used `training` inside it).*
5. *Using `echo` or `print`, e.g. `echo "Hello";`.*

---

# 14. Instructor tips & self-study guidance

* Encourage students to test small changes often: change a string, save, refresh browser. This immediate feedback helps learning.
* Use the browser DevTools Elements tab to see exactly what HTML was produced by PHP. It helps link server output to what the browser displays.
* When students see errors, teach them to read the error message first—often it indicates file and line number.
* Keep the `training` folder tidy: one small file per concept helps reduce confusion.

---

# 15. Troubleshooting & FAQs (expanded)

**Q: I installed Laragon but `http://localhost/` still shows an error.**
A: Check Laragon status — is Apache running? Try **Start All**. If ports conflict (e.g., Skype uses port 80), change Apache port in Laragon settings or close the program using the port.

**Q: PHP code shows but not executing — I see `<?php echo "Hello"; ?>` in my browser.**
A: You opened the file directly from the file system (file://). Be sure to use `http://localhost/...` so Apache runs the file through PHP.

**Q: How do I find Apache or PHP logs?**
A: In Laragon menu: **Apache → Logs** or look in `C:\laragon\bin\apache\apache-<version>\logs\error.log`. For PHP errors, check `php_error.log` if enabled.

**Q: I made a syntax error and the page is blank.**
A: Check Apache error logs and use VS Code’s editor — syntax highlighting and Intelephense usually mark mistakes. A missing semicolon or unmatched brace is common.

---

# 16. Assessment / Mini project (end of Day 1)

**Create a single page `index.php` in `training` that includes:**

* A heading (`<h1>`) with your name.
* A paragraph with 2–3 sentences about why you want to learn programming.
* A PHP block that sets a variable `$today` to the current date and prints: `Today is: <date>`. (Hint: use `echo date("Y-m-d");`)
* Ensure the page loads without errors at `http://localhost/training/index.php`.

**Instructor checklist to mark completion**

* File exists and loads.
* Heading displays correctly.
* Paragraph has at least two sentences.
* PHP date prints correctly.

---

# 17. Further reading & resources (suggestions)

* Official PHP manual (search “PHP manual”) — great reference for functions and language details.
* Laragon documentation and quickstart pages.
* VS Code docs for using the editor and extensions.
* Chrome DevTools documentation for debugging tips.

---

# 18. Ready-to-print summary (one-page)

* Programming = writing precise instructions. Break tasks into steps.
* The web uses Client (browser) ↔ Server (Apache) via HTTP.
* PHP runs on the server and outputs HTML to the browser.
* Steps to get started: install Laragon → start services → create `training` folder → create `hello.php` → visit `http://localhost/training/hello.php` → inspect with DevTools.
* Practice: create 3 greeting pages; create `bio.php`; build `index.php` mini project.
