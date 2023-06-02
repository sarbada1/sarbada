<?php

include "../dbcontroller.php";

$sql = "SELECT * FROM course";

$result = $conn->query($sql);




?>
<?php
include "../dbcontroller.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $course = test_input($_POST["course"]);
  $duration = test_input($_POST["course_duration"]);
  $price = test_input($_POST["course_price"]);
  $time = test_input($_POST["course_time"]);

  if (empty($course) || empty($duration) || empty($price) || empty($time)) {
    echo "All fields are required";
  } 
  elseif (!preg_match("/^[a-zA-Z ]*$/", $course)) {
    echo "<script>alert('Only letters and white space allowed in Course field.')</script>";
    echo "<script>windows.location.href='add_course.php';</script>";

  }

  else {
    // perform database operations

    // Check if the file was uploaded successfully
    if ($_FILES['course_image']['error'] === UPLOAD_ERR_OK) {
      $tmp_name = $_FILES["course_image"]["tmp_name"];
      $target_dir = "C:/xampp/htdocs/college/imgcourse/";
      $file_image = basename($_FILES["course_image"]["name"]);
      $target_file = $target_dir . $file_image;
      $db_image = "imgcourse/" . $file_image;

      // Move the uploaded file to the target directory
      if(move_uploaded_file($tmp_name, $target_file)){
        // Insert the data into the database
        $insert = "INSERT INTO course (title, price, duration, course_img) VALUES ('$course','$price','$duration','$db_image')"; 
        if (!$conn->query($insert)) {
          echo "Error: " . $insert . "<br>" . $conn->error;
        } else {
          header("location: display_course.php");
        }
      } else {
        echo "Error moving uploaded file.";
      }
    } else {
      echo "Error uploading file.";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<html>
<?php
include "../header.php";

?>


<body>


	<?php include "../nav.php"; ?>
	<h2>Course Form</h2>
	<div class="card w-50 mx-auto py-3">

		<form  action="" method="post" enctype="multipart/form-data" class="px-3">
			<div class="form-group">
				<label for="name">Course title</label>
				<input type="text" id="name" class="form-control" name="course" required>
			</div>
			<div class="form-group">
				<label for="city">Course Duration</label>
				<input type="text" id="city" class="form-control" name="course_duration" required>
			</div>
			<div class="form-group">
				<label for="phone">Course Price</label>
				<input type="number" id="phone" class="form-control" name="course_price" required>
			</div>
			<div class="form-group">
				<label for="time">Course Time</label>
				<select id="time" class="form-control" name="course_time">
					<option value="" selected>---Select time---</option>
					<option value="morning">Morning</option>
					<option value="afternoon">Afternoon</option>
					<option value="evening">Evening</option>
				</select>
			</div>
			<div class="form-group">
				<label for="img">Course Image</label>
				<input type="file" id="img" class="form-control" name="course_image" required>
			</div>



			<button class="btn btn-primary" type="submit" name="add_course" value="Submit">Add course</button>
		</form>
	</div>
	<?php
	include "../footer.php";

	?>
</body>

</html>

