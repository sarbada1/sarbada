<?php
session_start();

$base_url = "http:/college";
$servername = "localhost";
$username = "root";
$password = "S@rb@d@123$%^&";
$dbname = "student_record";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$id= $_GET['id'];


$sql = "DELETE FROM student_course WHERE scid='$id'";

$conn->query($sql);

$_SESSION['delete_success']="Deleted successfully";
header("Location: $base_url/student/display_student.php");
?>