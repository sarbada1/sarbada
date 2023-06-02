<?php
include "../dbcontroller.php";

$sql = "SELECT * FROM course";

$result = $conn->query($sql);

?>
<html>
<?php
include "../header.php";

?>

<body>

	<?php
	include "../nav.php";

	?>


	<h2>Student Course Form</h2>
	<div class="card w-25 mx-auto py-5">
		<form action="confirm_add_student_course.php" method="post" class="px-4">

			<input type="text" name="id" value="<?= $_GET['sid'] ?>">




			<label for="course">Course:</label>

			<select class="form-control" name="course" id="course">
				<option>---Select Course---</option>
				<?php

				while ($row = $result->fetch_assoc()) {
					?>
					<option value="<?php echo $row['cid'] ?>"><?php echo $row['title'] ?></option>
					<?php
				}
				?>

				
			</select>
			<div class="form-group">
				<label for="price">Total fee</label>
				<input type="number" id="price" name="course_price" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="start">Start Duration</label>
				<input type="date" id="start" name="course_start" class="form-control datepicker" required>
			</div>



			<button class="btn btn-primary" type="submit" value="Submit">Submit</button>
			
		</form>
	</div>

</body>
<?php
include "../footer.php";

?>

</html>