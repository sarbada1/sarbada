<?php
include "../dbcontroller.php";

?>

<html>
<?php include "../header.php"; ?>

<body>
    <?php include "../nav.php"; ?>
    <div class="container">
        <h2>Syllabus</h2>
        <div class="card w-75 mx-auto py-3">
            <div id="show_alert"></div>
            <form action="confirm_syllabus.php" method="post" enctype="multipart/form-data" id="add_form" class="px-3">
                <div id="show_item">
                    <div id="fields-container">
                        <div class="form-group row align-items-center syllabus-field">
                            <label for="syllabus-1" class="col-sm-2 col-form-label">Syllabus </label>
                          
                            <div class="col-sm-5">
                                <input type="text" class="form-control syllabus-input" name="courses[]" required>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-success btn-add-field"><i
                                        class="fa fa-plus"></i></button>
                            
                               
                            </div>
                            <input type="hidden" id="course_id" name="course_id" value="<?php echo $_GET['id']; ?>">

                        </div>
                    </div>
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" id="add_btn" value="Add" name="submit"></input>
                </div>
            </form>
        </div>
    </div>

    <?php include "../footer.php"; ?>
</body>
<script>
    $(document).ready(function () {
        $(".btn-add-field").click(function (e) {
            e.preventDefault();
            $("#show_item").prepend(`         <div id="fields-container" class="append_item">
                        <div class="form-group row align-items-center syllabus-field">
                            <label for="syllabus-1" class="col-sm-2 col-form-label">Syllabus</label>
                          
                            <div class="col-sm-5">
                                <input type="text" class="form-control syllabus-input" name="courses[]" required>
                            </div>
                            <div class="col-sm-2">
                                
                                <button type="button" class="btn btn-danger btn-remove-field"><i
                                        class="fa fa-minus"></i></button>
                               
                            </div>
                        </div>
                    </div>`)
        });
        $(document).on('click', '.btn-remove-field' ,function(e){
            e.preventDefault();
            let row_field= $(this).parent().parent();
            $(row_field).remove();
        });
    


    })
</script>