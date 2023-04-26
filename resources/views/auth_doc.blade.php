<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Auth.doc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Auth.doc" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="../plugins/Auth.doc/magnific-popup.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="dark-sidenav">
    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="crm-index.html" class="logo">
                <span>
                    <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                </span>
            
                    <h4 class="logo-lg logo-light">Auth.doc</h4>
             
            </a>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                <li class="menu-label mt-0">Main</li>
                <li>
                    <a href="javascript: void(0);"> <i data-feather="home"
                            class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{route('index')}}"><i
                                    class="ti-control-record"></i>Home</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="grid"
                            class="align-self-center menu-icon"></i><span>Apps</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                      
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Projects <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="apps-project-overview.html">Overview</a></li>
                                <li><a href="apps-project-projects.html">Projects</a></li>
                                <li><a href="apps-project-board.html">Board</a></li>
                                <li><a href="apps-project-teams.html">Teams</a></li>
                                <li><a href="apps-project-files.html">Files</a></li>
                                <li><a href="apps-new-project.html">New Project</a></li>
                            </ul>
                        </li>
                       
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="lock"
                            class="align-self-center menu-icon"></i><span>Authentication</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{route('signup')}}"><i
                                    class="ti-control-record"></i>Add Admin</a></li>
                       
                    </ul>
                </li>

                <hr class="hr-dashed hr-menu">
                <li class="menu-label my-2">olders</li>


                <li>
                    <a href="widgets.html"><i data-feather="layers"
                            class="align-self-center menu-icon"></i><span>Repord Card</span><span
                            class="badge badge-soft-success menu-arrow">Exemple</span></a>
                </li>

               
            </ul>

            <div class="update-msg text-center">
                <a href="javascript: void(0);" class="float-right close-btn text-white" data-dismiss="update-msg"
                    aria-label="Close" aria-hidden="true">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="mt-3">Auth.doc</h5>
                <p class="mb-3">Checks the integrity of the documents, in particular the transcripts or Report Card
                    of the university of yaounde 1</p>
            </div>
        </div>
    </div>
    <!-- end left-sidenav-->


    <div class="page-wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- Navbar -->
            <nav class="navbar-custom">
                <ul class="list-unstyled topbar-nav float-right mb-0">
                    <li class="dropdown hide-phone">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i data-feather="search" class="topbar-icon"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-lg p-0">
                            <!-- Top Search Bar -->
                            <div class="app-search-topbar">
                                <form action="#" method="get">
                                    <input type="search" name="search" class="from-control top-search mb-0"
                                        placeholder="Type text...">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </li>

                    

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="">{{ $name }}</span>
                            
                            <img src="assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i data-feather="user"
                                    class="align-self-center icon-xs icon-dual mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i data-feather="settings"
                                    class="align-self-center icon-xs icon-dual mr-1"></i> Settings</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="{{route('signOut')}}"><i data-feather="power"
                                    class="align-self-center icon-xs icon-dual mr-1"></i> Logout</a>
                        </div>
                    </li>
                </ul>
                <!--end topbar-nav-->

                <ul class="list-unstyled topbar-nav mb-0">
                    <li>
                        <button class="nav-link button-menu-mobile">
                            <i data-feather="menu" class="align-self-center topbar-icon"></i>
                        </button>
                    </li>
                    <li class="creat-btn">
                        <div class="nav-link">
                            <a class=" btn btn-sm btn-soft-primary" href="#" role="button"><i
                                    class="fas fa-plus mr-2"></i>Import Report Cart</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row">
                                <div class="col">
                                    <h4 class="page-title">Auth.doc</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Scan</li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Hachage</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Verification</a></li>
                                    </ol>
                                </div>
                                <!--end col-->
                                <div class="col-auto align-self-center">
                                    <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                        <span class="day-name" id="Day_Name">Download</span>&nbsp;
                                        <span class="" id="Select_date">Repord Card</span>
                                        <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i data-feather="download" class="align-self-center icon-xs"></i>
                                    </a>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Take Repord card </h4>
                                <p class="text-muted mb-0">Take photo</p>
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <a href="assets/images/small/img-1.jpg" class="image-popup-vertical-fit">
                                    <img src="assets/images/small/img-1.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Auth.doc Gallery</h4>
                                <p class="text-muted mb-0">You may put any HTML content in each gallery item.</p>
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <div class="popup-gallery d-flex">
                                    <a href="assets/images/small/img-2.jpg" title="The Cleaner">
                                        <img src="assets/images/small/img-2.jpg" alt="" class="img-fluid">
                                    </a>
                                    <a href="assets/images/small/img-3.jpg" title="The Cleaner">
                                        <img src="assets/images/small/img-3.jpg" alt="" class="img-fluid">
                                    </a>
                                    <a href="assets/images/small/img-4.jpg" title="The Cleaner">
                                        <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Popup With Video And Map</h4>
                                <p class="text-muted mb-0">In this example Auth.doces are automatically disabled on
                                    small screen size and default behavior of link is triggered.</p>
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <a class="btn btn-outline-primary popup-youtube"
                                        href="http://www.youtube.com/watch?v=0O2aH4XLbto">Open YouTube video</a>
                                    <a class="btn btn-outline-primary popup-vimeo"
                                        href="https://vimeo.com/45830194">Open Vimeo video</a>
                                    <a class="btn btn-outline-primary popup-gmaps"
                                        href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open
                                        Google Map</a>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div><!-- container -->

            <footer class="footer text-center text-sm-left">
                {{-- &copy; 2023 Auth.doc <span class="d-none d-sm-inline-block float-right">Crafted with <i
                        class="mdi mdi-heart text-danger"></i> by KemgneFloriane</span> --}}
            </footer>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/simplebar.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/moment.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>

    <script src="../plugins/Auth.doc/jquery.magnific-popup.js"></script>
    <script src="assets/pages/jquery.Auth.doc.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>
