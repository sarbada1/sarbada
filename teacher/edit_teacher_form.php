<?php
$base_url = "http:/college/";

$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "S@rb@d@123$%^&";
$dbname = "student_record";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

$sql = "SELECT * from teacher WHERE tid='$id'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    ?>

<h2>Edit Form</h2>
<div class="nav">
<?php include "../nav.php";?>
</div>

           

               
                <form action="<?php echo $base_url ?>teacher/edit_teacher.php" method="post"
                   >

                    <label for="name">Name</label>
                    <input type="text" id="name" name="t_name" value="<?php echo $row['name']?>" required>

                    <label for="course">Course</label>
                    <select name="course" id="course">
                        <option>---Select Course---</option>
                        <?php
                        $sql1 = "SELECT * from course";
                        $result1 = $conn->query($sql1);
                        while ($row1 = $result1->fetch_assoc()) {

                            ?>
                           <option value="<?php echo $row1['title'] ?>" <?php if ($row['course_teach'] == $row1['title']) {
                               echo "selected";
                           } ?>><?php echo $row1['title'] ?></option>
                        <?php
                        }
                        ?>
                        </option>
                    </select>

                    <label for="img">Image</label>
                    <input type="file" id="img" name="image" value="<?php echo $row['image']?>" required>

                    <input type="hidden" name='id' value='<?= $row['tid'] ?>' hidden>

                    <input type="submit" name="add_teacher" value="Edit">
                </form>




           
        </div>
        <!-- end app -->

        <!-- plugins -->
        <script src="assets/js/vendors.js"></script>

        <!-- custom app -->

        </div>
        <script src="assets/js/app.js"></script>
    </body>


    </html>
    <?php
}
?>