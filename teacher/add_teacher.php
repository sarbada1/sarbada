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


    <h2>Add teacher form</h2>
    <div class="card w-25 mx-auto py-5">


        <form action="confirm_add_teacher.php" method="post" class="px-3" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="t_name" required>
            </div>
            <div class="form-group">
                <label for="course">Course</label>
                <select name="course" id="course" class="form-control">
                    <option>---Select Course---</option>
                    <?php

                    while ($row = $result->fetch_assoc()) {

                        ?>
                        <option value="<?php echo $row['title'] ?>"><?php echo $row['title'] ?></option>
                        <?php
                    }
                    ?>
                    </option>
                </select>
                <div class="form-group">
                    <label for="img">Image</label>
                    <input type="file" id="img" class="form-control" name="image" required>
                </div>



                <button class="btn btn-primary" type="submit" name="add_teacher" value="Submit">Add teacher</button>
        </form>
    </div>
</body>
<?php
include "../footer.php";

?>

</html>