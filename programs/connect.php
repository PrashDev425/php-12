<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "", "school_db");
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully.";
// Check connection
mysqli_close($conn);
?>