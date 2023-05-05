<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dastyle - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="../plugins/leaflet/leaflet.css" rel="stylesheet">
    <link href="../plugins/lightpick/lightpick.css" rel="stylesheet" />

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
                <span>
                    <img src="assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                    <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                </span>
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
                    <a href="{{route('view_etudiant')}}"><i data-feather="layers"
                            class="align-self-center menu-icon"></i><span >Etudiant</span><span
                            class="badge badge-soft-success menu-arrow">Exemple</span></a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="file-plus" class="align-self-center menu-icon"></i><span>Pages</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href=" {{route('details')}}"><i class="ti-control-record"></i>Repord card</a></li>
                     
                    </ul>
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

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i data-feather="bell" class="align-self-center topbar-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">

                            <h6
                                class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                Notifications <span class="badge badge-primary badge-pill">2</span>
                            </h6>
                            <div class="notification-menu" data-simplebar>
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">2 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing and
                                                industry.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">10 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="assets/images/users/user-4.jpg" alt=""
                                                class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a
                                                reader.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">40 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i data-feather="users" class="align-self-center icon-xs"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">1 hr ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="assets/images/users/user-5.jpg" alt=""
                                                class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a
                                                reader.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">2 hrs ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i data-feather="check-circle" class="align-self-center icon-xs"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="ml-1 nav-user-name hidden-sm">Nick</span>
                            <img src="assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i data-feather="user"
                                    class="align-self-center icon-xs icon-dual mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i data-feather="settings"
                                    class="align-self-center icon-xs icon-dual mr-1"></i> Settings</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="#"><i data-feather="power"
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
                                    class="fas fa-plus mr-2"></i>New Task</a>
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
                                <div class="col-auto align-self-center">
                                    <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                        <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                        <span class="" id="Select_date">Jan 11</span>
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
                    <div class="col-12">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade " id="Profile_Project" role="tabpanel"
                                aria-labelledby="Profile_Project_tab">
                                <div class="row mb-4">
                                    <div class="col">
                                        <form>
                                            <div class="input-group input-group-lg">
                                                <input type="text" id="example-input1-group2"
                                                    name="example-input1-group2" class="form-control"
                                                    placeholder="Search">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-soft-primary"><i
                                                            class="fas fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <!--end col-->
                                    <div class="col-auto">
                                        <button type="button" class="btn btn-soft-primary btn-lg"><i
                                                class="fas fa-filter"></i></button>
                                        <button type="button" class="btn btn-soft-primary btn-lg">Add
                                            Project</button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="card-body  text-center">
                                                <img src="assets/images/widgets/project2.jpg" alt=""
                                                    class="rounded-circle d-block mx-auto mt-2" height="70">
                                                <h4 class="m-0 font-weight-semibold text-dark font-16 mt-3">Body Care
                                                </h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client :
                                                    </span>Hyman M. Cross</p>
                                                <div class="mt-3">
                                                    <h5 class="font-24 m-0 font-weight-bold">$26,100</h5>
                                                    <p class="mb-0 text-muted">Total Budget</p>
                                                </div>
                                                <a href="#" class="btn btn-soft-primary  btn-block mt-3">More
                                                    Details</a>
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="card-body  text-center">
                                                <img src="assets/images/widgets/project4.jpg" alt=""
                                                    class="rounded-circle d-block mx-auto mt-2" height="70">
                                                <h4 class="m-0 font-weight-semibold text-dark font-16 mt-3">Book My
                                                    World</h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client :
                                                    </span>Johnson M. delly</p>
                                                <div class="mt-3">
                                                    <h5 class="font-24 m-0 font-weight-bold">$71,200</h5>
                                                    <p class="mb-0 text-muted">Total Budget</p>
                                                </div>
                                                <a href="#" class="btn btn-soft-primary btn-block mt-3">More
                                                    Details</a>
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <img src="assets/images/widgets/project3.jpg" alt=""
                                                    class="rounded-circle d-block mx-auto mt-2" height="70">
                                                <h4 class="m-0 font-weight-semibold text-dark font-16 mt-3">Banking
                                                </h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client :
                                                    </span>Hyman M. Cross</p>
                                                <div class="mt-3">
                                                    <h5 class="font-24 m-0 font-weight-bold">$56,800</h5>
                                                    <p class="mb-0 text-muted">Total Budget</p>
                                                </div>
                                                <a href="#" class="btn btn-soft-primary btn-block mt-3">More
                                                    Details</a>
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <img src="assets/images/widgets/project1.jpg" alt=""
                                                    class="rounded-circle d-block mx-auto mt-2" height="70">
                                                <h4 class="m-0 font-weight-semibold text-dark font-16 mt-3">Transfer
                                                    money</h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client :
                                                    </span>Jack Z Jackson</p>
                                                <div class="mt-3">
                                                    <h5 class="font-24 m-0 font-weight-bold">$48,200</h5>
                                                    <p class="mb-0 text-muted">Total Budget</p>
                                                </div>
                                                <a href="#" class="btn btn-soft-primary btn-block mt-3">More
                                                    Details</a>
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="card-body  text-center">
                                                <img src="assets/images/widgets/project4.jpg" alt=""
                                                    class="rounded-circle d-block mx-auto mt-2" height="70">
                                                <h4 class="m-0 font-weight-semibold text-dark font-16 mt-3">Body Care
                                                </h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client :
                                                    </span>Hyman M. Cross</p>
                                                <div class="mt-3">
                                                    <h5 class="font-24 m-0 font-weight-bold">$26,100</h5>
                                                    <p class="mb-0 text-muted">Total Budget</p>
                                                </div>
                                                <a href="#" class="btn btn-soft-primary  btn-block mt-3">More
                                                    Details</a>
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="card-body  text-center">
                                                <img src="assets/images/widgets/project3.jpg" alt=""
                                                    class="rounded-circle d-block mx-auto mt-2" height="70">
                                                <h4 class="m-0 font-weight-semibold text-dark font-16 mt-3">Book My
                                                    World</h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client :
                                                    </span>Johnson M. delly</p>
                                                <div class="mt-3">
                                                    <h5 class="font-24 m-0 font-weight-bold">$71,200</h5>
                                                    <p class="mb-0 text-muted">Total Budget</p>
                                                </div>
                                                <a href="#" class="btn btn-soft-primary btn-block mt-3">More
                                                    Details</a>
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <img src="assets/images/widgets/project1.jpg" alt=""
                                                    class="rounded-circle d-block mx-auto mt-2" height="70">
                                                <h4 class="m-0 font-weight-semibold text-dark font-16 mt-3">Banking
                                                </h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client :
                                                    </span>Hyman M. Cross</p>
                                                <div class="mt-3">
                                                    <h5 class="font-24 m-0 font-weight-bold">$56,800</h5>
                                                    <p class="mb-0 text-muted">Total Budget</p>
                                                </div>
                                                <a href="#" class="btn btn-soft-primary btn-block mt-3">More
                                                    Details</a>
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <img src="assets/images/widgets/project2.jpg" alt=""
                                                    class="rounded-circle d-block mx-auto mt-2" height="70">
                                                <h4 class="m-0 font-weight-semibold text-dark font-16 mt-3">Transfer
                                                    money</h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client :
                                                    </span>Jack Z Jackson</p>
                                                <div class="mt-3">
                                                    <h5 class="font-24 m-0 font-weight-bold">$48,200</h5>
                                                    <p class="mb-0 text-muted">Total Budget</p>
                                                </div>
                                                <a href="#" class="btn btn-soft-primary btn-block mt-3">More
                                                    Details</a>
                                            </div>
                                            <!--end card-body-->
                                        </div>
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="tab-pane fade show active" id="Profile_Post" role="tabpanel"
                                aria-labelledby="Profile_Post_tab">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="row">

                                            <div class="col-lg-6">

                                            </div>
                                            <!--end card-->
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->

                                    <div class="card">

                                        <div class="card-body">
                                            <ul class="list-unstyled mb-0">
                                                <style>
                                                    * {
                                                        position: relative;
                                                    }

                                                    .bloc {
                                                        display: inline-block;
                                                        margin-right: 20px;
                                                    }

                                                    .fs-2 {
                                                        color: #000000;
                                                        font-size: 43px;
                                                        font-weight: bold;
                                                    }

                                                    .default_option {
                                                        font-size: 14px;
                                                        margin: 0 !important;
                                                    }

                                                    .bold_part {
                                                        font-size: 17px !important;
                                                    }

                                                    .english_subtitle {
                                                        font-style: italic;
                                                        font-size: 13px;
                                                        margin-top: -5px;
                                                    }

                                                    .content-uy1-logo {
                                                        height: 100px;
                                                        width: 80px;
                                                    }

                                                    .content-state-data span:nth-child(1),
                                                    .content-state-data span:nth-child(4) {
                                                        font-weight: bold;
                                                    }

                                                    table {
                                                        border-top: 3px solid #000000 !important;
                                                        border-right: 3px solid #000000 !important;
                                                    }

                                                    table th span {
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        height: 50px;
                                                        text-transform: capitalize;
                                                    }

                                                    table th,
                                                    table td:not(:nth-child(2)) {
                                                        text-align: center;
                                                    }

                                                    table thead,
                                                    table tbody {
                                                        border: none !important;
                                                        border-bottom: 3px solid #000000 !important;
                                                    }

                                                    table tr {
                                                        border-bottom: 1px solid #000000 !important;
                                                    }

                                                    table tr td,
                                                    table tr th {
                                                        border-left: 3px solid #000000 !important;
                                                    }

                                                    .content-recap {
                                                        max-width: 650px;
                                                    }

                                                    [rowspan] span {
                                                        position: absolute;
                                                        height: 100%;
                                                        width: 100%;
                                                        left: 0px;
                                                        top: 0px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                    }

                                                    .content-recap table {
                                                        font-size: 0.85em;
                                                        width: 380px !important;
                                                    }

                                                    .content-recap table td,
                                                    .content-recap table th {
                                                        /* height: 14px !important; */
                                                        padding: 0px !important;
                                                        margin: 0px !important;
                                                    }

                                                    .content-recap table th span {
                                                        height: 29px !important;
                                                    }

                                                    .bottom-left {
                                                        position: relative;
                                                        top: 0;
                                                        right:0;
                                                        
                                                    }
                                                </style>


                                                </head>

                                                <body>


                                                    <div
                                                        class="d-flex container-lg flex-column py-5 px-5 default_option">
                                                        <header class="w-100 d-flex fle x-column">
                                                            <section
                                                                class="w-100 d-flex align-items-center justify-content-between">
                                                                <div
                                                                    class="d-flex content-state-data flex-column align-items-center">
                                                                    <span> REPUBLIQUE DU CAMEROUN </span>
                                                                    <span> Paix - Travail - Patrie </span>
                                                                    <span> ------------------------- </span>
                                                                    <span> UNIVERSITE YAOUNDE 1 </span>
                                                                </div>
                                                                <div
                                                                    class="d-flex content-uy1-logo d-flex justify-content-center align-items-center">
                                                                    {{-- <img src="assets/img/logo_ui.png" alt="university of yaounde 1" class="img-fluid" /> --}}

                                                                </div>
                                                                <div
                                                                    class="d-flex content-state-data flex-column align-items-center">
                                                                    <span> REPUBLIC OF CAMEROON </span>
                                                                    <span> Peace - Work - Fatherland </span>
                                                                    <span> ------------------------- </span>
                                                                    <span> UNIVERSITY OF YAOUNDE 1 </span>
                                                                </div>
                                                            </section>
                                                        </header>
                                                        <section
                                                            class="w-100 d-flex flex-column align-items-center py-4"
                                                            style="padding-bottom: 0px !important">
                                                            <span class="fs-5 fw-normal"> FACULTE DES SCIENCES </span>
                                                            <span>
                                                                PB/P.O. Box 812 Yaoundé CAMEROUN : Tel: 222-234-496 /
                                                                Email:
                                                                diplome@facsiences.uy1.cm
                                                            </span>

                                                            <span class="fs-2"> RELEVE DE NOTES/TRANSCRIPT </span>

                                                        </section>
                                                        <div class="bottom-left">
                                                            <div class="form-value ps-4 pt-1 text-uppercase"> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
                                                                N°: 00097/EDG/L2/Ict/20212022 </div>
                                                          </div>
                                                        <main class="w-100 d-flex flex-column align-items-center">
                                                           
                                                            <section class="w-100">

                                                                <section
                                                                    class="w-100 d-flex align-items-center justify-content-between">

                                                                    <div class="d-flex form-item">

                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-5 fw-bolder bold_part">
                                                                                Noms et Prénoms: </span>
                                                                            <span class="english_subtitle"> Surname and
                                                                                Name </span>

                                                                        </div>

                                                                        <div
                                                                            class="form-value ps-4 pt-1 text-uppercase">
                                                                            {{ $etudiant->nom }}  {{ $etudiant->prenom }} </div>

                                                                    </div>
                                                                    
                                                                    <div class="d-flex form-item">
                                                                       
                                                                        <div class="d-flex flex-column">
                                                                            {{-- <div class="form-value ps-4 pt-1 text-uppercase">N° 00097/EDG/L2/Ict/20212022 &nbsp; &nbsp;</div> --}}
                                                                            <span class="fs-5 fw-bolder bold_part">
                                                                                Matricule: </span>
                                                                            <span class="english_subtitle">
                                                                                Registration N° </span>
                                                                        </div>
                                                                        <div class="form-value ps-4 pt-1"> {{ $etudiant->matricule }}</div>
                                                                    </div>
                                                                </section>
                                                                <section
                                                                    class="w-100 d-flex align-items-center justify-content-start">
                                                                    <div class="d-flex form-item me-5 pe-5">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-5 fw-bolder bold_part">
                                                                                Né(e) le: </span>
                                                                            <span class="english_subtitle"> Born on
                                                                            </span>
                                                                        </div>
                                                                        <div
                                                                            class="form-value ps-4 pt-1 text-uppercase">
                                                                             {{ $etudiant->date_naissance }}</div>
                                                                    </div>
                                                                    &nbsp;
                                                                    <div class="d-flex form-item ms-5 ps-5">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-5 fw-bolder bold_part"> A:
                                                                            </span>
                                                                            <span class="english_subtitle"> At </span>
                                                                        </div>
                                                                        <div class="form-value ps-4 pt-1">DOUALA</div>
                                                                    </div>
                                                                </section>
                                                                <section
                                                                    class="w-100 d-flex align-items-center justify-content-start">
                                                                    <div class="d-flex form-item">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-5 fw-bolder bold_part">
                                                                                Domaine: </span>
                                                                            <span class="english_subtitle"> Domain
                                                                            </span>
                                                                        </div>
                                                                        <div
                                                                            class="form-value ps-4 pt-1 text-uppercase">
                                                                            SCIENCES MATHEMATIQUES ET INFORMATIQUES
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <section
                                                                    class="w-100 d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex form-item me-5 pe-5 ">
                                                                        <div class="d-flex flex-column">
                                                                            <span
                                                                                class="fs-5 fw-bolder bold_part">Niveau
                                                                                : &nbsp;</span>
                                                                            <span class="english_subtitle"> Level
                                                                            </span>
                                                                        </div>
                                                                        <div
                                                                            class="form-value ps-4 pt-1 text-uppercase">
                                                                            License 1</div>
                                                                    </div>

                                                                    <div class="d-flex form-item ms-5 ps-5">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-5 fw-bolder bold_part">
                                                                                Filière : &nbsp;</span>
                                                                            <span class="english_subtitle"> Discipline
                                                                            </span>
                                                                        </div>
                                                                        <div class="form-value ps-4 pt-1">INFORMATION
                                                                            AND COMMUNICATION TECHNOLOGIE FOR
                                                                            DEVELOPMENT</div>
                                                                    </div>
                                                                </section>

                                                                <section
                                                                    class="w-100 d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex form-item">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-5 fw-bolder bold_part">
                                                                                Spécialité: </span>
                                                                            <span class="english_subtitle"> Option
                                                                            </span>
                                                                        </div>
                                                                        <div
                                                                            class="form-value ps-4 pt-1 text-uppercase">
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex form-item">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-5 fw-bolder bold_part">
                                                                                Année Academique: </span>
                                                                            <span class="english_subtitle"> Academic
                                                                                year </span>
                                                                        </div>
                                                                        <div class="form-value ps-4 pt-1">2020/2021
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </section>
                                                            <section class="w-100 mt-2">
                                                                <table class="w-100 table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>
                                                                                <span> Code UE </span>
                                                                            </th>
                                                                            <th>
                                                                                <span> Intitulé de l'UE / UE Title
                                                                                </span>
                                                                            </th>
                                                                            <th>
                                                                                <span>
                                                                                    crédit <br />
                                                                                    credit
                                                                                </span>
                                                                            </th>
                                                                            <th>
                                                                                <span> Moy / 100 </span>
                                                                            </th>
                                                                            <th>
                                                                                <span>
                                                                                    Mention <br />
                                                                                    Grade
                                                                                </span>
                                                                            </th>
                                                                            <th>
                                                                                <span>
                                                                                    Semestre <br />
                                                                                    Semester
                                                                                </span>
                                                                            </th>
                                                                            <th>
                                                                                <span>
                                                                                    Année <br />
                                                                                    Year
                                                                                </span>
                                                                            </th>
                                                                            <th>
                                                                                <span>
                                                                                    Décision <br />
                                                                                    Decision
                                                                                </span>
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody >
                                                                        @foreach($notes as $note)
                                                                        <tr >
                                                                            <td>{{ $note->ue }}</td><!--code de l ue-->
                                                                            <td>{{ $note->nom_ue }}/</td><!--nom de l ue-->
                                                                            <td>{{ $note->credit }}</td><!--credit de l ue-->
                                                                            <td>{{ $note->note }}</td><!--note de l ue-->
                                                                            <td>{{ $note->mention }}</td><!--mensipon de l ue-->
                                                                            <td>4</td><!--semestre de l ue A AJOUTER-->
                                                                            <td>2021</td><!--anne que tu compose la matiere  de l ue A AJOUTER-->
                                                                            <td>{{ $note->decision }}</td><!--decision de l ue-->
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </section>
                                                            <section
                                                                class="w-100 d-flex flex-column align-items-center">
                                                                <span
                                                                    class="w-100 decision-data d-flex flex-column w-auto">
                                                                    <span> Crédit Capitalisés: 60/60 (100.00%) </span>
                                                                    <span> Moyenne Générale Pondérée (MGP): 2.34/4<!--to change-->
                                                                    </span>
                                                                    <span> Decision: <b> ADMIS </b> </span><!--to change-->
                                                                </span>
                                                            </section>
                                                            <section class="w-100 d-flex flex-column"
                                                                style="font-size: 12px">
                                                                <div class="d-flex">
                                                                    <div><u> Légende: </u></div>

                                                                    <div class="d-flex flex-column">
                                                                        <br />
                                                                        <span> CA: Capitalisé </span>
                                                                        <span> CANT: Capitalisé Non transferable </span>
                                                                        <span> NC: Non Capitalisé </span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="d-flex ">

                                                                        <div class="content-recap w-100 mt-3 bloc">
                                                                            <table class="table w-100">
                                                                                <thead>
                                                                                    <th>
                                                                                        <span> Note / 100 </span>
                                                                                    </th>
                                                                                    <th>
                                                                                        <span> Cote </span>
                                                                                    </th>
                                                                                    <th>
                                                                                        <span>
                                                                                            Qualité <br />
                                                                                            de point
                                                                                        </span>
                                                                                    </th>
                                                                                    <th>
                                                                                        <span class="px-5"> Mention
                                                                                        </span>
                                                                                    </th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>>= 80</td>
                                                                                        <td class="text-center">A</td>
                                                                                        <td>4.00</td>
                                                                                        <td>Très Bien</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>75 - 79</td>
                                                                                        <td class="text-center">A-</td>
                                                                                        <td>3.70</td>
                                                                                        <td rowspan="2">
                                                                                            <span> Bien </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>70 - 74</td>
                                                                                        <td class="text-center">B+</td>
                                                                                        <td>3.30</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>65 - 69</td>
                                                                                        <td class="text-center">B</td>
                                                                                        <td>3.00</td>
                                                                                        <td rowspan="2">
                                                                                            <span> Assez Bien </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>60 - 64</td>
                                                                                        <td class="text-center">B-</td>
                                                                                        <td>2.70</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>55 - 59</td>
                                                                                        <td class="text-center">C+</td>
                                                                                        <td>2.30</td>
                                                                                        <td rowspan="2">
                                                                                            <span> Passable </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>50 - 54</td>
                                                                                        <td class="text-center">C</td>
                                                                                        <td>2.00</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>45 - 49</td>
                                                                                        <td class="text-center">A-</td>
                                                                                        <td>1.70</td>
                                                                                        <td rowspan="3">
                                                                                            <span class="px-2">
                                                                                                Crédit Capitalisé Mais
                                                                                                non transferable
                                                                                            </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>40 - 44</td>
                                                                                        <td class="text-center">B+</td>
                                                                                        <td>1.30</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>35 - 39</td>
                                                                                        <td class="text-center">D</td>
                                                                                        <td>1.00</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>30 - 35</td>
                                                                                        <td class="text-center">E</td>
                                                                                        <td rowspan="2">
                                                                                            <span> 0.00 </span>
                                                                                        </td>
                                                                                        <td rowspan="2">
                                                                                            <span> Passable </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            < 30</td>
                                                                                        <td class="text-center">F</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>

                                                            </section>





                                            </ul>
                                        </div>
                                        <!--end card-body-->

                                    </div>
                                    <!--end card-->
                                </div>
                                <!--end col-->

                            </div>
                            <!--end row-->
                        </div>
        

                    </div>
                </div>
            </div>

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

    <script src="../plugins/leaflet/leaflet.js"></script>
    <script src="../plugins/lightpick/lightpick.js"></script>
    <script src="assets/pages/jquery.profile.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>
