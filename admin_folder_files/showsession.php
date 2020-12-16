<?php
session_start();
if (!isset($_SESSION['firstName'])) {
    header('location:../401/index.php');
}
require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="author" content="Sanchit Gupta" />
    <title>eduSpace</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="../getstarted/ProfSide/dark/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../getstarted/ProfSide/dark/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../getstarted/ProfSide/dark/fonts/material-design-icons/material-icon.css" rel="stylesheet"
        type="text/css" />
    <!--bootstrap -->
    <link href="../getstarted/ProfSide/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../getstarted/ProfSide/assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="../getstarted/ProfSide/assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="../getstarted/ProfSide/assets/css/material_style.css">
    <!-- inbox style -->
    <link href="../getstarted/ProfSide/assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="../getstarted/ProfSide/assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components"
        type="text/css" />
    <link href="../getstarted/ProfSide/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="../getstarted/ProfSide/assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
    <link href="../getstarted/ProfSide/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../getstarted/ProfSide/assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="../getstarted/ProfSide/assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="author" content="Sanchit Gupta" />
    <title>eduSpace</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="../getstarted/ProfSide/dark/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../getstarted/ProfSide/dark/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../getstarted/ProfSide/dark/fonts/material-design-icons/material-icon.css" rel="stylesheet"
        type="text/css" />
    <!--bootstrap -->
    <link href="../getstarted/ProfSide/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../getstarted/ProfSide/assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="../getstarted/ProfSide/assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="../getstarted/ProfSide/assets/css/material_style.css">
    <!-- inbox style -->
    <link href="../getstarted/ProfSide/assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="../getstarted/ProfSide/assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components"
        type="text/css" />
    <link href="../getstarted/ProfSide/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="../getstarted/ProfSide/assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
    <link href="../getstarted/ProfSide/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../getstarted/ProfSide/assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="../getstarted/ProfSide/assets/img/favicon.ico" />
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

                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <img alt="" class="img-circle " src="../getstarted/ProfSide/assets/img/dp.jpg" />
                                <span class="username username-hide-on-mobile"></span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="logout.php">
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
                                        <img src="../getstarted/ProfSide/assets/img/dp.jpg"
                                            class="img-circle user-img-circle" alt="User Image" />
                                    </div>
                                    <div class="pull-left info">
                                        <p> Mr. <?php
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
                            <li class="nav-item">
                                <a href="index.php" class="nav-link nav-toggle"> <i class="material-icons">dashboard</i>
                                    <span class="title">Logins</span>
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a href="showsession.php" class="nav-link nav-toggle"> <i
                                        class="material-icons">assignment</i>
                                    <span class="title">Sessions</span>
                                </a>
                            <li class="nav-item">
                                <a href="quiz.php" class="nav-link nav-toggle"> <i class="fas fa-pen-fancy"></i>
                                    <span class="title">Quiz Names</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="grade.php" class="nav-link nav-toggle"> <i class="fa fa-book"></i>
                                    <span class="title">Grades</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-toggle" href="addimage.php"><i class="fas fa-image"></i>
                                    <span class="title">Add Images</span>
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
                                <div class="page-title">All Sessions</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Sessions</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-topline-yellow">
                                        <div class="card-head">
                                            <header>Sessions</header>
                                        </div>
                                        <div class="card-body ">
                                            <div class="table-responsive">
                                                <table class="table table-striped custom-table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>S No.</th>
                                                            <th></th>
                                                            <th style='text-align:center;'>Lecture Name</th>
                                                            <th>By:</th>
                                                            <th style='text-align:center;'>Link</th>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Action</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $counter = 1;
                                                        $sql = "select * from session order by s_id ASC";
                                                        $result = mysqli_query($db, $sql);
                                                        if (mysqli_num_rows($result) == 0) {
                                                            echo "<tr style='text-align:center;'><td colspan=9 style='font-size:25px;'>No Session Created Yett!!!</td></tr>";
                                                        } else {
                                                            while ($row = mysqli_fetch_array($result)) {
                                                                extract($row);
                                                                $query1 = mysqli_query($db, "select * from appuser where uniq_id='$prof_id'");
                                                                $row1 = mysqli_fetch_assoc($query1);
                                                                // extract($row1);
                                                                $f = $row1['first_name'];
                                                                $l = $row1['last_name'];
                                                                echo "<tr>
                                                            <td>$counter</td>
                                                            <td></td>
                                                            <td style='text-align:center;'>$name</td>
                                                            <td>Prof. $f $l</td>
                                                            <td style='text-align:center;'><a href='$link' target='_blank'>$link&nbsp;&nbsp;&nbsp;<i class='fas fa-external-link-alt'></i></a></td>
                                                            <td>$date</td>
                                                            <td>$time</td>
                                                             <td style='text-align:center;'>
                                                             <a onclick='confbox($s_id)' class='btn btn-danger btn-sm'>Delete!!!</a></td>
                                                                <td></td>
                                                             </tr>";
                                                                $counter++;
                                                            }
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
    <script src="../getstarted/ProfSide/assets/plugins/jquery/jquery.min.js"></script>
    <script src="../getstarted/ProfSide/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="../getstarted/ProfSide/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Common js-->
    <script src="../getstarted/ProfSide/assets/js/app.js"></script>
    <script src="../getstarted/ProfSide/assets/js/layout.js"></script>
    <script src="../getstarted/ProfSide/assets/js/theme-color.js"></script>
    <!-- Material -->
    <script src="../getstarted/ProfSide/assets/plugins/material/material.min.js"></script>
    <script src="https://kit.fontawesome.com/f004f1adc5.js" crossorigin="anonymous"></script>
    <script>
    function confbox(sid) {
        var r = confirm("Press Ok to delete the session!!!!");
        if (r == true) {
            location.href = "deletesession.php?id=" + sid + "";
        } else {
            location.href = "showsession.php";
        }
    }
    </script>
</body>

</html>