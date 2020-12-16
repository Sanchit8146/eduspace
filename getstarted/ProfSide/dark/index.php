<?php
session_start();
if (!isset($_SESSION['uniqid'])) {
    header('location:../../../401/index.php');
}
require_once("../../connect.php");
$profid = $_SESSION['uniqid'];
?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Prefessor Side" />
    <meta name="author" content="eduSpace" />
    <title>eduSpace</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="../assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="../assets/css/material_style.css">
    <!-- inbox style -->
    <link href="../assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="../assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body style="user-select:none;" spellcheck="false"
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.php">
                        <i class="fa fa-graduation-cap" aria-hidden="true" style="color:white;"></i>
                        <span class="logo-default">eduSpace</span> </a>
                </div>
                <!-- logo end -->
                <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit">
                                <i class="icon-magnifier"></i>
                            </a>
                        </span>
                    </div>
                </form>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
                    data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">

                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <img alt="" class="img-circle " src="../assets/img/dp.jpg" />
                                <span class="username username-hide-on-mobile"></span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="../../logout.php">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll" class="left-sidemenu">
                        <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    <div class="pull-left image">
                                        <img src="../assets/img/dp.jpg" class="img-circle user-img-circle"
                                            alt="User Image" />
                                    </div>
                                    <div class="pull-left info">
                                        <p> <?php
                                            echo $_SESSION['firstName'];
                                            echo "<br>";
                                            echo $_SESSION['lastName'];
                                            ?>
                                        </p>
                                        <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
                                                Online</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a href="index.php" class="nav-link nav-toggle"> <i class="material-icons">dashboard</i>
                                    <span class="title">Overall Statistics</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="assign.php" class="nav-link nav-toggle"> <i
                                        class="material-icons">assignment</i>
                                    <span class="title">Assign</span>
                                </a>
                            <li class="nav-item">
                                <a href="quizmaker/addquiz.php" class="nav-link nav-toggle"> <i
                                        class="fas fa-pen-fancy"></i>
                                    <span class="title">Create Quiz</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="grade.php" class="nav-link nav-toggle"> <i class="fa fa-book"></i>
                                    <span class="title">Grade</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-toggle" href="createsession.php"> <i
                                        class="fa fa-video-camera"></i>
                                    <span class="title">Create Session</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-toggle" href="showsession.php"><i class="fas fa-play"></i>
                                    <span class="title">Show All Sessions</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Performance</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card-box">
                                <div class="card-head card-topline-green">
                                    <header>Exam Toppers</header>
                                </div>
                                <div class="card-body ">
                                    <div class="table-responsive">
                                        <table class="table table-striped custom-table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Student Id</th>
                                                    <th>Quiz Name</th>
                                                    <th>Name</th>
                                                    <th>Score</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $q = mysqli_query($db, "select * from result where prof_id='$profid'");
                                                $x = mysqli_num_rows($q);
                                                $query1 = mysqli_query($db, "select * from quiz where prof_id='$profid'");
                                                if (mysqli_num_rows($query1) == 0) {
                                                    echo "<tr style='text-align:center;'><td colspan=4 style='font-size:25px;'>No Quizzes Created Yett!!!</td></tr>";
                                                } else {
                                                    while ($row1 = mysqli_fetch_array($query1)) {
                                                        extract($row1);
                                                        $query = mysqli_query($db, "select * from result where prof_id='$profid' and quiz_id='$quiz_id' order by marks DESC LIMIT 2");
                                                        if ($x == 0) {
                                                            echo "<tr style='text-align:center;'><td colspan=4 style='font-size:25px;'>No Quizzes attempted Yett!!!</td></tr>";
                                                        } else {
                                                            while ($row = mysqli_fetch_array($query)) {
                                                                extract($row);
                                                                $query2 = mysqli_query($db, "select q.quizname,s.first_name,s.last_name from quiz q join appuser s where q.quiz_id='$quiz_id' and s.uniq_id='$uniq_id'");
                                                                $row2 = mysqli_fetch_array($query2);
                                                                extract($row2);
                                                                echo "<tr>
                                                            <td>$uniq_id</td>
                                                            <td>$quizname</td>
                                                            <td>$first_name $last_name</td>
                                                            <td>$marks/$totalquestions</td></tr>";
                                                            }
                                                        }
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Activity feed start -->
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card-box">
                                <div class="card-head">
                                    <header>Class Comments</header>
                                    <button id="feedMenu" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                        data-upgraded=",MaterialButton">
                                        <i class="material-icons">more_vert</i>
                                    </button>
                                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                        data-mdl-for="feedMenu">
                                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                        </li>
                                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                        </li>
                                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                            here</li>
                                    </ul>
                                </div>
                                <div class="card-body ">
                                    <ul class="feedBody">
                                        <li class="active-feed">
                                            <div class="feed-user-img">
                                                <img src="../assets/img/std/std1.jpg" class="img-radius "
                                                    alt="User-Profile-Image">
                                            </div>
                                            <h6>
                                                <span class="feedLblStyle lblFileStyle">File</span> Sulbha Aggarwal
                                                <small class="text-muted">6
                                                    hours ago</small>
                                            </h6>
                                            <p class="m-b-15 m-t-15">
                                                hii Prof, I have upload doc related to homework#6.
                                            </p>
                                        </li>
                                        <li class="diactive-feed">
                                            <div class="feed-user-img">
                                                <img src="../assets/img/std/std2.jpg" class="img-radius "
                                                    alt="User-Profile-Image">
                                            </div>
                                            <h6>
                                                <span class="feedLblStyle lblTaskStyle">Task </span> Rupakshi Aggarwal
                                                <small class="text-muted">5
                                                    hours
                                                    ago</small>
                                            </h6>
                                            <p class="m-b-15 m-t-15">
                                                Please do as specify in project 2 doc. Let me know if you have any
                                                question.
                                            </p>
                                        </li>
                                        <li class="diactive-feed">
                                            <div class="feed-user-img">
                                                <img src="../assets/img/std/std3.jpg" class="img-radius "
                                                    alt="User-Profile-Image">
                                            </div>
                                            <h6>
                                                <span class="feedLblStyle lblCommentStyle">comment</span> Sanchit
                                                Gupta<small class="text-muted">6 hours ago</small>
                                            </h6>
                                            <p class="m-b-15 m-t-15">
                                                Hey, when is assignment 4 is due?
                                            </p>
                                        </li>
                                        <li class="active-feed">
                                            <div class="feed-user-img">
                                                <img src="../assets/img/std/std4.jpg" class="img-radius "
                                                    alt="User-Profile-Image">
                                            </div>
                                            <h6>
                                                <span class="feedLblStyle lblReplyStyle">Reply</span> David Brown
                                                <small class="text-muted">7 hours ago</small>
                                            </h6>
                                            <p class="m-b-15 m-t-15">
                                                It should be on you eduSpace, it's due on April 30th.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Activity feed end -->
                    </div>
                </div>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page container -->
    </div>
    <!-- start js include path -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.js"></script>
    <!-- Common js-->
    <script src="../assets/js/app.js"></script>

    <script src="https://kit.fontawesome.com/f004f1adc5.js" crossorigin="anonymous"></script>

    <!-- end js include path -->

    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</body>

</html>