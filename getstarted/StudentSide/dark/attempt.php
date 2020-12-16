<?php
session_start();
if (!isset($_SESSION['uniqID'])) {
    header('location:../../../401/index.php');
}
require_once("../../connect.php");
$quizid = $_GET["id"];
$profid = $_GET["profid"];
$uniqid = $_SESSION['uniqID'];
if ($quizid == "") {
    header('location:assigned.php');
}
$selectquery = mysqli_query($db, "select * from quiz where quiz_id=$quizid");
$countquery = mysqli_query($db, "select count(*) as totalrows from questionset where quiz_id=$quizid");
$row = mysqli_fetch_array($selectquery);
$row1 = mysqli_fetch_array($countquery);
extract($row);
extract($row1);
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
    <link href="../../ProfSide/dark/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../../ProfSide/dark/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../../ProfSide/dark/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="../../ProfSide/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../ProfSide/assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="../../ProfSide/assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="../../ProfSide/assets/css/material_style.css">
    <!-- inbox style -->
    <link href="../../ProfSide/assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="../../ProfSide/assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components"
        type="text/css" />
    <link href="../../ProfSide/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="../../ProfSide/assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
    <link href="../../ProfSide/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../../ProfSide/assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="../../ProfSide/assets/img/favicon.ico" />

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
        grid-gap: 23px 29px;
    }
    </style>

</head>

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
    <div class="page-wrapper">
        <div class="page-logo">
            <a href="index.php">
                <i class="fa fa-graduation-cap" aria-hidden="true"
                    style="color:black; margin-left: 4%; padding-top: 2%;"></i>
                <span class="logo-default" style="color: black;">eduSpace</span> </a>
        </div>
        <div class="page-content-wrapper">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card card-topline-red" style="height:auto;">
                            <div class="card-head">
                                <?php
                                echo "<header><div style='font-size:14px;border:1px solid #ddd;padding: 10px;border-radius:5px;color:#ddd;text-align:center;'>Name of the quiz: " . $quizname . " <div></header>";
                                ?>
                            </div>
                            <p style="margin : 20px auto 20px auto ;">
                                <?php
                                // echo "Question # " . $_SESSION["questionnumber"];
                                ?>
                            </p>
                            <div class="card-body ">
                                <form action="checked.php" method="POST">
                                    <div class="grid-container">
                                        <input type="hidden" value="<?php echo $quizid; ?>" name="quizid" readonly
                                            required>
                                        <?php
                                        for ($i = 1; $i <= $totalrows; $i++) {
                                            $ansid = $i;
                                            $sql1 = "SELECT * FROM questionset WHERE ques_id = $i and quiz_id=$quizid";
                                            $result1 = mysqli_query($db, $sql1);
                                            if (mysqli_num_rows($result1) > 0) {
                                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                        ?>
                                        <div class=" grid-item">
                                            <label for="question">Question <?php echo $i; ?>:</label>
                                        </div>
                                        <div class="grid-item1">
                                            <input type="text" class="form-control"
                                                value=" <?php echo $row1['question']; ?>" readonly required>
                                        </div>
                                        <?php
                                                    $sql = "SELECT * FROM answerset WHERE ans_id = $i and quiz_id=$quizid";
                                                    $result = mysqli_query($db, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>

                                        <div class="grid-item">
                                            <input type="radio" name="quizcheck[<?php echo $ansid; ?>]"
                                                id="<?php echo $ansid; ?>" value="<?php echo $row['a_id']; ?>" required>
                                        </div>
                                        <div class="grid-item1">
                                            <label> <?php echo $row['answer']; ?> </label>
                                        </div>
                                        <?php
                                                        }
                                                    }
                                                }
                                            }
                                        }

                                        ?>

                                    </div>
                                    <div style="text-align:center;margin-top:45px;margin-left:-10px;">
                                        <input type="hidden" value="<?php echo $profid; ?>" name="profid" readonly
                                            required>
                                        <?php
                                        $sql1 = "SELECT * FROM questionset WHERE quiz_id=$quizid";
                                        $result1 = mysqli_query($db, $sql1);
                                        if (mysqli_num_rows($result1) > 0) {
                                            $checkquery = mysqli_query($db, "select * from result where quiz_id='$quizid' and uniq_id='$uniqid'");
                                            if (mysqli_num_rows($checkquery) > 0) {
                                                echo "<script>alert('You have already submitted the quiz!!');
                                                location.href='assigned.php';</script>";
                                            } else {
                                                echo '<input type="submit" name="submit" class="btn btn-circle btn-primary btn-lg"
                                            Value="Submit">';
                                            }
                                        } else {
                                            echo '<button class="btn btn-circle btn-dark btn-lg" disabled>Submit</button>';
                                        }
                                        ?>
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