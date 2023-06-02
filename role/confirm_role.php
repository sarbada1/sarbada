
<?php

include "../dbcontroller.php";

if(isset($_POST['add_role'])){

$role = $_POST['role'];

$sql="INSERT into role (role) values ('$role')";
$result=$conn->query($sql);



  // Insert the data into the database



}

header("location:add_role.php");
?>
