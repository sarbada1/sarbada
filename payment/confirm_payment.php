<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ob_start();


$id= $_POST['id'];


$fee= $_POST['fee_given'];
$date= $_POST['course_date'];

include "../dbcontroller.php";


$sql1="INSERT INTO payment(scid,paid,date) values ('$id','$fee','$date')";
$result=$conn->query($sql1);






$_SESSION['success']="Payment added successfully";
header("Location: ../student/display_student.php");


?>