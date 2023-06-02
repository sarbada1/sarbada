<?php

include "../dbcontroller.php";




?>
<?php
if (isset($_SESSION['success'])) {
    ?>
    <div class=" d-flex justify-content-center alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success! </strong>
        <?= $_SESSION['success'] ?>
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
if (isset($_SESSION['edit_student'])) {
    ?>
    <div class=" d-flex justify-content-center alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Success! </strong>
        <?= $_SESSION['edit_student'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    session_unset();
}

if (isset($_SESSION['delete_student'])) {
    ?>
    <div class="  d-flex justify-content-center alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Success!</strong>
        <?= $_SESSION['delete_student'] ?>
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

    <h2>Student record</h2>

    <?php
    $query = "SELECT * FROM student";
    $result = $conn->query($query);

    ?>
    <div>
        <?php if (isset($message)) {
            echo $message;
        } ?>
    </div>

    <form action="" method="post" style="margin-left:250px;width:80%">

        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Export Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="tableExport_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                        <div class="dt-buttons btn-group"> <button
                                                class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
                                                aria-controls="tableExport"><span>Copy</span></button> <button
                                                class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
                                                aria-controls="tableExport"><span>CSV</span></button> <button
                                                class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"
                                                aria-controls="tableExport"><span>Excel</span></button> <button
                                                class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                                                aria-controls="tableExport"><span>PDF</span></button> <button
                                                class="btn btn-secondary buttons-print" tabindex="0"
                                                aria-controls="tableExport"><span>Print</span></button> </div>
                                        <div id="tableExport_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="tableExport"></label></div>
                                        <table class="table table-striped table-hover dataTable no-footer"
                                            id="tableExport" style="width: 100%;" role="grid"
                                            aria-describedby="tableExport_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="tableExport"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 184px;"><input type="checkbox" id="checkAl">
                                                        Select All</th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="tableExport"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 184px;">Student ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="tableExport"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Position: activate to sort column ascending"
                                                        style="width: 276px;">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="tableExport"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 135px;">Gender</th>
                                                    <th class="sorting" tabindex="0" aria-controls="tableExport"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Age: activate to sort column ascending"
                                                        style="width: 70px;">Country</th>
                                                    <th class="sorting" tabindex="0" aria-controls="tableExport"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        style="width: 131px;">City</th>
                                                    <th class="sorting" tabindex="0" aria-controls="tableExport"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Salary: activate to sort column ascending"
                                                        style="width: 114px;">Course</th>
                                                    <th class="sorting" tabindex="0" aria-controls="tableExport"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Salary: activate to sort column ascending"
                                                        style="width: 114px;">Action</th>
                                                </tr>
                                            </thead>




                                            <tbody>

                                                <?php

                                                $count = 1;
                                                while ($data = $result->fetch_assoc()) {
                                                    ?>
                                                    <tr class="odd" role="row">

                                                        <td><input type="checkbox" id="checkItem" name="check[]"
                                                                value="<?php echo $data["Sid"]; ?>"></td>


                                                        <td>
                                                            <?php echo $count ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $data['name'] ?>
                                                        </td>


                                                        <td>
                                                            <?php echo $data['gender'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $data['country'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $data['city'] ?>
                                                        </td>
                                                        <td>

                                                            <a href="../student_course/add_student_course.php?sid=<?= $data['Sid'] ?>"
                                                                class="btn btn-primary btn-sm rounded-0" type="button"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Add course"><i class="fa fa-table"></i></a>


                                                            <a href="../student_course/display_student_course.php?sid=<?= $data['Sid'] ?>"
                                                                class="btn btn-warning btn-sm rounded-0" type="button"
                                                                data-toggle="tooltip" data-placement="top" title="View"><i
                                                                    class="fa fa-eye"></i></a>

                                                        </td>
                                                        <td>

                                                            <a href="edit_form.php?id=<?= $data['Sid'] ?>"
                                                                class="btn btn-success btn-sm rounded-0" type="button"
                                                                data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                                    class="fa fa-edit"></i></a>

                                                            <a href="delete.php?id=<?= $data['Sid'] ?>"
                                                                class="btn btn-danger btn-sm rounded-0" type="button"
                                                                data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                                    class="fa fa-trash"></i></a>

                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $count += 1;

                                                } ?>
                                            </tbody>





                                        </table>
                                        <p style="align:center"><button type="submit" class="btn btn-success"
                                                name="save">DELETE</button></p>
    </form>




    <?php
    include "../footer.php"; ?>

</body>

</html>




<!-- </form> -->















</body>



</html>