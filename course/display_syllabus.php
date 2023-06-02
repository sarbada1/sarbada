<?php
include "../dbcontroller.php";
$id=$_GET['id'];
// Retrieve data from the database
$query = "SELECT * FROM course JOIN syllabus ON syllabus.cid = course.cid WHERE syllabus.cid= '$id'  ORDER BY syllabus.rank ASC";
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
  <h2>Syllabus record</h2>

  <form action='rankitem.php' method='post' id="form" style="margin-left:270px;width:80%">
  <input hidden type="number" name="pageid" value='<?=$id?>'>
    <input hidden name="item_id" id="item_id">
    <p style="align:center"><button type="submit" class="btn btn-success"  id="savebtn">update</button></p>
    
    <table class="table w-90" >
      <thead>
        <tr>
          <th>Sn</th>
          <th>Syllabus</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="sortable">
        <?php
        $i = 1;
        
        while ($row = $result->fetch_assoc()) {
          ?>
          <tr data-id="<?php echo $row["sid"]; ?>">
            <td>
              <?php echo $i++ ?>
            </td>
            <td>
              <?php echo $row["syllabus"]; ?>
            </td>

            <td>
             

              <a href="delete_syllabus.php?id=<?= $row['sid'] ?>" class="btn btn-danger btn-sm rounded-0" type="button"
                data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
            </td>
            
            
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
    
    
    
    
  </form>

  
  <?php
  include "../footer.php"; ?>
</body>


</html>