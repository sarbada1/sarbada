<?php
$base_url = "http:/college/";
?>
<!DOCTYPE html>
<html lang="en">


<head>
  <title>Admin Panel</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
  <meta name="author" content="Potenza Global Solutions" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- app favicon -->
  <link rel="shortcut icon" href="<?php echo $base_url ?>assets/img/favicon.ico">
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <!-- plugin stylesheets -->
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>
    css/vendors.css" />
  <!-- app style -->
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>css/style.css" />
  <style>
    .row {
      margin-left: 275px;
      margin-top: 100px;
    }
h2{
  text-align: center;
}
   
  </style>
</head>

<body>
  <!-- begin app -->
  <div class="app">
    <!-- begin app-wrap -->
    <div>
      <!-- begin pre-loader -->

      <!-- end pre-loader -->
      <!-- begin app-header -->
      <header class="app-header top-bar">
        <!-- begin navbar -->
        <nav class="navbar navbar-expand-md">

          <!-- begin navbar-header -->
          <div class="navbar-header d-flex align-items-center">
            <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
            <a class="navbar-brand" href="index.html">
              <img src="<?php echo $base_url ?>assets/img/logo.png" class="img-fluid logo-desktop" alt="logo" />
              <img src="<?php echo $base_url ?>assets/img/logo-icon.png" class="img-fluid logo-mobile" alt="logo" />
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-align-left"></i>
          </button>
          <!-- end navbar-header -->
          <!-- begin navigation -->

          <!-- end navigation -->
        </nav>
        <!-- end navbar -->
      </header>
      <!-- end app-header -->
      <!-- begin app-container -->
      <div class="app-container">
        <!-- begin app-nabar -->
        <aside class="app-navbar">
          <!-- begin sidebar-nav -->
          <div class="sidebar-nav scrollbar scroll_light">
            <ul class="metismenu " id="sidebarNav">
              <li class="nav-static-title">Personal</li>
              <li class="active">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <i class="nav-icon ti ti-rocket"></i>
                  <span class="nav-title">Dashboards</span>
                  <span class="nav-label label label-danger">6</span>
                </a>
                <ul aria-expanded="false">
                  <li> <a href='<?php echo $base_url ?>student/add_student.php'>Add student</a> </li>
                  <li> <a href='<?php echo $base_url ?>student/display_student.php'>Show student</a>
                  </li>
                  <li> <a href='<?php echo $base_url ?>course/add_course.php'>Add course</a> </li>
                  <li> <a href='<?php echo $base_url ?>course/display_course.php'>Show course</a>
                  </li>
                  <li> <a href='<?php echo $base_url ?>teacher/add_teacher.php'>Add teacher</a> </li>
                  <li> <a href='<?php echo $base_url ?>teacher/show_teacher.php'>Show teacher</a>
                  </li>
                  <li> <a href='<?php echo $base_url ?>student_course/student_course.php'>Show Student
                      Course</a> </li>
                  <li> <a href='<?php echo $base_url ?>payment/display_payment.php'>Show Payment record</a> </li>

                </ul>
              </li>

            </ul>



          </div>
        </aside>
      </div>
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "S@rb@d@123$%^&";
    $dbname = "student_record";



    $conn = new mysqli($servername, $username, $password, $dbname);
    
$sid = $_GET['scid'];
    $sql = " SELECT * FROM student_course JOIN course ON student_course.cid=course.cid JOIN student ON student_course.sid=student.Sid WHERE student_course.sid='$sid'";

    $result = $conn->query($sql);


    ?>
      <h2>Payment record</h2>
    <div class="row text-center">

      <table class="w-80 table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">S.N</th>
            <th scope="col">Name</th>
            <th scope="col">Course name</th>
            <th scope="col">Price of the course</th>
            <th scope="col">Fee given</th>
            <th scope="col">Due amount</th>

          </tr>
        </thead>
        <?php
        $i = 1;
        while ($row = $result->fetch_assoc()) {
          $price = $row['price'];
          $fee_paid = $row['price_given'];
          $due = (int) $price - (int) $fee_paid;
          ?>
          <tbody>
            <tr>
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
                <?php echo $row['price'] ?>
              </td>
              <td>
                <?php echo $row['price_given'] ?>
              </td>
              <td>
                <?php echo $due ?>
              </td>

            </tr>
          </tbody>
      </div>

    <?php }
        ?>