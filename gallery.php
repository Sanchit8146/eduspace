<?php
require_once("getstarted/connect.php");
?>
<!Doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eduSpace</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="about/assets/img/favicon.ico">
    <!-- CSS here -->
    <link rel="stylesheet" href="about/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="about/assets/css/slicknav.css">
    <link rel="stylesheet" href="about/assets/css/style.css">
    <style>
    .images .col-md-3 {
        display: flex;
        justify-content: center;
        height: 10%;
    }

    .images img {
        width: 100%;
        height: 220px;
        margin-top: 20px;
        box-shadow: 0px 0px 10px 2px black;
        margin-bottom: 5%;
        border-radius: 15px;
    }

    .images img:hover {
        transform: scale(1.05, 1.05);
        box-shadow: 0px 0px 15px 5px black;
    }
    </style>
</head>

<body style="user-select:none;" spellcheck="false">

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="about/assets/img/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <div class="container">
        <header>
            <!-- Header Start -->
            <div class="header-area header-transparrent ">
                <div class="main-header header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="index.php"><img src="about/assets/img/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php"> Home</a></li>
                                            <li><a href="MainPage/aboutDevelopers/index.php">Developers</a></li>
                                            <li><a href="gallery.php">Gallery</a></li>
                                            <li><a href="getstarted/login.php">Get Started</a>
                                                <ul class="submenu">
                                                    <li><a href="getstarted/login.php">Login</a></li>
                                                    <li><a href="getstarted/register.php">Register</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about/help.php">Help</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="MainPage/contactform/contact.php" class="btn header-btn">Contact Us</a>
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
        <main style="position:absolute;top:15%;">
            <h1 class="text-center" style="color:black;font-family:Playfair-display;font-weight:700;">Gallery<br>
                <span class="text-muted" style="font-size:17px;font-weight:500;">First 4 images are dummy images i.e
                    hardcoded and the
                    rest images will
                    be inserted
                    from
                    database</span>
            </h1>
            <!-- have-project Start-->
            <div class="container">
                <div class="row images">
                    <div class="col-md-3">
                        <img src="admin_folder_files/galleryimages/r1.jpg" class="img-responsive">
                    </div>
                    <div class="col-md-3">
                        <img src="admin_folder_files/galleryimages/r2.jpeg" class="img-responsive">
                    </div>
                    <div class="col-md-3">
                        <img src="admin_folder_files/galleryimages/r3.jpg" class="img-responsive">
                    </div>
                    <div class="col-md-3">
                        <img src="admin_folder_files/galleryimages/r4.jpg" class="img-responsive">
                    </div>
                    <?php
                    $query = mysqli_query($db, "select * from gallery");
                    while ($row = mysqli_fetch_array($query)) {
                        extract($row); ?>
                    <div class="col-md-3">
                        <img src="admin_folder_files/galleryimages/<?php echo $row["snap"]; ?>" class="img-responsive">
                    </div>
                    <?php  }

                    ?>
                </div>
            </div>
        </main>
    </div>
    <!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="about/./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="about/./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="about/./assets/js/popper.min.js"></script>
    <script src="about/./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="about/./assets/js/jquery.slicknav.min.js"></script>
    <!-- Jquery Plugins, main Jquery -->
    <script src="about/./assets/js/main2.js"></script>
</body>

</html>