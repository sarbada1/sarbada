<?php
$id= $_GET['id'];


	include "../dbcontroller.php";

$sql= "SELECT * from course WHERE cid='$id'";
$result = $conn->query($sql);

while ($row=$result->fetch_assoc()){

?>

<head>
<?php
	include "../header.php";

	?>

</head>

<body>
 

<?php
	include "../nav.php";

	?>
 

<h2>Edit course form</h2>

	<div class="card w-50 mx-auto py-3">

		<form action="edit_course.php" method="post" enctype="multipart/form-data" class="px-3">
			<div class="form-group">
				<label for="name">Course title</label>
				<input type="text" id="name" class="form-control" name="course" value='<?=$row['title']?>' required>
			</div>
			<div class="form-group">
				<label for="city">Course Duration</label>
				<input type="text" id="city" class="form-control" name="course_duration" value='<?=$row['duration']?>' required>
			</div>
			<div class="form-group">
				<label for="phone">Course Price</label>
				<input type="number" id="phone" class="form-control" name="course_price" value='<?=$row['price']?>' required>
			</div>
			<div class="form-group">
				<label for="img">Course Image</label>
				<input type="file" id="img" class="form-control" name="course_image" value='<?=$row['course_img']?>' required>
			</div>
      <input type="hidden" name='id' value='<?=$row['cid']?>' hidden>


			<button class="btn btn-primary" type="submit" name="add_course" value="Submit">Add course</button>
		</form>
	</div>


   
  <?php
	include "../footer.php";

	?>
</body>


</html>
<?php
}
?>
