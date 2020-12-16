<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Register</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
        type="text/css" />
    <!-- icons -->
    <link href="login/dark/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="login/assets/plugins/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
    <link href="login/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="login/assets/css/pages/extra_pages.css">

    <link rel="stylesheet" href="../about/assets/css/slicknav.css">
    <link rel="stylesheet" href="../about/assets/css/style.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="login/assets/img/favicon.ico" />
    <style>
    .some {
        display: block;
        padding-top: 25px;
        display: flex;
        /* 2. display flex to the rescue */
        flex-direction: row;
        color: white;
    }

    .header-btn:hover {
        color: white;
    }

    input[type='file'] {
        background-color: #3c4452;
        color: white;
        padding: .175rem 1.25rem;
        border: 1px solid #98a2b3;
        border-radius: .35rem;
    }

    body {
        user-select: none;
    }
    </style>
</head>

<body spellcheck="false">
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="../index.php"><img src="../about/assets/img/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="../index.php"> Home</a></li>
                                        <li><a href="../MainPage/aboutDevelopers/index.php">Developers</a></li>
                                        <li><a href="../gallery.php">Gallery</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="../about/help.php">Help</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <a href="../MainPage/contactform/contact.php" class="btn header-btn">Contact Us</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <div class="row">
        <div class="col-md-12">
            <div class="container-login100 page-background">
                <div class="wrap-login100">
                    <form action="registration.php" method="POST" enctype="multipart/form-data" name="register"
                        onsubmit="return validate();">

                        <span class="login100-form-title p-b-34 p-t-27">
                            Create New Account
                        </span>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="number" name="uniqid" placeholder="UNIQUE ID" min="1000000"
                                max="9999999" maxlength="7" required>
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                        <div class="validate-input" style="margin-top:-20px;">
                            <small class="text-muted">
                                *The Unique ID must be of 7 digits.
                            </small>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="firstname" placeholder="First Name" required>
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="lastname" placeholder="Last Name" required>
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="email" name="email" placeholder="E-mail Address" required>
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" name="password" id="password" placeholder="Password"
                                required>
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            <i class="far fa-eye" style="color:white;position:absolute;right:10px;bottom:11px;"
                                onclick="showpas();" id="showpass"></i>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" name="confirmpassword" id="confirmpassword"
                                placeholder="Confirm Password" oninput="checkpass();" required>

                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            <i class="far fa-eye" style="color:white;position:absolute;right:10px;bottom:11px;"
                                onclick="showpas1();" id="showpass1"></i>
                        </div>
                        <div id="divCheckPasswordMatch" style="color: white; margin-top: 5%;"></div>
                        <div class="validate-input">
                            <label style="color:white;">Upload ID Proof:</label>
                            <input class="form-control" type="file" name="snap" accept="image/*" required>
                            <small class="text-muted">
                                *Only upload image files i.e .png, .jpeg etc.
                            </small>
                        </div>
                        <div class="contact100-form-checkbox some">
                            <input type="radio" name="usertype" value="P" required>
                            <label for="professor" style="margin-top:-1%;">&nbsp;Professor</label>
                            <input type="radio" name="usertype" value="S" style="margin-left: 10%;">
                            <label for="student" style="margin-top:-1%;">&nbsp;Student</label><br><br>
                        </div>

                        <div class="container-login100-form-btn">
                            <button type="submit" id="register" name="register"
                                class="login100-form-btn">Register</button>
                        </div>
                        <div class="text-center p-t-30">
                            <a class="txt1" href="login.php">
                                Already have an account? <br><b style="color:white">Login In!!</b>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- start js include path -->
        <script src="login/assets/js/jquery.min.js"></script>
        <script src="../about/./assets/js/popper.min.js"></script>
        <!-- bootstrap -->
        <script src="login/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="../about/./assets/js/jquery.slicknav.min.js"></script>
        <script src="login/assets/js/main.js"></script>
        <script src="login/assets/js/register.js"></script>
        <script src="login/assets/js/pages/extra-pages/pages.js"></script>
        <script src="https://kit.fontawesome.com/f004f1adc5.js" crossorigin="anonymous"></script>
        <!-- end js include path -->

</body>

</html>