<?php


$login = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "dbcontroller.php";

    $uname = $_POST['uname'];

    $password_data = $_POST['password'];
   

   
    $query = "SELECT * FROM login WHERE username='$uname' AND password='$password_data'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $count = mysqli_num_rows($result);
    if ($count == 1 && ($uname != $row['username'])) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['uname'] = $uname;
    
        // add check for user type
        $query_user_type = "SELECT usertype FROM login WHERE username='$uname'";
        $result_user_type = mysqli_query($conn, $query_user_type);
        $row_user_type = mysqli_fetch_assoc($result_user_type);
    
        if ($row_user_type['usertype'] == 1) {
            $_SESSION['usertype'] = 1; // full access
        } elseif ($row_user_type['usertype'] == 2) {
            $_SESSION['usertype'] = 2; // limited access
        } elseif ($row_user_type['usertype'] == 3) {
            $_SESSION['usertype'] = 3; // more access than 2, less than 1
        }
    
        header("location:website/dashboard.php");
    } else {
        $showError = true;
    }
    
}



?>
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
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
</style>
<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <form action="" method="post">
                            <h3 class="mb-5">Sign in</h3>


                            <div class="form mb-4">
                                <input type="text" id="typeEmailX-2" name="uname"
                                    class="form-control form-control-lg" />
                                <label class="form-label" for="typeEmailX-2">Username</label>
                            </div>

                            <div class="form mb-4">
                                <input type="password" id="typePasswordX-2" name="password"
                                    class="form-control form-control-lg" />
                                <label class="form-label1" for="typePasswordX-2">Password</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-start mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                <label class="form-check-label" for="form1Example3"> Remember password </label>
                            </div>


                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">

                            <div>
                                <p class="mb-0 mt-4">Don't have an account? <a href="registration.php"
                                        class="text-black-50 fw-bold">Sign Up</a>
                                </p>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>