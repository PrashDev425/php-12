<?php
$conn = mysqli_connect("localhost", "root", "", "school_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO students (first_name, last_name, gender, dob, department, admission_year, marks)
        VALUES ('Prakash', 'Shrestha', 'Male', '2002-03-15', 'Computer Science', 2020, 80)";

if (mysqli_query($conn, $sql)) {
    echo "Records inserted successfully.";
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>
