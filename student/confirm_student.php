<?php

session_start();

include "../dbcontroller.php";

include "../authentification.php";


if ($errors) {
  $_SESSION['errors']=$errors;

  header("location:add_student.php");
}
$_SESSION['old']=$old;



    $name = $_POST['name'];

    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $course_id = $_POST["course"];
    $course_price = $_POST["course_price"];
    $course_start = $_POST["course_start"];

    // Client-side validation

        // Server-side validation
    $query = "INSERT INTO student ( name, gender, country, city) VALUES( '$name', '$gender', '$country', '$city')";
    $result=$conn->query($query);
     
           
   
    $last_id = $conn->insert_id;
    $sql1 = "INSERT INTO student_course (sid, cid, price_given, start) VALUES ('$last_id','$course_id','$course_price','$course_start')";

$conn->query($sql1);
header("location:display_student.php");

?>