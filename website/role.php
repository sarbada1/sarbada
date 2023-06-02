<?php
include "../dbcontroller.php";

// Retrieve data from the database

// Check if id is present in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve user data from the database
    $query = "SELECT * FROM login WHERE id = '$id'";
    $result = $conn->query($query);

    // Check if user exists in the database
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Check for form submission
        if (isset($_POST['submit'])) {
            $role = $_POST['role'];

            // Update the login table with the selected role
            $query = "UPDATE login SET usertype='$role' WHERE id='$id'";
            $result = $conn->query($query);

            if ($result) {
                $message = "<div class='alert alert-success'>Role updated successfully!</div>";
            } else {
                $message = "<div class='alert alert-danger'>Failed to update role.</div>";
            }
        }
    } else {
        // User not found in the database
        header("Location: display_user.php");
        exit();
    }
} else {
    // ID not present in the URL
    header("Location: display_user.php");
    exit();
}

?>

<html>
<?php
include "../header.php";
?>


<body>

    <?php include "../nav.php"; ?>
    <h2>Assigned role</h2>
    <div class="card w-25 mx-auto py-3">

        <form action="" method="post">
            <select name="role" class="form-control w-50 mx-5 mt-4">
                <option>--Select role--</option>
                <?php
                $sql = "SELECT * FROM role";
                $result1 = $conn->query($sql);
                while ($row1 = $result1->fetch_assoc()) {
                    $selected = ($row1['idrole'] == $row['usertype']) ? "selected" : "";
                    ?>
                    <option value="<?php echo $row1['idrole'] ?>" <?php echo $selected ?>><?php echo $row1['role'] ?></option>
                    <?php
                }
                ?>
            </select>
            <button type="submit" class="btn btn-success mt-5 mx-3" name="submit">Save</button>
        </form>

        <?php if(isset($message)) { echo $message; } ?>

    </div>
    <?php include "../footer.php"; ?>

</body>

</html>
