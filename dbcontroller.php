<?php
 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$base_url = "http:/college";
$servername = "localhost";
$username = "root";
$password = "S@rb@d@123$%^&";
$dbname = "student_record";

$conn = new mysqli($servername, $username, $password, $dbname);




?>