<?php

include "../dbcontroller.php";






?>
<html>
<?php
include "../header.php";

?>


<body>


	<?php include "../nav.php"; ?>
	<h2>Course Form</h2>
	<div class="card w-25 mx-auto py-3">

		<form  action="confirm_role.php" method="post" enctype="multipart/form-data" class="px-3">
			<div class="form-group">
				<label for="role">Role</label>
				<input type="text" id="role" class="form-control" name="role" required>
			</div>
			
			



			<button class="btn btn-primary" type="submit" name="add_role" value="Submit">Add role</button>
		</form>
	</div>
	<?php
	include "../footer.php";

	?>
</body>

</html>