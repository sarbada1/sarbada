<?php
session_start();
include "../dbcontroller.php";
$id= $_GET['id'];


$sql = "DELETE FROM payment WHERE pid='$id'";

$conn->query($sql);
$_SESSION['delete']="Payment deleted successfully";
header("Location: ../student/display_student.php");
?>