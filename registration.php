<?php
$showAlert = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password_data = $_POST['password'];
    $password_data=md5($password_data);
    $cpassword = $_POST['cpassword'];
    $cpassword = md5($cpassword);
  

    $servername = "localhost";
    $username = "root";
    $password = "S@rb@d@123$%^&";
    $dbname = "student_record";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql1 = "SELECT * FROM login WHERE username='$uname'";
    $result1 = mysqli_query($conn, $sql1);
    $num = mysqli_num_rows($result1);
    if ($num == 0) {



        if (($password_data == $cpassword)) {
            $sql2 = "INSERT INTO login ( username, email, password, dt) VALUES ( '$uname', '$email', '$password_data', current_timestamp())";
            $result = mysqli_query($conn, $sql2);
            if ($result) {
                $showAlert = true;
            }


        } else {
            $showError = "Password does not match.";
        }

    } else {
        $showError = "Username is already registered. Please try using another username.";
    }
}
?>

<!DOCTYPE html>
<html?>

    <head>
        <title> Registration Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <!-- Goole Font -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/assets/bootstrap.min.css">
        <!-- Font awsome CSS -->
        <link rel="stylesheet" href="css/assets/font-awesome.min.css">
        <link rel="stylesheet" href="css/assets/flaticon.css">
        <link rel="stylesheet" href="css/assets/magnific-popup.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="css/assets/owl.carousel.css">
        <link rel="stylesheet" href="css/assets/owl.theme.css">
        <link rel="stylesheet" href="css/assets/animate.css">
        <!-- Slick Carousel -->
        <link rel="stylesheet" href="css/assets/slick.css">
        <link rel="stylesheet" href="css/assets/preloader.css" />

        <!-- Revolution Slider -->
        <link rel="stylesheet" href="css/assets/revolution/layers.css">
        <link rel="stylesheet" href="css/assets/revolution/navigation.css">
        <link rel="stylesheet" href="css/assets/revolution/settings.css">
        <!-- Mean Menu-->
        <link rel="stylesheet" href="css/assets/meanmenu.css">
        <!-- main style-->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/demo.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
            </script>
        <style>
            .gradient-custom {
                /* fallback for old browsers */
                background: #6a11cb;

                /* Chrome 10-25, Safari 5.1-6 */
                background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
            }

            .form-label {
                position: absolute;
                top: 100px;
                left: 50px;
            }

            .form-label1 {
                position: absolute;
                top: 175px;
                left: 50px;
            }

            .form-label2 {
                position: absolute;
                top: 250px;
                left: 50px;
            }

            .form-label3 {
                position: absolute;
                top: 325px;
                left: 50px;
            }
        </style>

    </head>
    <?php
   
   
    if ($showAlert) {
        echo
            '   <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You have successfully registered your account. You can now log in.<a href="login.php">Login</a>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    if ($showError) {
        echo
            '   <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Oops!</strong>' . $showError . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    ?>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Sign in</h3>
                            <form action="" method="post">


                                <div class="form mb-4">
                                    <input type="text" id="typeEmailX-2" name="uname"
                                        class="form-control form-control-lg" />
                                    <label class="form-label" for="typeEmailX-2">Username</label>
                                </div>
                                <div class="form mb-4">
                                    <input type="email" id="typeEmailX-2" name="email"
                                        class="form-control form-control-lg" />
                                    <label class="form-label1" for="typeEmailX-2">Email</label>
                                </div>

                                <div class="form mb-4">
                                    <input type="password" id="typePasswordX-2" name="password"
                                        class="form-control form-control-lg" />
                                    <label class="form-label2" for="typePasswordX-2">Password</label>
                                </div>
                                <div class="form mb-4">
                                    <input type="password" id="typePasswordX-2" name="cpassword"
                                        class="form-control form-control-lg" />
                                    <label class="form-label3" for="typePasswordX-2">Confirm Password</label>
                                </div>

                               
                                  

                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-start mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                        <label class="form-check-label" for="form1Example3"> Remember password </label>
                                    </div>



                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign in">

                                    <div>
                                        <p class="mb-0 mt-4">Already registered? <a href="login.php"
                                                class="text-black-50 fw-bold">Log in</a>
                                        </p>
                                    </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>