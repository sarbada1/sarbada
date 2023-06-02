<?php
session_start();


$fee= $_POST['fee_given'];
$date= $_POST['course_date'];

$id= $_POST['id'];


include "../dbcontroller.php";
// Check connection


$sql = "UPDATE payment SET paid='$fee', date='$date' WHERE pid='$id'";



$conn->query($sql);
$_SESSION['edit']="Payment edited successfully";
header("Location: ../student/display_student.php");
?>