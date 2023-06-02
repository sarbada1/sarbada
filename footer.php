<?php
include "backend.php";



unset($_SESSION['old']);
unset($_SESSION['errors']);
?>

<script src="../assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="../assets/bundles/apexcharts/apexcharts.min.js"></script>
<!-- Page Specific JS File -->
<script src="../assets/js/page/index.js"></script>
<!-- Template JS File -->
<script src="../assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="../assets/js/custom.js"></script>
<script src="../assets/bundles/cleave-js/dist/cleave.min.js"></script>
<script src="../assets/bundles/cleave-js/dist/addons/cleave-phone.us.js"></script>
<script src="../assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="../assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="../assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="../assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="../assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="../assets/bundles/select2/dist/js/select2.full.min.js"></script>
<script src="../assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
<script src="../assets/bundles/datatables/export-tables/dataTables.buttons.min.js"></script>
<script src="../assets/bundles/datatables/export-tables/buttons.flash.min.js"></script>
<script src="../assets/bundles/datatables/export-tables/jszip.min.js"></script>
<script src="../assets/bundles/datatables/export-tables/pdfmake.min.js"></script>
<script src="../assets/bundles/datatables/export-tables/vfs_fonts.js"></script>
<script src="../assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
<script src="../assets/js/page/datatables.js"></script>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


<script src="https://cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js"></script>


<script>

  $(document).ready(function () {
    $('#myTable').DataTable({

    });
  });



  function showCourse(str) {
    console.log(str)
    if (str == "") {
      document.getElementById("showdata").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("oldtable").style.display = "none";
          document.getElementById("showdata").innerHTML = this.responseText;

        }

      };
      xmlhttp.open("GET", "../student_course/getuser.php?q=" + str, true);
      xmlhttp.send();
    }
  }







</script>
<script>
  $("#checkAl").click(function () {
    $('input:checkbox').not(this).prop('checked', this.checked);
  });





</script>
<script>
  function validateForm() {
    var name = document.forms["courseForm"]["name"].value;
    var duration = document.forms["courseForm"]["duration"].value;
    var price = document.forms["courseForm"]["price"].value;
    var time = document.forms["courseForm"]["time"].value;
    var img = document.forms["courseForm"]["img"].value;

    if (name == "") {
      alert("Course title must be filled out");
      return false;
    }
    if (duration == "") {
      alert("Course duration must be filled out");
      return false;
    }
    if (price == "") {
      alert("Course price must be filled out");
      return false;
    }
    if (time == "") {
      alert("Please select a course time");
      return false;
    }
    if (img == "") {
      alert("Please select a course image");
      return false;
    }
  }
</script>
<script>
  $(function () {
    $("#sortable").sortable({


      // start: function (event, ui) {
      //   var currPos1 = ui.item.index();
      //   console.log(currPos1);
      // },
      // change: function (event, ui) {
      //   var currPos2 = ui.item.index();
      //   console.log(currPos2);
      // }
    });
  });
  $("#savebtn").click(function () {
    var array = [];
    $.each($("#sortable").find('tr'), function () {
      array.push($(this).data("id"));
    });
    $("#item_id").val(array.toString());
    $("#form").submit();


  });
</script>