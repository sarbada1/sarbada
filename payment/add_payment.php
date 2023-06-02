<?php
include "../nav.php";
include "../dbcontroller.php";
include "../header.php";

$scid = $_GET['scid'];

// Calculate the total payment for this student-course
$sql = "SELECT student_course.cid, SUM(payment.paid) AS total_payment
        FROM student_course
        INNER JOIN payment ON student_course.scid = payment.scid
        WHERE student_course.scid = '$scid'
        GROUP BY student_course.cid";
$result = mysqli_query($conn, $sql);

// Calculate the remaining fee for this student-course
$sql = "SELECT price_given FROM student_course WHERE scid = '$scid'";
$result1 = mysqli_query($conn, $sql);
$row1 = mysqli_fetch_assoc($result1);
$total_price = intval($row1['price_given']);
$row = mysqli_fetch_assoc($result);
$total_payment = intval($row['total_payment']);
$remaining = $total_price - $total_payment;



?>

<html>

<head>
   
</head>
<script>
	function validate(){

		remaining_amount=document.getElementById("remained").value;
		payment_amount=document.getElementById("fee").value;

		if(remaining_amount>payment_amount){
			a=True
           

		}else{
			a=false
            alert("Please don't enter amount greater than remaining amount.")
		}
		
		return a
	}
	</script>
<body>
  
    <h2>Payment Form</h2>
    <div class="card w-50 mx-auto py-3">
        <form onsubmit="return validate()" action="confirm_payment.php" method="post" class="px-5">


            <input type="hidden" name='id' value='<?= $_GET['scid'] ?>'>


            <div class="form-group">

                <label for="remained">Fee remaining</label>
                <input type="text"  id="remained" class="form-control" value="<?php echo $remaining ?>" readonly>

            </div>

            <div class="form-group">
                <label for="fee">Fee Paid</label>
                <input type="number" min=1 id="fee" class="form-control" name="fee_given" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" id="date" class="form-control datepicker" name="course_date" required>
            </div>




            <button class="btn btn-primary" name="add_payment" type="submit" value="Submit">Submit</button>
        </form>
    </div>


    <?php
    include "../footer.php";

    ?>

</body>

</html>