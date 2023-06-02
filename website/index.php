<?php



session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:../login.php");
    // exit;

 


}
    // exit;

 



?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ecology Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduwise - Education HTML5 Template</title>
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
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header class="header_four">
        <!-- Preloader -->
       
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="info_wrapper">

                            <div class="login_info">
                                <ul class="d-flex py-3">
                                    <li class="nav-item"><a href="#" class="nav-link sign-in js-modal-show"><i
                                                class="flaticon-user-male-black-shape-with-plus-sign"></i>Sign Up</a>
                                    </li>
                                    <li class="nav-item"><a href="#" class="nav-link join_now js-modal-show"><i
                                                class="flaticon-padlock"></i>Log In</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="edu_nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light bg-faded">
                    <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="logo"></a>
                    <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav nav lavalamp ml-auto menu">
                            <li class="nav-item"><a href="#" class="nav-link active">Home</a>

                            </li>

                            <li class="nav-item"><a href="course.html" class="nav-link">Admission</a>

                            </li>


                            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                    <div class="mr-auto search_area ">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><i class="search_btn flaticon-magnifier"></i>
                                <div id="search">
                                    <button type="button" class="close">×</button>
                                    <form>
                                        <input type="search" value="" placeholder="Search here...." required />
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav><!-- END NAVBAR -->
            </div>
        </div>


        <!--==================
        Slider
    ===================-->
        <div class="rev_slider_wrapper">
            <div id="rev_slider_1" class="rev_slider">
                <ul>
                    <li data-index="rs-1706" data-transition="fade" data-slotamount="7" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide"
                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                        <div class="slider-overlay"></div>
                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="images/banner/banner_1.jpg" alt="Sky" class="rev-slidebg"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYER NR. 1 -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-3045-layer-1"
                            data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-120','-140','-140','-120']"
                            data-fontsize="['65','120','100','70']" data-lineheight="['70','120','70','70']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]"
                            data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; font-family:'Roboto', sans-serif; font-weight: 900; white-space: nowrap;text-transform:left;">
                            Welcome, <?php echo $_SESSION['uname'] ?>!
                        </div>

                        <!-- LAYER NR.3 -->
                        <!-- LAYER NR. 2 -->

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption rev-btn rev-btn left_btn" id="slide-2939-layer13"
                            data-y="['middle','middle','middle','middle']" data-voffset="['75','220','190','100']"
                            data-fontsize="['14','14','10','8']" data-lineheight="['34','34','30','20']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                            data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#ffffff;bg:#ff5a2c;bw:2px 2px 2px 2px;"}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[12,12,8,8]"
                            data-paddingright="[40,40,30,25]" data-paddingbottom="[12,12,8,8]"
                            data-paddingleft="[40,40,30,25]"
                            style="z-index: 14; white-space: nowrap; font-weight: 500; color: #ffffff;font-family:Rubik; text-transform:uppercase; background-color:#ff5a2c; border-color:rgba(0, 0, 0, 1.00); border-width:2px;  border-radius: 3px;">
                            Get Started Now
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption rev-btn rev-btn right-btn" id="slide-2939-layer-15"
                            data-x="['left','left','left','left']" data-hoffset="['250','-60','-130','-100']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['75','220','190','100']"
                            data-fontsize="['14','14','10','8']" data-lineheight="['34','34','30','20']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                            data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                            data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#fff;bg:#ff5a2c;bw:2px 2px 2px 2px; "}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[12,12,8,8]"
                            data-paddingright="[40,40,30,25]" data-paddingbottom="[12,12,8,8]"
                            data-paddingleft="[40,40,30,25]"
                            style="z-index: 14; white-space: nowrap;  font-weight:500; color:#ffffff; font-family:Rubik; text-transform:uppercase; background-color:#092ace; letter-spacing:1px; border-radius: 3px;">
                            View Courses
                        </div>
                    </li>

                </ul><!-- END SLIDES LIST -->
            </div><!-- END SLIDER CONTAINER -->
        </div><!-- END SLIDER CONTAINER WRAPPER -->
    </header> <!--  End header section-->



    <section class="login_signup_option">
        <div class="l-modal is-hidden--off-flow js-modal-shopify">
            <div class="l-modal__shadow js-modal-hide"></div>
            <div class="login_popup login_modal_body">
                <div class="Popup_title d-flex justify-content-between">
                    <h2 class="hidden">&nbsp;</h2>
                    <!-- Nav tabs -->
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-lg-12 login_option_btn">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#login"
                                        role="tab">Login</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel2"
                                        role="tab">Register</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                            <!-- Tab panels -->
                            <div class="tab-content card">
                                <!--Login-->
                                <div class="tab-pane fade in show active" id="login" role="tabpanel">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" class="form-control" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div
                                                class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                                <a href="forgot-password.html" title="" class="forget_pass">Forget
                                                    Password ?</a>
                                                <button type="submit" class="btn btn-default login_btn">Login</button>
                                            </div>
                                            <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                                <div class="social_login">
                                                    <div class="social_items">
                                                        <button class="google_login google">Login Google</button>
                                                        <button class="google_login facebook">Login Facebook</button>
                                                        <button class="google_login twitter">Login Twitter</button>
                                                        <button class="google_login linkdin">Login Linkdin</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--/.Panel 1-->
                                <!--Panel 2-->
                                <div class="tab-pane fade" id="panel2" role="tabpanel">
                                    <form action="#" class="register">
                                        <div class="row">
                                            <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div
                                                class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                                <button type="submit"
                                                    class="btn btn-default login_btn">Register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--/.Panel 2-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End Login Signup Option -->


    <!-- End Popular Courses Highlight -->


    <section class="popular_courses">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sub_title">
                        <h2>Our Popular Courses</h2>
                    </div><!-- ends: .section-header -->
                </div>
                <?php
             include "../dbcontroller.php";
              $sql1 = "SELECT * FROM course";
              $result1 = $conn->query($sql1);
                while ($row1 = $result1->fetch_assoc()) {



                    ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="single-courses">
                            <div class="courses_banner_wrapper">
                                <div class="courses_banner"><a href="#"><img src="<?= $base_url ?><?= $row1['course_img'] ?>"
                                style="height:250px;"    alt="" class="img-fluid"></a></div>
                                <div class="purchase_price">
                                    <a href="#" class="read_more-btn">
                                        <?php echo $row1['price'] ?>
                                    </a>
                                </div>
                            </div>
                            <div class="courses_info_wrapper">
                                <div class="courses_title">
                                    <h3><a href="#">
                                            <?php echo $row1['title'] ?>
                                        </a></h3>


                                </div>
                                <div class="courses_info">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i>
                                            <?php echo $row1['duration'] ?>
                                        </li>

                                        <?php
                                      $query= " SELECT course.title, COUNT(DISTINCT student_course.sid) AS num_students
                                        FROM student_course
                                        JOIN course ON student_course.cid = course.cid
                                        GROUP BY course.title";
                                        $result2=$conn->query($query);
                                    
                                       while($row3=$result2->fetch_assoc()){
                                        if ($row3['title']==$row1['title']) {
                                           ?>
                                <li><i class="fas fa-user"></i><?= $row3['num_students']?></li>
                                           <?php 
                                        }
                                       } 

                                        ?>
                                    </ul>

                                </div>
                            </div>
                        </div><!-- Ends: .single courses -->
                    </div><!-- Ends: . -->
                    <?php
                }
                ?>

            </div>

        </div>
    </section><!-- ./ End Courses Area section -->
    <section class="popular_courses">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sub_title">
                        <h2>Our Teachers</h2>
                    </div><!-- ends: .section-header -->
                </div>
                <?php



                $sql = "SELECT * FROM teacher";
                $result = $conn->query($sql);



                ?>


                <?php
                while ($row = $result->fetch_Assoc()) {
                    ?>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="single-courses">


                            <div class="courses_banner_wrapper">
                                <div class="courses_banner"><a href="#"><img src="<?= $base_url ?><?= $row['image'] ?>"
                                            style="height:250px;" alt="dfsd" class="img-thumbnail"></a></div>
                                <div class="purchase_price">
                                    <a href="#" class="read_more-btn">Course -
                                        <?php echo $row['course_teach'] ?>
                                    </a>
                                </div>
                            </div>
                            <div class="courses_info_wrapper">
                                <div class="courses_title">
                                    <h3><a href="#">Teacher -
                                            <?php echo $row['name'] ?>
                                        </a></h3>
                                </div>
                            </div>
                        </div><!-- Ends: .single courses -->
                    </div>
                    <?php
                }
                ?>
            </div>

        </div>
    </section><!-- ./ End Courses Area section -->


    <!-- End about_top_wrapper -->



    <!-- ./ End Our Sponsor -->


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-3 col-md-3 col-lg-3 p-0 ">
                    <div class="shape_wrapper">
                        <img src="images/shapes/bubble_shpe_1.png" alt="" class="shape_t_1">
                        <img src="images/shapes/round_shpae_1.png" alt="" class="shape_t_2">
                    </div>
                </div>
                <div class="col-12 col-sm-9 col-md-9 col-lg-9 p-0 become_techer_wrapper">
                    <div class="become_a_teacher">
                        <div class="title my-5">
                            <h2>Enrolled now</h2>

                        </div><!-- ends: .section-header -->
                        <div class="get_s_btn">
                            <a href="#" title="">Get Started Now</a>
                        </div>
                        <img src="images/shapes/bubble_shpe_2.png" alt="" class="shape_t_1">
                    </div>
                </div>
            </div>
            <div class="footer_top">
                <div class="row">

                    <div class="col-12 col-md-6 col-lg-2">
                        <div class="footer_single_col">
                            <h3>Useful Links</h3>
                            <ul class="location_info quick_inf0">


                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Teachers</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer_single_col contact">
                            <h3>Contact Us</h3>
                            <p>Fell free to get in touch us via Phone or send us a message.</p>
                            <div class="contact_info">
                                <span>+000 124 325</span>
                                <span class="email">info@yourdomain.com</span>
                            </div>
                            <ul class="social_items d-flex list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="round_shape">
            <span class="shape_1"></span>
            <span class="shape_2"></span>
            <span class="shape_3"></span>
            <span class="shape_4"></span>
            <span class="shape_5"></span>
            <span class="shape_6"></span>
        </div>
        <img src="images/shapes/footer_bg_shpe_1.png" alt="" class="shapes1_footer">
    </footer><!-- End Footer -->

    <section id="scroll-top" class="scroll-top">
        <h2 class="disabled">Scroll to top</h2>
        <div class="to-top pos-rtive">
            <a href="#"><i class="flaticon-right-arrow"></i></a>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Revolution Slider -->
    <script src="js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
    <script src="js/assets/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- Counter Script -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- Revolution Extensions -->
    <script src="js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
    <script src="js/assets/revolution/revolution.js"></script>
    <script src="js/custom.js"></script>


    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    <script type="text/javascript" src="js/demo.js"></script>
    <div class="demo-style-switch" id="switch-style">
        <a id="toggle-switcher" class="switch-button" title="Change Styles"><span class="fa fa-cog fa-spin"></span></a>
        <div class="switched-options">
            <div class="config-title">
                <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="logo"></a>
                <p>Education Template</p>

            </div>
            <div class="demos">
                <div><a href="index-2.html" data-toggle="tooltip" data-placement="top" title="Home Style One"><img
                            class="main-image img-fluid" src="demo/index_1.png" alt="" /></a></div>
                <div><a href="index-3.html" data-toggle="tooltip" data-placement="top" title="Home Style Two"><img
                            class="main-image img-fluid" src="demo/index_2.png" alt="" /></a></div>
                <div><a href="index-4.html" data-toggle="tooltip" data-placement="top" title="Home Style Three"><img
                            class="main-image img-fluid" src="demo/index_3.png" alt="" /></a></div>
                <ul class="list-unstyled clearfix">
                    <li><a href="about.html" data-toggle="tooltip" data-placement="top" title="About Page"><img
                                src="demo/about.png" alt="" class="img-fluid"></a></li>
                    <li><a href="blog.html" data-toggle="tooltip" data-placement="top" title="Blog Page"><img
                                src="demo/blog.png" alt="" class="img-fluid"></a></li>
                    <li><a href="blog-details.html" data-toggle="tooltip" data-placement="top"
                            title="Blog Details Page"><img src="demo/blog_details.png" alt="" class="img-fluid"></a>
                    </li>
                    <li><a href="event.html" data-toggle="tooltip" data-placement="top" title="Event Page"><img
                                src="demo/event.png" alt="" class="img-fluid"></a></li>
                    <li><a href="event-details.html" data-toggle="tooltip" data-placement="top"
                            title="Event Deiails"><img src="demo/event_details.png" alt="" class="img-fluid"></a></li>
                    <li><a href="teacher-profile.html" data-toggle="tooltip" data-placement="top"
                            title="Teacher Profile"><img src="demo/teacher_pro.png" alt="" class="img-fluid"></a></li>
                    <li><a href="course.html" data-toggle="tooltip" data-placement="top" title="Courses Page"><img
                                src="demo/course.png" alt="" class="img-fluid"></a></li>
                    <li><a href="course-details.html" data-toggle="tooltip" data-placement="top"
                            title="Courses Details"><img src="demo/course_details.png" alt="" class="img-fluid"></a>
                    </li>
                    <li><a href="team.html" data-toggle="tooltip" data-placement="top" title="Team Page"><img
                                src="demo/team.png" alt="" class="img-fluid"></a></li>
                    <li><a href="contact.html" data-toggle="tooltip" data-placement="top" title="Contact Page"><img
                                src="demo/contact.png" alt="" class="img-fluid"></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>


</html>