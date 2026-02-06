<?php
$conn = mysqli_connect("localhost", "root", "", "school_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE students SET marks = 95 WHERE student_id = 1;";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully.";
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
