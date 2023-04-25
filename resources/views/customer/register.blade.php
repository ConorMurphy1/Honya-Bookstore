<!DOCTYPE html>
<!--
Template Name: dashgrin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from themeforest to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Honya</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('dashgrin/dashgrin_download_pack/favicon.ico')}}">
    <link rel="icon" href="{{ asset('dashgrin/dashgrin_download_pack/favicon.ico')}}" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="{{ asset('dashgrin/dashgrin_download_pack/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-end align-items-center">

            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap pt-xl-0 pt-70">
                            <div class="auth-form w-xl-35 w-lg-65 w-sm-85 w-100 card pa-25 shadow-lg">
                                <a class="auth-brand text-center d-block mb-20" href="#">
                                    <img class="brand-img" src="dist/img/logo-light.png" alt="brand" />
                                </a>
                                <form>
                                    <h1 class="display-4 mb-10 text-center">Sign up for free</h1>
                                    <p class="mb-30 text-center">Create your account and start your Shopping today</p>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" placeholder="First name" name="name" value="" type="text">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" placeholder="Last name" name="phone_no" value="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" name="email" type="email">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="address" placeholder="Address" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="passoword" type="password">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Confirm Password" type="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">I have read and agree to the <a href=""><u>term and conditions</u></a></label>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                                    <div class="option-sep">or</div>
                                    <div class="form-row">
                                        <div class="col-sm-6 mb-20">
                                            <button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button>
                                        </div>
                                        <div class="col-sm-6 mb-20">
                                            <button class="btn btn-primary btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span></button>
                                        </div>
                                    </div>
                                    <p class="text-center">Already have an account? <a href="#">Sign In</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/dist/js/feather.min.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/dist/js/toggle-data.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/dist/js/init.js')}}"></script>
</body>

</html>
