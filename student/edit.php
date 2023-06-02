<?php
session_start();


$name= $_POST['name'];
$city= $_POST['city'];
$gender= $_POST['gender'];
$country= $_POST['country'];

$id= $_POST['id'];


include "../dbcontroller.php";


$sql = "UPDATE student SET name='$name', city='$city', gender='$gender', country='$country' WHERE Sid='$id'";



$conn->query($sql);

$_SESSION['edit_student']="Student record edited successfully";
header("Location:display_student.php");
?>