<?Php
include "../dbcontroller.php";

// Retrieve data from the database
$query = "SELECT * FROM course  ";
$result = $conn->query($query);
$result1 = $conn->query($query);

?>
<html>
<?php
include "../header.php";

?>

<body>
  <?php
  include "../nav.php";

  ?>
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
          <th>Course ID</th>
          <th>Course</th>
          <th>Duration (months)</th>
          <th>Price</th>
          <th>Image</th>
          <th>Syllabus</th>
          <th>Action</th>
        </tr>
      </thead>

      <?php
      $i = 1;

      while ($row = $result->fetch_assoc()) {
        ?>
        <tbody>
          <tr>
            <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["cid"]; ?>"></td>
            <td>
              <?php echo $i++ ?>
            </td>
            <td>
              <?php echo $row["title"]; ?>
            </td>
            <td>
              <?php echo $row["duration"]; ?>
            </td>
            <td>
              <?php echo $row["price"]; ?>
            </td>
            <td>

              <img height="50px" width="50px" src="../<?= $row['course_img'] ?>">
            </td>
            
            <td>
              <a href="add_syllabus.php?id=<?php echo $row['cid'] ?>" class="btn btn-primary btn-sm rounded-0"
                type="button" data-toggle="tooltip" data-placement="top" title="Add syllabus"><i
                  class="fa fa-table"></i></a>
              <a href="display_syllabus.php?id=<?php echo $row['cid'] ?>" class="btn btn-warning btn-sm rounded-0"
                type="button" data-toggle="tooltip" data-placement="top" title="View syllabus"><i
                  class="fa fa-eye"></i></a>
            </td>
            <td>
              <a href="edit_form_course.php?id=<?php echo $row['cid'] ?>" class="btn btn-success btn-sm rounded-0"
                type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

              <a href="delete_course.php?id=<?= $row['cid'] ?>" class="btn btn-danger btn-sm rounded-0" type="button"
                data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
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