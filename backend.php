<?php
include("dbcontroller.php");

$deleteMsg='';

if(isset($_POST['checkedId']) && isset($_POST['deleteAll'])){
  $checkedId = $_POST['checkedId'];
  $deleteMsg = deleteMultipleData($conn, $checkedId);
}

if(!function_exists('deleteMultipleData')){
  function deleteMultipleData($conn, $checkedId){
    $checkedIdGroup = implode(',', $checkedId);
    $query1 = "DELETE FROM student WHERE Sid='$checkedIdGroup'";
    $result1 = $conn->query($query1);

    if($result1 == true){
      return "Selected data was deleted successfully";
    }
  }
}
?>
