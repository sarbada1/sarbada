<?php
$base_url = "http:/college";
$servername = "localhost";
$username = "root";
$password = "S@rb@d@123$%^&";
$dbname = "student_record";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$id= $_GET['id'];


$sql = "DELETE FROM course WHERE cid='$id'";

$conn->query($sql);
header("Location: $base_url/course/display_course.php");
?>