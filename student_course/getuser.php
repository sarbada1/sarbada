<?php



$id = $_GET['q'];
include "../dbcontroller.php";
// Retrieve data from the database
$query = "SELECT * FROM student_course JOIN students ON student_course.sid=students.Sid WHERE cid='$id' ";
$result = $conn->query($query);
$result1 = $conn->query($query);



$rowcount = mysqli_num_rows($result);
if ($rowcount == 0) {
    echo '<div class="w-75 alert alert-warning alert-dismissible fade show" style="margin-left:300px" role="alert">
    <strong>Sorry!</strong> No result found.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    die();
}

?>


<body>
  
       <div>
        <?php if (isset($message)) {
            echo $message;
        } ?>
    </div>
        <form action="" method="post" style="margin-left:250px;width:80%">

            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="checkAl"> Select All</th>
                        <th scope="col">S.N</th>

                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">City</th>

                    </tr>
                </thead>

                <?php
                $i = 1;
                // Loop through the results and display them in a table row
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $data["scid"]; ?>">
                            </td>
                            <td>
                                <?php echo $i++ ?>
                            </td>
                            <td>
                                <?php echo $row["name"]; ?>
                            </td>
                            <td>
                                <?php echo $row["gender"]; ?>
                            </td>
                            <td>
                                <?php echo $row["city"]; ?>
                            </td>



                        </tr>
                        </tbody>
                        <?php
                }
                ?>
            </table>
            <p style="align:center"><button type="submit" class="btn btn-success" name="save">DELETE</button></p>
        </form>
        <?php
        include "../footer.php"; ?>
</body>

</html>