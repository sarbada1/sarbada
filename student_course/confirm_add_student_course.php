
<?php
session_start();


$id= $_POST['id'];

$cid=$_POST['course'];

$duration = $_POST['course_start'];
$price = $_POST['course_price'];


include "../dbcontroller.php";

  // Insert the data into the database
$query = "INSERT INTO student_course (sid,cid,price_given,start) VALUES ('$id','$cid', '$price', '$duration')";
$conn->query($query);

$_SESSION['add_course']="Course added successfully";
 header("location:display_student_course.php?sid=$id");
?>