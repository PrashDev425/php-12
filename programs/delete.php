<?php
$conn = mysqli_connect("localhost", "root", "", "school_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$student_id = 3; // record to delete
$sql = "DELETE FROM students WHERE student_id = $student_id";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully.";
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
