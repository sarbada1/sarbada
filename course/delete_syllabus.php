<?php
session_start();
include "../dbcontroller.php";

$id=$_GET['id'];


$sql = "DELETE FROM syllabus WHERE sid='$id'";

$conn->query($sql);

$_SESSION['delete_syllabus']='Syllabus deleted successfully';
header("location:display_course.php?");
?>