<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title>ALERT</title>
    <link rel="stylesheet" href="assets/web/assets/boot/boot.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/boot/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/boot/css/mbr-additional.css" type="text/css">



</head>

<body>
    <section class="menu cid-s16OMeKKiW" once="menu" id="menu2-1">



        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">

                    <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-7" href="#">
                            WEBAPP</a></span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">


            </div>
        </nav>
    </section>

    <section class="engine"><a href="#">OOSD</a></section>
    <section class="header1 cid-s1FE8xQoI3" id="header16-a">





        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10 align-center">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                        <?php echo $_SESSION['topic'] ?>
                    </h1>

                    <p class="mbr-text pb-3 mbr-fonts-style display-5">
                        <?php echo $_SESSION['message'] ?> </p>
                    <div class="mbr-section-btn"><a class="btn btn-md btn-black-outline display-4" href=<?php echo $_SESSION['redirectto'] ?>>CONTINUE</a></div>
                </div>
            </div>
        </div>

    </section>

    <section once="footers" class="cid-s1FEaYCAd6" id="footer6-b">





        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                        � Copyright 2020 OOSD - All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </section>


    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/theme/js/script.js"></script>


</body>

</html>