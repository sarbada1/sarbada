<html>

<head>
    <?php
    include "../header.php";
    ?>
</head>

<body>
    <?php
    include "../nav.php";
    ?>
    <div class="row " style="margin-top:120px;width:80%;margin-left:270px;">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15">Students</h5>
                                  <?php
                                  include "../dbcontroller.php";
                                  $sql= " SELECT COUNT(*) as total_students FROM student";
                                
                                  $result=$conn->query($sql);
                                 while($row=$result->fetch_assoc()){
                                  ?>
                                    
                                    <h2 class="mb-3 font-18"><?php echo $row['total_students'] ?> Students</h2>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img src="../assets/img/banner/1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15"> Teachers</h5>
                                    <?php
                                    $sql1= " SELECT COUNT(*) as total_teachers FROM teacher";
                                
                                $result1=$conn->query($sql1);
                                while($row1=$result1->fetch_assoc()){?>
                                <h2 class="mb-3 font-18"><?php echo $row1['total_teachers'] ?> Teachers</h2>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img src="../assets/img/banner/2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15">Courses</h5>
                                    <?php
                                    $sql2= " SELECT COUNT(*) as total_course FROM course";
                                
                                $result2=$conn->query($sql2);
                                while($row2=$result2->fetch_assoc()){?>
                                    
                                    <h2 class="mb-3 font-18"><?php echo $row2['total_course'] ?> Courses </h2>

                                       <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img src="../assets/img/banner/3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
    </div>
    <?php
    include "../footer.php";
    ?>
</body>

</html>