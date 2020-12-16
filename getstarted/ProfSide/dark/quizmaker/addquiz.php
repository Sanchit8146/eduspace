<?php
session_start();
if (!isset($_SESSION['uniqid'])) {
    header('location:../../../../401/index.php');
}
?>
<!DOCTYPE html>
<html>

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="description" content="eduSpace" />
        <meta name="author" content="Sanchit Gupta" />
        <title>edu Space</title>
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"
            type="text/css" />
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
            font-size: 17px;
        }

        body {
            user-select: none;
        }
        </style>
    </head>

<body spellcheck="false"
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
    <?php
    require_once("../../../connect.php");
    $query = mysqli_query($db, "select max(quiz_id) as id from quiz;");
    $row = mysqli_fetch_array($query);
    extract($row);
    $id = $id + 1;
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
                    <div class="col-md-12">
                        <div class="card card-topline-green"
                            style="margin: 1% 12% 4% 12%; padding-left:5%; padding-right:8%;">
                            <form action="writequiz.php" method="POST" name="quizname">
                                <div class="card-head text-center">
                                    <header>
                                        <label>Enter the name of the quiz</label>
                                        <input type="hidden" value="<?php echo $id; ?>" name="quizid" readonly>
                                        <input type="text" class="form-control" name="quizname" id="qname"
                                            placeholder="Enter quiz name" required>
                                    </header>
                                    <header>
                                        <label>Enter the quiz description</label>
                                        <input type="text" class="form-control" name="description"
                                            placeholder="Enter quiz description" required>
                                    </header>
                                    <header>
                                        <label>Enter the due date</label>
                                        <input type="date" class="form-control" name="duedate"
                                            placeholder="Enter due date" required>
                                    </header>
                                </div>
                                <input type="submit" style="display:block;margin:20px auto 10px auto ;" name="next"
                                    value="Next" class="btn btn-circle btn-success btn-lg"><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="jquery.alphanum.js"></script>
    <script>
    $('#qname').alphanum({
        allow: ''
    });
    </script>
</body>

</html>