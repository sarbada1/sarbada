<?php

session_start();

$sid = $_GET['sid'];
include "../dbcontroller.php";

$sql = " SELECT * FROM student_course JOIN course ON student_course.cid=course.cid JOIN student ON student_course.sid=student.Sid  WHERE student_course.sid='$sid' ";

$result = $conn->query($sql);

?>


<?php
if (isset($_SESSION['add_course'])) {
  ?>
  <div class=" d-flex justify-content-center alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success! </strong>
    <?= $_SESSION['add_course'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php
  session_unset();
}
if (isset($_SESSION['delete'])) {
  ?>
  <div class=" d-flex justify-content-center alert alert-danger
             alert-dismissible fade show" role="alert">
    <strong>Success! </strong>
    <?= $_SESSION['delete'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php
  session_unset();
}
if (isset($_SESSION['edit'])) {
  ?>
  <div class=" d-flex justify-content-center alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Success! </strong>
    <?= $_SESSION['edit'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php
  session_unset();
}

?>
<html>
<?php
include "../header.php";

?>

<body>
  <?php
  include "../nav.php";

  ?>

  <h2>Student course record</h2>
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
          <th scope="col">Student Course ID</th>
          <th scope="col">Name</th>
          <th scope="col">Course name</th>
          <th scope="col">Total Fee </th>
          <th scope="col">Start Date</th>
          <th scope="col">Payment</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <?php
      $i = 1;
      while ($row = $result->fetch_assoc()) {
        ?>
        <tbody>
          <tr>
            <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["scid"]; ?>"></td>
            <td>
              <?php echo $i++ ?>
            </td>

            <td>
              <?php echo $row['name'] ?>
            </td>
            <td>
              <?php echo $row['title'] ?>
            </td>
            <td>
              <?php echo $row['price_given'] ?>
            </td>
            <td>
              <?php echo $row['start'] ?>
            </td>


            <td>

              <a href="../payment/add_payment.php?scid=<?= $row['scid'] ?>" class="btn btn-primary btn-sm rounded-0"
                type="button" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-table"></i></a>

              <a href="../payment/show_payment.php?scid=<?= $row['scid'] ?>" class="btn btn-primary btn-sm rounded-0"
                type="button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>

            </td>
            <td>
              <li class="list-inline-item">
                <a href="../student_course/edit_student_course_form.php?id=<?= $row['scid'] ?>"
                  class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top"
                  title="Edit"><i class="fa fa-edit"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="../student_course/delete_student_course.php?id=<?= $row['scid'] ?>"
                  class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top"
                  title="Delete"><i class="fa fa-trash"></i></a>
              </li>
            </td>

          <?php }
      ?>
      </tbody>
    </table>
    <p style="align:center"><button type="submit" class="btn btn-success" name="save">DELETE</button></p>
  </form>

  <?php
  include "../footer.php"; ?>
</body>

</html>