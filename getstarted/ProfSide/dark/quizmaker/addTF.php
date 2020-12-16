<?php
session_start();
if (!isset($_SESSION['uniqid'])) {
    header('location:../../../../401/index.php');
}
require_once("../../../connect.php");
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

    <style>
    label {
        margin: 0;
    }

    .grid-item {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .grid-item1 {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        grid-column: 2 / span 4;
    }

    .grid-container {
        display: grid;
        grid-template-columns: auto auto auto auto auto;
        grid-gap: 30px 45px;
    }

    body {
        user-select: none;
    }
    </style>

</head>

<body spellcheck="false"
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
    <?php
    $quizid = (int)$_SESSION["quizid"];
    $query = mysqli_query($db, "select max(ques_id) as quesid from questionset where quiz_id=$quizid");
    $query1 = mysqli_query($db, "select max(a_id) as aid from answerset where quiz_id=$quizid");
    $row = mysqli_fetch_array($query);
    $row1 = mysqli_fetch_array($query1);
    extract($row);
    extract($row1);
    $quesid = $quesid + 1;
    ?>
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
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card card-topline-green" style="height:500px;">
                            <div class="card-head">
                                <?php
                                echo "<header><div style='font-size:14px;border:1px solid #ddd;padding: 10px;border-radius:5px;color:#ddd;text-align:center;'>Making questions for: " . $_SESSION["quizname"] . "<div></header>";
                                ?>
                            </div>
                            <p style="margin : 20px auto 20px auto ;">
                                <?php
                                echo "Question # " . $_SESSION["questionnumber"];
                                ?>
                            </p>
                            <div class="card-body ">
                                <form action="writeTF.php" method="POST">
                                    <div class="grid-container">
                                        <div class="grid-item">
                                            <label for="question">Question:</label>
                                        </div>
                                        <div class="grid-item1">
                                            <input type="hidden" class="form-control" name="quesid"
                                                value="<?php echo $quesid ?>" required readonly>
                                            <input type="hidden" class="form-control" name="aid"
                                                value="<?php echo $aid + 1 ?>" required readonly>
                                            <input type="text" class="form-control" name="question"
                                                placeholder="Enter Question" required>
                                        </div>
                                        <div class="grid-item">
                                            <label for="true"> True </label>
                                        </div>
                                        <div class="grid-item1">
                                            <input type="radio" name="answer" value="<?php echo $aid + 1; ?>" required>
                                        </div>
                                        <div class="grid-item">
                                            <label for="false"> False </label>

                                        </div>
                                        <div class="grid-item1">
                                            <input type="radio" name="answer" value="<?php echo $aid + 2; ?>">
                                        </div>
                                        <!-- <div class="grid-item">
                                            <label for="point">Points: </label>
                                        </div>
                                        <div class="grid-item1" style="grid-column:2/ 5;">
                                            <input class="form-control" type="text" name="point"
                                                placeholder=" Enter points" required>
                                        </div> -->
                                    </div>
                                    <div style="text-align:center;margin-top:45px;margin-left:-10px;">
                                        <input id="addtoquiz" type="submit" name="addtoquiz"
                                            class="btn btn-circle btn-primary btn-lg"
                                            Value="Add this Question to the Quiz">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>