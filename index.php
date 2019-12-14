<!doctype html>
<html lang="en">

<head>
    <title>AikiCity &mdash; Job Matcher</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body">
            </div>

        </div> <!-- .site-mobile-menu -->


        <!-- NAVBAR -->
        <?php include 'navbar.php'; ?>

        <!-- HOME -->
        <section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="mb-5 text-center">
                            <h1 class="text-white font-weight-bold">Where Employers and Employees Meet</h1>
                            <p>Upload a job opening and get response from our expert freelancers for any job </p>
                        </div>
                        <?php include 'search_form.php'; ?>
                    </div>
                </div>
            </div>


        </section>

        <?php include 'statistics.php';
        include 'job_list.php'; ?>




        <?php include 'company.php'; ?>


        <?php include 'testimonial.php'; ?>

        <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2 class="text-white">Looking For A Job?</h2>
                        <p class="mb-0 text-white lead">You're in the right place click the button and get started.</p>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>

    </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script src="js/custom.js"></script>


</body>

</html>