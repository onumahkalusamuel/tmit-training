<?php
require_once '../db/dbcon.php';

// take filters from GET for the date range.
$fromDate = $_GET['from'] ?? date('Y-m-d');
$toDate = $_GET['to'] ?? date('Y-m-d');

// Construct the full datetime strings for the SQL query
$fromDateTime = $fromDate . ' 00:00:00';
$toDateTime = $toDate . ' 23:59:59'; // Changed to 23:59:59 to include the whole 'To' day

// --- 1. Total number of attendance records (logins) in the period ---
$totalRecords = 0;
$queryTotalRecords = "SELECT COUNT(*) AS total_records FROM attendance_register WHERE created_at >= ? AND created_at <= ?";
$stmtTotalRecords = $dbcon->prepare($queryTotalRecords);
$stmtTotalRecords->bind_param("ss", $fromDateTime, $toDateTime);
$stmtTotalRecords->execute();
$resultTotalRecords = $stmtTotalRecords->get_result()->fetch_assoc();
$totalRecords = $resultTotalRecords['total_records'];
$stmtTotalRecords->close();

// --- 2. Total unique students who marked attendance in the period ---
$uniqueStudentsAttended = 0;
$queryUniqueStudents = "SELECT COUNT(DISTINCT student_id) AS unique_students FROM attendance_register WHERE created_at >= ? AND created_at <= ?";
$stmtUniqueStudents = $dbcon->prepare($queryUniqueStudents);
$stmtUniqueStudents->bind_param("ss", $fromDateTime, $toDateTime);
$stmtUniqueStudents->execute();
$resultUniqueStudents = $stmtUniqueStudents->get_result()->fetch_assoc();
$uniqueStudentsAttended = $resultUniqueStudents['unique_students'];
$stmtUniqueStudents->close();

// --- 3. Total number of students in the system (for attendance percentage) ---
$totalStudentsInSystem = 0;
$queryTotalStudents = "SELECT COUNT(*) AS total_students FROM students";
$resultTotalStudents = mysqli_query($dbcon, $queryTotalStudents);
$rowTotalStudents = mysqli_fetch_assoc($resultTotalStudents);
$totalStudentsInSystem = $rowTotalStudents['total_students'];

// --- 4. Number of attendance days in the period ---
// Use the dates selected by the user
$date1 = new DateTime($fromDate);
$date2 = new DateTime($toDate);
// Calculate the difference in days. +1 to include the end date itself.
$interval = $date1->diff($date2);
$numberOfDays = $interval->days + 1;

// --- Calculate Summary Statistics ---
// Average Attendance per Day (Total Records / Number of Days)
$averageAttendancePerDay = 0;
if ($numberOfDays > 0) {
    $averageAttendancePerDay = round($totalRecords / $numberOfDays, 2);
}

// Attendance Percentage (Unique Students Attended / Total Students in System * 100)
$attendancePercentage = 0;
if ($totalStudentsInSystem > 0) {
    // This calculates the percentage of the *total student body* who attended *at least once* during the period.
    $attendancePercentage = round(($uniqueStudentsAttended / $totalStudentsInSystem) * 100, 2);
}

// --- 5. Per-Student Attendance Breakdown ---
$studentAttendance = [];
// Query to get all students and their attendance count (distinct days) in the period
$queryStudentAttendance = <<<SQL
    SELECT 
        s.first_name, 
        s.last_name, 
        s.matric_no, 
        COUNT(DISTINCT DATE(ar.created_at)) AS days_present 
    FROM students AS s 
    LEFT JOIN attendance_register AS ar 
        ON s.id = ar.student_id 
        AND ar.created_at >= ? 
        AND ar.created_at <= ?
    GROUP BY s.id, s.first_name, s.last_name, s.matric_no
    ORDER BY s.last_name ASC
SQL;

$stmtStudentAttendance = $dbcon->prepare($queryStudentAttendance);
$stmtStudentAttendance->bind_param("ss", $fromDateTime, $toDateTime);
$stmtStudentAttendance->execute();
$resultStudentAttendance = $stmtStudentAttendance->get_result();

while ($row = $resultStudentAttendance->fetch_assoc()) {
    $row['days_absent'] = $numberOfDays - $row['days_present'];
    $studentAttendance[] = $row;
}
$stmtStudentAttendance->close();


