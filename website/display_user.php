<?php
include "../dbcontroller.php";

// Retrieve data from the database
$query = "SELECT * FROM login ";
$result = $conn->query($query);

// Check for form submission
if (isset($_POST['submit'])) {
    // Loop through each row and update the role
    foreach ($_POST['role'] as $id => $role) {
        $query = "UPDATE login SET role = '$role' WHERE id = $id";
        $conn->query($query);
    }

    // Display success message
    $message = "<div class='alert alert-success'>Roles updated successfully</div>";
}

?>
<html>
<?php include "../header.php"; ?>

<body>
    <?php include "../nav.php"; ?>

    <h2>Course record</h2>

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
                    <th>S.N</th>
                    <th>Username</th>
                    <th>Email</th>
             
                    <th>Assigned role</th>
                    <th>Action</th>
                </tr>
            </thead>

            <?php
            $i = 1;

            while ($row = $result->fetch_assoc()) {
                // Retrieve role data from the database for each row
                $query = "SELECT * FROM role";
                $roles = $conn->query($query);

                ?>
                <tbody>
                    <tr>
                        <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["id"]; ?>"></td>
                        <td>
                            <?php echo $i++ ?>
                        </td>
                        <td>
                            <?php echo $row["username"]; ?>
                        </td>
                        <td>
                            <?php echo $row["email"]; ?>
                        </td>
                      
                        <td>
                            <a href="role.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Add role"><i class="fa fa-table"></i></a>
                        </td>
                        <td>
                            <a href="delete_user.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>

        <button class="btn btn-primary" type="submit" name="submit">Save Roles</button>
    </form>

    <?php include "../footer.php"; ?>
</body>

</html>
