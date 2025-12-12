<?php
// processing the attendance 
require_once 'db/dbcon.php';

// keep message variables for ease 
$error = "";
$success = "";

// check if form is submitted
if (!empty($_POST)) {

    $lastName = $_POST['lastName'] ?? '';
    $matricNo = $_POST['matricNo'] ?? '';
    // variable to checking validity 
    $isValid = true;

    // simple validation
    if (empty($lastName) || empty($matricNo)) {
        $error = "Please fill in all fields.";
        $isValid = false;
    }

    // get the student
    if ($isValid) {
        $studentQuery = "SELECT * FROM students WHERE last_name = ? AND matric_no = ? LIMIT 1";
        $stmt = $dbcon->prepare($studentQuery);
        $stmt->bind_param("ss", $lastName, $matricNo);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            $error = "Student not found. Please check your details.";
            $isValid = false;
        } else {
            // student found
            $student = $result->fetch_assoc();
        }
    }

    // check if student has marked attendance already for today
    if ($isValid) {
        $today = date('Y-m-d');
        $checkQuery = "SELECT * FROM attendance_register WHERE student_id = ? AND DATE(created_at) = ?";
        $stmt = $dbcon->prepare($checkQuery);
        $stmt->bind_param("is", $student['id'], $today);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error = "Attendance already marked for today.";
            $isValid = false;
        }
    }

    // prepare and bind for marking attendance
    if ($isValid) {
        $stmt = $dbcon->prepare("INSERT INTO attendance_register (student_id) VALUES (?)");
        $stmt->bind_param("i", $student['id']);

        // execute the statement
        if ($stmt->execute()) {
            $success = "Attendance marked successfully.";
        } else {
            $error = "Error: " . $stmt->error;
        }
    }
    // close the statement
    if($stmt) $stmt->close();
}

?>
<html>

<head>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: #fff;
            padding: 5px 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            width: 360px;
            margin-top: 50px;
            text-align: center;
        }

        .message {
            margin-bottom: 10px;
            font-weight: bold;
            border: 1px solid #eee;
            padding: 5px;
            border-radius: 5px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .form-group {
            display: flex;
            text-align: left;
            gap: 10px;
            align-items: center;
        }

        .form-group>input {
            flex: 1;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Class Attendance</h2>

        <?php if (!empty($error)): ?>
            <div style="color: red;" class="message">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($success)): ?>
            <div style="color: green;" class="message">
                <?php echo $success; ?>
            </div>
        <?php endif; ?>

        <form method="POST">

            <div class="form-group">
                <label for="lastNameField">Last name</label>
                <input placeholder="Last name" type="text" name="lastName" id="lastNameField" />
            </div>

            <div class="form-group">
                <label for="matricNoField">Matric No.</label>
                <input placeholder="Matric No." type="text" name="matricNo" id="matricNoField" />
            </div>

            <button type="submit">Mark Attendance</button>
        </form>
    </div>
</body>

</html>