// Reset the date variables to just the date part for HTML form values
$fromDate = htmlspecialchars($fromDate);
$toDate = htmlspecialchars($toDate);

?>
<html>

<head>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        .page,
        .nav {
            display: flex;
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
            width: 520px;
        }

        .page {
            height: 95vh;
            overflow-y: hidden;
            background-color: #fff;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .nav {
            background-color: #333;
            color: #28a745;
            align-items: center;
            height: 5vh;
        }

        .nav a {
            color: #28a745;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        .container {
            width: 100%;
            padding-left: 20px;
            padding-right: 20px;
            height: 95vh;
            overflow: scroll;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .stats-table td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #eee;
        }

        .stats-table th {
            text-align: left;
            padding: 8px;
            background-color: #f2f2f2;
        }

        .stats-value {
            font-weight: bold;
            text-align: right !important;
        }
        
        /* New style for the per-student table */
        .student-breakdown th, .student-breakdown td {
            border: 1px solid #ccc;
            text-align: center;
            padding: 8px;
        }
    </style>
</head>

<body>
    <div class="nav">
        <a href="../index.php">Home</a> |
        <a href="index_2.php">Records</a> |
        <a href="statistics.php">Statistics</a>
    </div>
    <div class="page">
        <div class="container">
            <h1>Attendance Statistics</h1>
            <form method="GET" action="statistics.php">
                <div class="form-group">
                    <label for="from" style="width: 50px">From</label>
                    <input type="date" id="from" name="from" value="<?php echo $fromDate; ?>">
                </div>

                <div class="form-group">
                    <label for="to" style="width: 50px">To</label>
                    <input type="date" id="to" name="to" value="<?php echo $toDate; ?>">
                </div>
                <button type="submit">Filter</button>
            </form>
            
            <h2>Results for:<br/> <?php echo $fromDate; ?> to <?php echo $toDate; ?> (<?php echo $numberOfDays; ?> day(s))</h2>

            <table border="0" cellpadding="5" cellspacing="0" class="stats-table">
                <tr>
                    <th colspan="2">Summary</th>
                </tr>
                <tr>
                    <td>Total Students in System:</td>
                    <td class="stats-value"><?php echo $totalStudentsInSystem; ?></td>
                </tr>
                <tr>
                    <td>Number of Days in Range:</td>
                    <td class="stats-value"><?php echo $numberOfDays; ?></td>
                </tr>
                <tr>
                    <td>Total Attendance Records (Logins):</td>
                    <td class="stats-value"><?php echo $totalRecords; ?></td>
                </tr>
                <tr>
                    <td>Unique Students Attended (at least once):</td>
                    <td class="stats-value"><?php echo $uniqueStudentsAttended; ?></td>
                </tr>
                <tr>
                    <td>Average Attendance per Day:</td>
                    <td class="stats-value"><?php echo $averageAttendancePerDay; ?></td>
                </tr>
                <tr>
                    <td>Attendance Percentage (Unique/Total Students):</td>
                    <td class="stats-value"><?php echo $attendancePercentage; ?>%</td>
                </tr>
            </table>

            <h3>Attendance Breakdown by Student</h3>
            <table cellpadding="5" cellspacing="0" class="student-breakdown">
                <tr>
                    <th>Student Name</th>
                    <th>Matric No</th>
                    <th>Days Present</th>
                    <th>Days Absent</th>
                    <th>Attendance %</th>
                </tr>
                <?php if (!empty($studentAttendance)): ?>
                    <?php foreach ($studentAttendance as $record): 
                        // Calculate percentage for the individual student
                        $studentPresentPercent = ($numberOfDays > 0) 
                            ? round(($record['days_present'] / $numberOfDays) * 100, 2) 
                            : 0;
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($record['last_name'] . ', ' . $record['first_name']); ?></td>
                            <td><?php echo htmlspecialchars($record['matric_no']); ?></td>
                            <td><?php echo htmlspecialchars($record['days_present']); ?></td>
                            <td><?php echo htmlspecialchars($record['days_absent']); ?></td>
                            <td><?php echo $studentPresentPercent; ?>%</td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" style="padding:30px 0px">
                            No student records found.
                        </td>
                    </tr>
                <?php endif; ?>
            </table>
            <br />
            <br />
        </div>
    </div>
</body>

</html>