<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Dashboard - AikiCity</title>
    <link href="../assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/vendors/morrisjs/morris.css" rel="stylesheet">
    <link href="../assets/vendors/c3-master/c3.min.css" rel="stylesheet">
    <link href="css/pages/float-chart.css" rel="stylesheet">
    <link href="../assets/vendors/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="css/master-stylesheet.css" rel="stylesheet">
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <div class="loader">
            <div class="lds-roller">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <div id="main-wrapper">
        <?php include 'header.php';
        include 'aside.php'; ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard V1</li>
                        </ol>
                    </div>
                </div>
                <?php include 'widget.php';
                include 'stat.php'; ?>
                <!-- ============================================================== -->
                <!-- Projects of the Month -->
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">My Bids</h5>
                                    </div>
                                </div>
                                <div class="table-responsive mt-20 no-wrap">
                                    <table class="table vm no-th-brd pro-of-month">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Status</th>
                                                <th>Date Applied</th>
                                                <th>Date Posted</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="active">
                                                <td><span class="round"><img src="../assets/images/users/2.jpg" alt="user" width="50"></span></td>
                                                <td>
                                                    <h6>
                                                        <!--Company- Name--> Nestle</h6><small class="text-muted">
                                                        <!--Job Summary--> Job smmegdggd ggd</small>
                                                </td>
                                                <td>Studio Ux</td>
                                                <td><span class="label label-info label-rounded">Closed</span></td>
                                                <td>Jan 2019</td>
                                                <td>May 2019</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Projects of the Month -->
                <!-- ============================================================== -->
            </div>
            <?php include 'footer.php'; ?>
        </div>
    </div>
    <script src="../assets/vendors/jquery/jquery.min.js"></script>
    <script src="../assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="../assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/vendors/ps/perfect-scrollbar.jquery.min.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="../assets/vendors/raphael/raphael-min.js"></script>
    <script src="../assets/vendors/morrisjs/morris.min.js"></script>
    <script src="../assets/vendors/d3/d3.min.js"></script>
    <script src="../assets/vendors/c3-master/c3.min.js"></script>
    <script src="../assets/vendors/toast-master/js/jquery.toast.js"></script>
    <script src="../assets/vendors/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="../assets/vendors/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>