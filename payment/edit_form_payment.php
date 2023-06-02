<?php
$base_url = "http:/college/";

$id= $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "S@rb@d@123$%^&";
$dbname = "student_record";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection







$sql= "SELECT * from payment WHERE pid='$id'";
$result = $conn->query($sql);

while ($row=$result->fetch_assoc()){



?>



<!DOCTYPE html>
<html lang="en">


<head>
  <title>Course edit form</title>
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
   h2{
	text-align:center;
   }

    table a {
      margin: 0 10px;
    }
	
	form {
			margin: 50px auto;
			width: 30%;
			padding: 20px;
			background-color: #f2f2f2;
			border-radius: 5px;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
			font-family: Arial, sans-serif;
			font-size: 16px;
			color: #333;
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input[type="text"] {
			display: block;
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: none;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		input[type="date"] {
			display: block;
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: none;
			margin-bottom: 20px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			cursor: pointer;
			font-size: 16px;
      margin:25px 0;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
        input[type="radio"]{
            margin-bottom:20px;
        }
        select{
            width:80%;
            margin:10px 0;
            height:25px;
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
                  <li> <a href='<?php echo $base_url ?>teacher/show_teacher.php'>Show teacher</a> </li>
				  <li> <a href='<?php echo $base_url ?>student_course/student_course.php'>Show Student Course</a> </li>
          <li> <a href='<?php echo $base_url ?>payment/display_payment.php'>Show Payment record</a> </li>
                </ul>
              </li>

            </ul>



          </div>
        </aside>
      </div>
    </div>

   
     
		<h2>Edit Payment</h2>	
      <form class="form" action="<?php echo $base_url ?>payment/edit_payment.php" method="post">
      <label for="phone">Fee Paid</label>
			<input type="number" id="phone" name="fee_given" value="<?php echo $row['paid']?>" required>

			<label for="date">Date</label>
			<input type="date" id="date" name="course_date" value="<?php echo $row['date']?>" required>
        <input type="hidden" name='id' value='<?=$row['pid']?>' hidden>

		<input type="submit" value="Edit" ></input>
	</form>





   
  </div>
  <!-- end app -->

  <!-- plugins -->
  <script src="assets/js/vendors.js"></script>

  <!-- custom app -->

  </div>
  <script src="assets/js/app.js"></script>
</body>


</html>
<?php
}
?>
