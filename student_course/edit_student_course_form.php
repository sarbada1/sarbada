<?php
include "../dbcontroller.php";
$id = $_GET['id'];

$sql = "SELECT * FROM student_course WHERE scid='$id'";

$result = $conn->query($sql);
$row=$result->fetch_Assoc();

?>
<html>
<?php
include "../header.php";

?>

<body>

    <?php
    include "../nav.php";

    ?>


    <h2>Edit Student Course </h2>
    <div class="card w-25 mx-auto py-5">
        <form action="edit_student_course.php" method="post" class="px-4">

            <label for="course">Course:</label>

            <select class="form-control" name="course" id="course">
                <option>---Select Course---</option>
                <?php

                $sql1 = "SELECT * FROM course";

                $result1 = $conn->query($sql1);
                while ($row1 = $result1->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row1['cid'] ?>" <?php if ($row['cid'] == $row1['cid']) {
                           echo "selected";
                       } ?>><?php echo $row1['title'] ?></option>
                    <?php
                }
                ?>


            </select>
            <div class="form-group">
                <label for="price">Fee given</label>
                <input type="number" id="price" name="course_price" value="<?php echo $row['price_given'] ?>"
                    class="form-control" required>
            </div>
            <div class="form-group">
                <label for="start">Start Duration</label>
                <input type="date" id="start" name="course_start" value="<?php echo $row['start'] ?>"
                    class="form-control datepicker" required>
            </div>
            <input type="hidden" name='id' value='<?= $row['scid'] ?>' hidden>

            <button class="btn btn-primary" type="submit" value="Submit">Submit</button>

        </form>
    </div>

</body>
<?php
include "../footer.php";

?>

</html>