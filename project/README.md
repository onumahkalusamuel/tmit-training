# Attendance System

This application will track the attendance of students in a particular school.

## Requirements
* PHP (>=8.0)
* MySQL (>=8.0)
* Apache Server

These requirements are already met if you have `Xampp` or `Laragon` properly installed and configured.

## Database Structure

What do we need for an attendance system.
* Record of students
* Record of daily attendance (register)
* Generate daily reports
* Generate reports by date range


```sql
CREATE TABLE IF NOT EXISTS students (
    id INT(11) NOT NULL AUTO_INCREMENT,
    matric_no VARCHAR(191) NOT NULL,
    first_name VARCHAR(191) NOT NULL,
    last_name VARCHAR(191) NOT NULL,
    middle_name VARCHAR(191) DEFAULT NULL,
    bio TEXT DEFAULT NULL,
    department VARCHAR(191) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS attendance_register (
    id INT(11) NOT NULL AUTO_INCREMENT,
    student_id INT(11) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
);
```



## Folder and Files Structure
```txt
|-README.md
|-index.php // display the attendance marking page.
|-admin/
  |-index.php // display the attendance for today by default.
  |-statistics.php // show statistics of login. average. percentage.
|-db/
  |-dbcon.php

```

Requirements for marking attendance:
* Lastname
* Matric no


## Deployment instructions

```bash
# To check php version
php -v
```