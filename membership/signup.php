<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Login - AikiCity</title>
    <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/pages/login-register-lock.css" rel="stylesheet">
    <link href="css/master-stylesheet.css" rel="stylesheet">
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
</head>

<body class="card-no-border">
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
    <section id="wrapper">
        <div class="login-register" style="background-image:url(assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform">
                        <h3 class="box-title mb-20">Sign In</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Username"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Password"> </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-info pull-left pt-0">
                                    <input id="checkbox-signup" type="checkbox" class="filled-in chk-col-light-blue">
                                    <label for="checkbox-signup"> Remember me </label>
                                </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock mr-5"></i> Forgot pwd?</a>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 pb-20">
                                <button class="btn btn-block btn-lg btn-primary btn-rounded" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div class="col-sm-12 text-center">
                                Don't have an account? <a href="signup.php" class="text-info ml-5"><b>Sign Up</b></a>
                                <br /><br />
                                <a href="../index.php">Home Page</a>
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal" id="recoverform">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email"> </div>
                        </div>
                        <div class="form-group text-center mt-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>

</body>

</html>