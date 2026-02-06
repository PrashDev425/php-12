<?php
$conn = mysqli_connect("localhost", "root", "", "school_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM students WHERE student_id = 0";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    $student = mysqli_fetch_assoc($result);
    echo "First Name: " . $student['first_name'] . "<br>";
    echo "Last Name: " . $student['last_name'] . "<br>";
    echo "Gender: " . $student['gender'] . "<br>";
    echo "DOB: " . $student['dob'] . "<br>";
    echo "Department: " . $student['department'] . "<br>";
    echo "Admission Year: " . $student['admission_year'] . "<br>";
    echo "Marks: " . $student['marks'] . "<br>";
} else {
    echo "No record found.";
}
mysqli_close($conn);
?>
