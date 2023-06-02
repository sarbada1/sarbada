<?php
$base_url = "http:/college";
$servername = "localhost";
$username = "root";
$password = "S@rb@d@123$%^&";
$dbname = "student_record";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['add_teacher'])){
    $t_name = $_POST['t_name'];
    $course = $_POST["course"]; 

    $file=$_FILES["image"]["name"];
    $tmp_name=$_FILES["image"]["tmp_name"];
    $target_dir = "C:/xampp/htdocs/college/image/"; // absolute path to the target directory
    $target_file = $target_dir . basename($file);
    $db_image="image/".basename($file);
  
    
    if(move_uploaded_file($tmp_name, $target_file)){
        $insert ="INSERT into teacher (name, course_teach, image) VALUES ('$t_name','$course','$db_image')"; 
        $conn->query($insert);
    } else {
        echo "Error moving uploaded file.";
    }
} 

// Display status message 

header("Location: $base_url/teacher/show_teacher.php");
?>
