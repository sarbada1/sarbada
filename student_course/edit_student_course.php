<?php
session_start();

$base_url = "http:/college";
$course_id=$_POST['course'];
$duration = $_POST['course_start'];
$price = $_POST['course_price'];
$id= $_POST['id'];
 

$servername = "localhost";
$username = "root";
$password = "S@rb@d@123$%^&";
$dbname = "student_record";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 

// Check connection


$sql = "UPDATE student_course SET cid='$course_id', price_given='$price' WHERE scid='$id'";



$conn->query($sql);
$_SESSION['success']="Edited successfully";
header("Location: $base_url/student/display_student.php");
?>