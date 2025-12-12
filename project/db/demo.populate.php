<?php
// this will populate demo data into the database
require_once 'dbcon.php';
// full student information(matric_no, first_name, last_name, middle_name optional, bio, department)
$students = [
    ['MAT001', 'John', 'Doe', 'A', 'Bio of John Doe', 'Computer Science'],
    ['MAT002', 'Jane', 'Smith', 'B', 'Bio of Jane Smith', 'Electrical Engineering'],
    ['MAT003', 'Alice', 'Johnson', '', 'Bio of Alice Johnson', 'Computer Engineering'],
    ['MAT004', 'Bob', 'Brown', 'C', 'Bio of Bob Brown', 'Computer Engineering'],
    ['MAT005', 'Charlie', 'Davis', '', 'Bio of Charlie Davis', 'Computer Science'],
];

$studentIds = [];

foreach ($students as $student) {
    $matricNo = $student[0];
    $firstName = $student[1];
    $lastName = $student[2];
    $middleName = $student[3];
    $bio = $student[4];
    $department = $student[5];

    $query = "INSERT INTO students (matric_no, first_name, last_name, middle_name, bio, department) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $dbcon->prepare($query);
    $stmt->bind_param("ssssss", $matricNo, $firstName, $lastName, $middleName, $bio, $department);

    if ($stmt->execute()) {
        // insert id in studentIds
        $studentIds[] = $dbcon->insert_id;
        echo "Inserted student: $firstName $lastName\n";
    } else {
        echo "Error inserting student: " . $stmt->error . "\n";
    }
}

// populate attendance records for demo purposes. use loops and populate for 20 days for all atudents, randomly skipping some students to create absences.
$days = 20;
for ($day = 1; $day <= $days; $day++) {
    $date = date('Y-m-d', strtotime("-$day days"));
    foreach ($studentIds as $studentId) {
        // randomly skip some students to create absences
        if (rand(0, 1) == 0) {
            continue;
        }
        
        $attendanceQuery = "INSERT INTO attendance_register (student_id, created_at) VALUES (?, ?)";
        $stmt = $dbcon->prepare($attendanceQuery);
        $stmt->bind_param("is", $studentId, $date);
        if ($stmt->execute()) {
            echo "Inserted attendance for student with id $studentId on $date\n";
        } else {
            echo "Error inserting attendance for student with id $studentId on $date: " . $stmt->error . "\n";
        }
    }
}

$stmt->close();
