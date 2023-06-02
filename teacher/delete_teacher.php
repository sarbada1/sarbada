<?php
$base_url = "http:/college";

$servername = "localhost";
$username = "root";
$password = "S@rb@d@123$%^&";
$dbname = "student_record";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$id= $_GET['id'];


$sql = "DELETE FROM teacher WHERE tid='$id'";

$conn->query($sql);
header("Location: $base_url/teacher/show_teacher.php");
?>