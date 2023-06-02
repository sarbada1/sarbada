<?Php

include "../dbcontroller.php";

$query = "SELECT * FROM teacher";
$result = $conn->query($query);



?>
<html>
<?php
include "../header.php";

?>

<body>
  <?php
  include "../nav.php";

  ?>

  <h2>Teacher Record</h2>

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
          <th scope="col">Teacher ID</th>
          <th scope="col">Name</th>
          <th scope="col">Course</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <?php
      $i = 1;
      // Loop through the results and display them in a table row
      while ($row = $result->fetch_assoc()) {
        ?>
        <tbody>
          <tr>
            <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["tid"]; ?>"></td>
            <td>
              <?php echo $i++ ?>
            </td>
            <td>
              <?php echo $row["name"]; ?>
            </td>
            <td>
              <?php echo $row["course_teach"]; ?>
            </td>
            <td>

              <img height="50px" width="70px" src="../<?= $row['image'] ?>">
            </td>

            <td>

              <a href="edit_teacher_form.php?id=<?= $row['tid'] ?>" class="btn btn-success btn-sm rounded-0" type="button"
                data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

              <a href="delete_teacher.php?id=<?= $row['tid'] ?>" class="btn btn-danger btn-sm rounded-0" type="button"
                data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>

            </td>
          </tr>
          <?php
      }
      ?>
      </tbody>
    </table>


    <p style="align:center"><button type="submit" class="btn btn-success" name="save">DELETE</button></p>
  </form>
  <?php
  include "../footer.php"; ?>
</body>


</html>