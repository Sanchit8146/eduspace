<?php
session_start();
if (!isset($_SESSION['uniqID'])) {
    header('location:../../../401/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eduspace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="connect.css" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="content">
        <div class="container">
            <a href="index.php" style="position:absolute;left:5%;"><span class="fa fa-arrow-left"
                    style="color:#181a1b;font-size:30px;"></span></a>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img src="Agnes.jpg"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>Agnes</h4>
                                <p class="text-muted">@Founder <span>| </span><span><a href="#"
                                            class="text-pink">websitename.com</a></span></p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button"
                                class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Connect
                                Now</button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>50+</h4>
                                            <p class="mb-0 text-muted">Clients</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>20+</h4>
                                            <p class="mb-0 text-muted">Projects</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>100+</h4>
                                            <p class="mb-0 text-muted">Hours</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img src="Gen.jpg"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>Gen Ju</h4>
                                <p class="text-muted">@Programmer <span>| </span><span><a href="#"
                                            class="text-pink">websitename.com</a></span></p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a></li>
                            </ul>
                            <button type="button"
                                class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Connect
                                Now</button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>20+</h4>
                                            <p class="mb-0 text-muted">Clients</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>10+</h4>
                                            <p class="mb-0 text-muted">Projects</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>50+</h4>
                                            <p class="mb-0 text-muted">Hours</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img src="Johnny.jpg"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>Johnny</h4>
                                <p class="text-muted">@Webdesigner <span>| </span><span><a href="#"
                                            class="text-pink">websitename.com</a></span></p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                            <button type="button"
                                class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Connect
                                Now</button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>60+</h4>
                                            <p class="mb-0 text-muted">Clients</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>40+</h4>
                                            <p class="mb-0 text-muted">Projects</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>120+</h4>
                                            <p class="mb-0 text-muted">Hours</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img src="Nathan.jpg"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>Nathan</h4>
                                <p class="text-muted">@Webdesigner <span>| </span><span><a href="#"
                                            class="text-pink">websitename.com</a></span></p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                            <button type="button"
                                class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Connect
                                Now</button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>10+</h4>
                                            <p class="mb-0 text-muted">Clients</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>5+</h4>
                                            <p class="mb-0 text-muted">Projects</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>20+</h4>
                                            <p class="mb-0 text-muted">Hours</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img src="Nellie.jpg"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>Nellie</h4>
                                <p class="text-muted">@Director <span>| </span><span><a href="#"
                                            class="text-pink">websitename.com</a></span></p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                            <button type="button"
                                class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Connect
                                Now</button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>70+</h4>
                                            <p class="mb-0 text-muted">Clients</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>50+</h4>
                                            <p class="mb-0 text-muted">Projects</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>250+</h4>
                                            <p class="mb-0 text-muted">Hours</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img src="sanchit.jpg"
                                    class="rounded-circle img-thumbnail" alt="profile-image"></div>
                            <div class="">
                                <h4>Sanchit Gupta</h4>
                                <p class="text-muted">@Manager <span>| </span><span><a href="#"
                                            class="text-pink">websitename.com</a></span></p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Facebook"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip"
                                        class="tooltips" href="" data-original-title="Skype"><i
                                            class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                            <button type="button"
                                class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Connect
                                Now</button>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>30+</h4>
                                            <p class="mb-0 text-muted">Clients</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>20+</h4>
                                            <p class="mb-0 text-muted">Projects</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mt-3">
                                            <h4>35+</h4>
                                            <p class="mb-0 text-muted">Hours</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center mb-3">
                    <button class="btn btn-lg btn-rounded gback" onclick="window.history.back()"
                        style="background-color:#181a1b;color:white;">Go Back</button>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <!-- container -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>