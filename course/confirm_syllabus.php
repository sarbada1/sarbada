<?php
session_start();     
include "../dbcontroller.php";
$course= $_POST['courses'];
$id=$_POST['course_id'];
$pageid=$_POST["item_id"];


for ($i=0; $i < count($course); $i++) {
     
    $sql="INSERT INTO syllabus(cid,syllabus) VALUES('$id','$course[$i]')";
    $conn->query($sql);

    
}


header("location:display_syllabus.php?id=$id");


// Check connection
?>
