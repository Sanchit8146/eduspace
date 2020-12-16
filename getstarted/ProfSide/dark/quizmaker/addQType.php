<?php
session_start();
if (!isset($_SESSION['uniqid'])) {
    header('location:../../../../401/index.php');
}
?>

<!DOCTYPE html>
<html>

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
    <link href="../fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="../../assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="../../assets/css/material_style.css">
    <!-- inbox style -->
    <link href="../../assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="../../assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components"
        type="text/css" />
    <link href="../../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body style="user-select:none;" spellcheck="false"
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">

    <div class="page-wrapper">
        <div class="page-logo">
            <a href="../index.php">
                <i class="fa fa-graduation-cap" aria-hidden="true"
                    style="color:black; margin-left: 4%; padding-top: 2%;"></i>
                <span class="logo-default" style="color: black;">eduSpace</span> </a>
        </div>
        <div class="page-content-wrapper">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-topline-green"
                            style="margin: 1% 12% 4% 12% ; padding-left: 5%;padding-right:8%">
                            <div class="card-head">
                                <?php
                                echo "<header><div style='font-size:14px;border:1px solid #ddd;padding: 10px;border-radius:5px;color:#ddd;text-align:center;'>Quiz Name:  " . $_SESSION["quizname"] . "<div></header>";
                                ?>
                            </div>

                            <p style="margin : 20px auto auto auto ;">Question Number:
                                <?php
                                $quizname = $_SESSION["quizname"];
                                $quizid = (int)$_SESSION["quizid"];
                                require_once("../../../connect.php");
                                $query = "select * from questionset where quiz_id=$quizid";
                                $result = mysqli_query($db, $query);
                                $row = mysqli_num_rows($result);
                                echo $row + 1 . "<br>";
                                $_SESSION['questionnumber'] = $row + 1;
                                $db->close();
                                ?>
                            </p>


                            <div style="display:block; margin: auto;">
                                <a href="addSC.php">
                                    <input id="btn2" type="submit" name="singleC" style="margin: 25px 0px 25px 25px;"
                                        class="btn btn-circle btn-success btn-lg" value="Single Choice">
                                </a>

                                <a href="addTF.php">
                                    <input id="btn3" type="submit" name="truefalse" style="margin: 25px auto 25px 25px;"
                                        class="btn btn-circle btn-success btn-lg" value=" True/False ">
                                </a>
                            </div>

                            <footer>
                                <?php 
                                if($row==0){
                                   echo ' <button class="btn btn-circle btn-dark btn-lg"
                                      style="display: block; margin: 10px auto 25px auto;" disabled>Done</button>';
                                }
                                else{
                                    echo '<a href="../assign.php">
                                    <input id="submit" class="btn btn-circle btn-primary btn-lg" type="submit"
                                        name="signup" style="display: block; margin: 10px auto 25px auto;" value="Done">
                                </a>';
                                }
                                ?>
                            </footer>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>