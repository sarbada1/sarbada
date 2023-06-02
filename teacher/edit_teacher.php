<?php
session_start();

$base_url = "http:/college";
$course=$_POST['course'];
$name= $_POST['t_name'];
$image= $_POST['image'];
$id= $_POST['id'];
 

$servername = "localhost";
$username = "root";
$password = "S@rb@d@123$%^&";
$dbname = "student_record";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 

// Check connection


$sql = "UPDATE teacher SET name='$name', image='$image', course_teach='$course' WHERE tid='$id'";



$conn->query($sql);
$_SESSION['success']="Edited successfully";
header("Location: $base_url/teacher/show_teacher.php");
?>