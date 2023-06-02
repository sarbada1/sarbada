<?php
session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:../login.php");
    // exit;
} if ($_SESSION['usertype'] == 1) {
    ?>


    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">
                            <img alt="image" src="../assets/img/logo.png" class="header-logo" />
                            <span class="logo-name">Admin Panel</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown active">
                            <a href="../website/dashboard.php" class="nav-link"><i
                                    data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="briefcase"></i><span>Student</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link" href="../student/add_student.php">Add student</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="../student/display_student.php">Show student</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="command"></i><span>Teacher</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="../teacher/add_teacher.php">Add Teacher</a></li>
                                <li><a class="nav-link" href="../teacher/show_teacher.php">Show Teacher</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="command"></i><span>Course</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="../course/add_course.php">Add Course</a></li>
                                <li><a class="nav-link" href="../course/display_course.php">Show Course</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Student
                                    course</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link" href="../student_course/student_course.php">Show student course</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="../role/add_role.php" class="menu-toggle nav-link "><i
                                    data-feather="grid"></i><span>Add role</span></a>
                        </li>
                        <li>
                            <a href="../website/display_user.php" class="menu-toggle nav-link "><i
                                    data-feather="grid"></i><span>Show user</span></a>
                        </li>
                    </ul>
                </aside>
            </div>

        </div>

    </div>




    <?php
} if ($_SESSION['usertype'] == 2) {
    ?>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">
                            <img alt="image" src="../assets/img/logo.png" class="header-logo" />
                            <span class="logo-name">Admin Panel</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="briefcase"></i><span>Student</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link" href="../student/add_student.php">Add student</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="../student/display_student.php">Show student</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="command"></i><span>Teacher</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="../teacher/add_teacher.php">Add Teacher</a></li>
                                <li><a class="nav-link" href="../teacher/show_teacher.php">Show Teacher</a></li>

                            </ul>

                    </ul>
                </aside>
            </div>

        </div>

    </div>
    <?php
} if ($_SESSION['usertype'] == 3) {
    ?>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">
                            <img alt="image" src="../assets/img/logo.png" class="header-logo" />
                            <span class="logo-name">Admin Panel</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="briefcase"></i><span>Student</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link" href="../student/add_student.php">Add student</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="../student/display_student.php">Show student</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="command"></i><span>Teacher</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="../teacher/add_teacher.php">Add Teacher</a></li>
                                <li><a class="nav-link" href="../teacher/show_teacher.php">Show Teacher</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="command"></i><span>Course</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="../course/add_course.php">Add Course</a></li>
                                <li><a class="nav-link" href="../course/display_course.php">Show Course</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Student
                                    course</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link" href="../student_course/student_course.php">Show student course</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

        </div>

    </div>
    <?php
}
?>