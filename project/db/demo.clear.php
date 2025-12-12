<?php
// note: this operation wipes the entire data and truncates the tables
require_once dirname(__FILE__) . '/dbcon.php';

$tables = ['students', 'attendance_register'];
foreach ($tables as $table) {
    $query = "TRUNCATE TABLE $table";
    if (mysqli_query($dbcon, $query)) {
        echo "Table '$table' truncated successfully.\n";
    } else {
        echo "Error truncating table '$table': " . mysqli_error($dbcon) . "\n";
    }
}
mysqli_close($dbcon);
