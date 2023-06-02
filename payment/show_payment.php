<?php
$id = $_GET["scid"];
include "../dbcontroller.php";

$sql = "SELECT * from payment join student_course on payment.scid=student_course.scid where student_course.scid='$id'";

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


    <h2>Payment record</h2>
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
                    <th scope="col">Paid</th>
                    <th scope="col">Payment Date</th>
                    <th scope="col">Action</th>


                </tr>
            </thead>
            <?php
            $i = 1;
            while ($row = $result->fetch_assoc()) {


                ?>
                <tbody>
                    <tr>
                    <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["pid"]; ?>"></td>
                        <td>
                            <?php echo $i++ ?>
                        </td>

                        <td>
                            <?php echo $row['paid'] ?>
                        </td>
                        <td>
                            <?php echo $row['date'] ?>
                        </td>

                        <td>
                            <li class="list-inline-item">
                                <a href="edit_form_payment.php?id=<?= $row['pid'] ?>"
                                    class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="delete_payment.php?id=<?= $row['pid'] ?>"
                                    class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                            </li>
                        </td>


                    </tr>
                </tbody>

            <?php }
            ?>
        </table>
        <p style="align:center"><button type="submit" class="btn btn-success" name="save">DELETE</button></p>
  </form>
    <?php
    include "../footer.php"; ?>

</body>

</html>