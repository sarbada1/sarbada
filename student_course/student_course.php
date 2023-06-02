<?php
include "../dbcontroller.php";

$query = "SELECT * FROM course";
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
  
  <h2>Student record with payment</h2>
  <div class="w-25" style="margin-left: 300px;">
    <label for="course">Course:</label>
    <select name="course" id="course" onchange="showCourse(this.value)">
      <option value="">Select a course:</option>
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <option value="<?php echo $row['cid']; ?>"><?php echo $row['title']; ?></option>
        <?php
      }
      ?>
    </select>
  </div>
  

  
  <div id="oldtable" class="row" style="margin-left: 150px; padding: 10px 65px;">
  <form action="" method="post" style="margin-left:250px;width:80%">

        <table id="myTable" class="display">
      <thead>
        <tr>
        <th><input type="checkbox" id="checkAl"> Select All</th>
          <th scope="col">Course ID</th>
          <th scope="col">Course</th>
          <th scope="col">Duration (months)</th>
          <th scope="col">Price</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
          <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $data["Sid"]; ?>"></td>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["duration"]; ?></td>
            <td><?php echo $row["price"]; ?></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
    <p style="align:center"><button type="submit" class="btn btn-success" name="save">DELETE</button></p>
    </form>
  </div>

  <div id="showdata"></div>

  <script>
    function showCourse(courseId) {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("time").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "getuser.php?cid=" + courseId, true);
      xmlhttp.send();
    }
  </script>

<?php
    include "../footer.php"; ?>
</body>


</html>