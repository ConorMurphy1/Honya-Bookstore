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
    <title>Honya-BookStore</title>
    <meta name="description" content="Books of All Genre or Language" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('dashgrin/dashgrin_download_pack/html/favicon.ico')}}">
    <link rel="icon" href="{{ asset('dashgrin/dashgrin_download_pack/html/favicon.ico')}}" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('dashgrin/dashgrin_download_pack/html/dist/css/style.css')}}" rel="stylesheet" type="text/css">

    <!-- Data Table CSS -->
    <link href="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/datatables.net-dt/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>

	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

        {{-- @if () --}}
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-dark fixed-top hk-navbar">
            <a class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" href="javascript:void(0);"><span class="feather-icon"><i data-feather="more-vertical"></i></span></a>
			<a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand" href="index.html">
                <img class="brand-img d-inline-block" src="dist/img/logo-dark.png" alt="Honya-Bookstore" />
            </a>
			<ul class="navbar-nav hk-navbar-content order-xl-2">
				<li class="nav-item">
                    <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="search"></i></span></a>
                </li>
                <li class="nav-item">
                    <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="settings"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-hover" href="#"> <i class="material-icons pt-2">shopping_cart</i></a>
                </li>
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="{{asset('storage/user_image')}}" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>Madelyn Shane<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <div class="sub-dropdown-menu show-on-hover">
                            <div class="dropdown-menu open-left-side">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-0">
					<li class="nav-item">
						<a href="#" class="nav-link active">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Books</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Latest</a>
							<a class="dropdown-item" href="#">Best Seller</a>
							<a class="dropdown-item" href="#">Coming Soon</a>
						</div>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Contact Us</a>
					</li>
				</ul>
            </div>

		</nav>
        <form role="search" class="navbar-search">
            <div class="position-relative">
                <a href="javascript:void(0);" class="navbar-search-icon"><span class="feather-icon"><i data-feather="search"></i></span></a>
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
                <a id="navbar_search_close" class="navbar-search-close" href="#"><span class="feather-icon"><i data-feather="x"></i></span></a>
            </div>
        </form>
        <!-- /Top Navbar -->

        {{-- @if(auth()->user->role == "staff" || auth()->user->role == "admin") --}}

        <!-- Vertical Nav -->
        <nav class="hk-nav hk-nav-light">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <div class="nav-header">
                        <span>User Interface</span>
                        <span>UI</span>
                    </div>
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#books_drp">
                                <i class="ion ion-md-outlet"></i>
                                <span class="nav-link-text">Books</span>
                            </a>
                            <ul id="books_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="alerts.html">Contract Types</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="alerts.html">Contracts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="avatar.html">Author</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="badge.html">Categories</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="buttons.html">Books</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#customer_drp">
                                <i class="ion ion-md-outlet"></i>
                                <span class="nav-link-text">Customers</span>
                            </a>
                            <ul id="customer_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="alerts.html">Customers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="alerts.html">Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="avatar.html">Customer Types</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#employee_drp">
                                <i class="ion ion-md-outlet"></i>
                                <span class="nav-link-text">Employees</span>
                            </a>
                            <ul id="employee_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="alerts.html">Roles</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="alerts.html">Employees</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->
        {{-- @endif --}}

        <!-- Setting Panel -->
        <div class="hk-settings-panel">
            <div class="nicescroll-bar position-relative">
                <div class="settings-panel-wrap">
                    <div class="settings-panel-head">
                        <img class="brand-img d-inline-block align-top" src="dist/img/logo-light.png" alt="Honya-Bookstore" />
                        <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                    </div>

                    <hr>
                    <h6 class="mb-5">Navigation</h6>
                    <p class="font-14">Menu comes in two modes: dark & light</p>
                    <div class="button-list hk-nav-select mb-10">
                        <button type="button" id="nav_light_select" class="btn btn-outline-success btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="nav_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <h6 class="mb-5">Top Nav</h6>
                    <p class="font-14">Choose your liked color mode</p>
                    <div class="button-list hk-navbar-select mb-10">
                        <button type="button" id="navtop_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="navtop_dark_select" class="btn btn-outline-success btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>Scrollable Header</h6>
                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-success scroll-nav-switch"></div>
                    </div>
                    <button id="reset_settings" class="btn btn-success btn-block btn-reset mt-30">Reset</button>
                </div>
            </div>
            <img class="d-none" src="dist/img/logo-light.png" alt="Honya-Bookstore" />
            <img class="d-none" src="dist/img/logo-dark.png" alt="Honya-Bookstore" />
        </div>
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            @yield('content')
            <!-- /Container -->

            <!-- Footer -->
            <div class="hk-footer-wrap container-fluid px-xxl-65 px-xl-20">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Jasny-bootstrap  JavaScript -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/dist/js/feather.min.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/dist/js/toggle-data.js')}}"></script>

	<!-- Sparkline JavaScript -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>

	<!-- Owl JavaScript -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/dist/js/init.js')}}"></script>
	<script src="{{ asset('dashgrin/dashgrin_download_pack/html/dist/js/dashboard-data.js')}}"></script>

    <!-- Data Table JavaScript -->
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('dashgrin/dashgrin_download_pack/html/dist/js/dataTables-data.js')}}"></script>

</body>

</html>
