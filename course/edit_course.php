<?php
$base_url = "http:/college";

$course = $_POST['course'];
$duration = $_POST['course_duration'];
$price = $_POST['course_price'];

$id= $_POST['id'];


$servername = "localhost";
$username = "root";
$password = "S@rb@d@123$%^&";
$dbname = "student_record";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


$sql = "UPDATE course SET title='$course', duration='$duration', price='$price' WHERE cid='$id'";



$conn->query($sql);
header("Location: $base_url/course/display_course.php");
?>