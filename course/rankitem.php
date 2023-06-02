<?php
include "../dbcontroller.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pageid=$_POST["pageid"];
 
    if(isset($_POST['item_id'])){
    $ids = $_POST['item_id'];
     
    $idsc = explode(",", $ids);
   

    $i = 1;
    foreach($idsc as $id){
        $query = "UPDATE `syllabus` SET `rank` = '$i' WHERE `sid` = '$id'";
        $result = $conn->query($query);
        
        $i++;
    }

    header("location:display_syllabus.php?id=$pageid");
}

}

?>