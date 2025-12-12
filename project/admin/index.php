<?php
require_once '../db/dbcon.php';
// take filters from GET.
// which we will be looking at from and to.
// fetch the attendance with students table joined in order to get student names
// default range is today from early morninf to now.
$fromDate = ($_GET['from'] ?? date('Y-m-d')) . ' 00:00:00';
$toDate = ($_GET['to'] ?? date('Y-m-d')) . date(' H:i:s');

$query = <<<SQL
            SELECT ar.*, s.first_name, s.last_name, s.matric_no 
            FROM attendance_register AS ar 
            JOIN students AS s ON ar.student_id = s.id 
            WHERE DATE(ar.created_at) >= ? AND DATE(ar.created_at) <= ? 
            ORDER BY ar.created_at DESC
        SQL;

$stmt = $dbcon->prepare($query);
$stmt->bind_param("ss", $fromDate, $toDate);

$stmt->execute();
$result = $stmt->get_result();
$attendanceRecords = [];
while ($row = $result->fetch_assoc()) {
    $attendanceRecords[] = $row;
}
$stmt->close();
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

        table td {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="nav">
        <a href="../index.php">Home</a> |
        <a href="index.php">Records</a> |
        <a href="statistics.php">Statistics</a>
    </div>
    <div class="page">
        <div class="container">
            <h1>Attendance Records</h1>
            <form method="GET">
                <div class="form-group">
                    <label for="from" style="width: 50px">From</label>
                    <input type="date" id="from" name="from" value="<?php echo htmlspecialchars($_GET['from'] ?? date('Y-m-d')); ?>">
                </div>

                <div class="form-group">
                    <label for="to" style="width: 50px">To</label>
                    <input type="date" id="to" name="to" value="<?php echo htmlspecialchars($_GET['to'] ?? date('Y-m-d')); ?>">
                </div>
                <button type="submit">Filter</button>
            </form>
            <table border="1" cellpadding="5" cellspacing="0">
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Matric No</th>
                    <th>Timestamp</th>
                </tr>
                <?php if (!empty($attendanceRecords)): ?>
                    <?php foreach ($attendanceRecords as $record): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($record['id']); ?></td>
                            <td><?php echo htmlspecialchars($record['first_name'] . ' ' . $record['last_name']); ?></td>
                            <td><?php echo htmlspecialchars($record['matric_no']); ?></td>
                            <td><?php echo htmlspecialchars($record['created_at']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" style="padding:30px 0px">
                            No records found for the selected period
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