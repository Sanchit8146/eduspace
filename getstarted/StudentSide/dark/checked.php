<?php
session_start();
if (!isset($_SESSION['uniqID'])) {
    header('location:../../../401/index.php');
}
require_once("../../connect.php");
if (!isset($_POST['quizid'])) {
    header('location:index.php');
} else {

    $quizid = $_POST['quizid'];
}
$countquery = mysqli_query($db, "select count(*) as totalrows from questionset where quiz_id=$quizid");
$row =  mysqli_fetch_array($countquery);
extract($row);
?>




<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="eduSpace" />
    <meta name="author" content="Sanchit Gupta" />
    <title>edu Space</title>
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
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                </ul>
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
                        <li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge headerBadgeColor1"> 2 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <span class="notification-label purple-bgcolor">New 2</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                    <span class="notification-icon circle deepPink-bgcolor"><i
                                                            class="fa fa-check"></i></span>
                                                    Congratulations!. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle purple-bgcolor"><i
                                                            class="fa fa-user o"></i></span>
                                                    <b>John Micle </b>is now following you. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)"> All notifications </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end notification dropdown -->
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <img alt="" class="img-circle " src="../assets/img/dp.jpg" />
                                <span class="username username-hide-on-mobile"> <?php echo $_SESSION['firstName']  ?>
                                </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="../../../index.php">
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
                                            echo "&nbsp";
                                            echo $_SESSION['lastName'];
                                            ?>
                                        </p>
                                        <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
                                                Online</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="index.php" class="nav-link nav-toggle"> <i class="material-icons">dashboard</i>
                                    <span class="title">Overall Statistics</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="assigned.php" class="nav-link nav-toggle"> <i
                                        class="material-icons">assignment</i>
                                    <span class="title">Assigned</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="results.php" class="nav-link nav-toggle"> <i class="fas fa-highlighter"></i>
                                    <span class="title">Results</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link nav-toggle"> <i class="fa fa-wifi"></i>
                                    <span class="title">Connect</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link nav-toggle"> <i class="far fa-handshake"></i>
                                    <span class="title">Join</span>
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
                                <div class="page-title">Result</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Result</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-topline-yellow">
                                        <div class="card-head">
                                            <header>Result</header>
                                        </div>
                                        <div class="card-body ">
                                            <div class="table-responsive">
                                                <table class="table table-striped custom-table table-hover">
                                                    <thead>
                                                        <tr style="text-align:center;">
                                                            <th>S No.</th>
                                                            <th>Questions Correct</th>
                                                            <th>Total Score</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $number = 1;
                                                        echo "<tr style='text-align:center;'>
                                                                <td>$number</td>
                                                                ";
                                                        $counter = 0;
                                                        $Resultans = 0;
                                                        if (isset($_POST['submit'])) {
                                                            if (!empty($_POST['quizcheck'])) {

                                                                // Loop to store and display values of individual checked checkbox.
                                                                $selected = $_POST['quizcheck'];
                                                                $q1 = " select answer_id from questionset where quiz_id=$quizid ";
                                                                $ansresults = mysqli_query($db, $q1);
                                                                $i = 1;
                                                                while ($rows = mysqli_fetch_array($ansresults)) {
                                                                    $flag = $rows['answer_id'] == $selected[$i];
                                                                    if ($flag) {
                                                                        $counter++;
                                                                        $Resultans++;
                                                                    } else {
                                                                        $counter++;
                                                                    }

                                                                    $i++;
                                                                    $number++;
                                                                }

                                                                echo "<td> $Resultans Questions Correct out of " . $totalrows . "</td>
                                                                
                                                                <td>Score is " . $Resultans . " out of " . $totalrows . "</td>
                                                                
                                                                </tr>";
                                                            }
                                                        }
                                                        $profid = $_POST['profid'];
                                                        $uniq_id = $_SESSION['uniqID'];
                                                        $firstname = $_SESSION['firstName'];
                                                        $lastname = $_SESSION['lastName'];
                                                        $date = date("d/M/Y" . ',' . " D");
                                                        $repeatquery = mysqli_query($db, "select * from result where uniq_id='$uniq_id' and quiz_id='$quizid';");
                                                        if (mysqli_num_rows($repeatquery) > 0) {
                                                            echo '<script>location.href="assigned.php";</script>';
                                                        } else {
                                                            $finalresult = " insert into result(uniq_id, quiz_id,prof_id, firstname, lastname, totalquestions, correct, marks,attemptedon) VALUES('$uniq_id','$quizid','$profid','$firstname','$lastname','$totalrows','$Resultans','$Resultans','$date') ";
                                                            $runquery = mysqli_query($db, $finalresult);
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <!-- Common js-->
    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/layout.js"></script>
    <script src="../assets/js/theme-color.js"></script>
    <!-- Material -->
    <script src="../assets/plugins/material/material.min.js"></script>
    <script src="https://kit.fontawesome.com/f004f1adc5.js" crossorigin="anonymous"></script>
    <!-- end js include path -->
</body>

</html>