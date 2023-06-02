<?php

include "../dbcontroller.php";

$id= $_GET['id'];


$sql = "DELETE FROM login WHERE id='$id'";

$conn->query($sql);





header("Location: display_user.php");
?>