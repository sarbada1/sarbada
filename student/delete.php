<?php
session_start();
include "../dbcontroller.php";

$id= $_GET['id'];


$sql = "DELETE FROM student WHERE Sid='$id'";

$conn->query($sql);




$_SESSION['delete_student']="Student record deleted successfully";
header("Location: display_student.php");
?>