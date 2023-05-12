<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Auth.doc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}"><i
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
                        class="align-self-center menu-icon"></i><span>Authentication</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ route('signup') }}"><i
                                class="ti-control-record"></i>Add Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('view_admin') }}"><i
                                class="ti-control-record"></i>List Admin</a></li>

                </ul>
            </li>

            <hr class="hr-dashed hr-menu">
            <li class="menu-label my-2">olders</li>


            <li>
                <a href="{{ route('view_etudiant') }}"><i data-feather="layers"
                        class="align-self-center menu-icon"></i><span>List Etudiant</span><span
                        class="badge badge-soft-success menu-arrow">Exemple</span></a>
            </li>

            <li>
                <a href="javascript: void(0);"><i data-feather="file-plus"
                        class="align-self-center menu-icon"></i><span>Search Releve</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href=" {{ route('details') }}"><i
                                class="ti-control-record"></i>Repord card</a></li>

                </ul>
            </li>
            <li>
                <a href="javascript: void(0);"><i data-feather="file-plus"
                        class="align-self-center menu-icon"></i><span>Attestation</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href=" {{ route('attestation') }}"><i
                                class="ti-control-record"></i>Attestation de reussite</a></li>

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







                    </li>

                    <li class="dropdown notification-list">

                        {{-- <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">

                          
                            <div class="notification-menu" data-simplebar>
                             
                               
                               
                            </div>
                            <!-- All-->
                           
                        </div> --}}
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
                <form method="POST" action="{{ route('search') }}">
                    @csrf
                    <div class="form-group">
                        <label for="niveau">Selectionner le niveau de l etudiant et entrer son Matricule / Nom
                            complet</label>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="app-search-topbar">
                                <input type="search" name="search" class="form-control top-search mb-0"
                                    placeholder="Matricule/Name">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                            &nbsp;&nbsp; &nbsp;&nbsp;
                            <select id="niveau" name="niveau" class="custom-select">
                                <option value="Licence 1">Niveau 1</option>
                                <option value="Licence 2">Niveau 2</option>
                                <option value="Licence 3">Niveau 3</option>
                            </select>

                        </div>



                    </div>

                </form>
                <!--end topbar-nav-->
                <div class="col-auto align-self-center">

                </div>
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
                        <div class="">
                            <div class="row">

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
                                                            class="fas fa-search "></i></button>
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
                                        <div class="card ">
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
                                        <div class="card w-100">
                                            <div class="card-body">
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

                                    <div class="card w-100">

                                        <div class="card-body bg-image">
                                            <ul class="list-unstyled mb-0">
                                                <style>
                                                    * {
                                                        position: relative;
                                                    }

                                                    .bloc {
                                                        display: inline-block;
                                                        margin-right: 20px;
                                                    }
                                                    /* .bg-image {
                                                        background-image: url('att.jpeg');
  background-repeat: no-repeat;
  background-size: cover;
} */

                                                    .fs-2 {
                                                        color: #000000;
                                                        font-size: 40px;
                                                        font-weight: bold;
                                                    }

                                                    .lo {
                                                        color: #000000;
                                                        font-size: 20px;
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
                                                        right: 0;

                                                    }

                                                    .app-search-topbar.active {}



                                                    .top-search:focus {
                                                        outline: none;
                                                    }

                                                    .app-search-topbar {
                                                        padding: -23px;
                                                        border-radius: 700px;
                                                    }

                                                    .hide-phone {
                                                        padding-top: 10px;
                                                        margin-bottom: 10px;


                                                    }

                                                    .app-search-topbar {
                                                        padding-left: 4px;
                                                        padding-right: 8px;
                                                        border-radius: 100px;
                                                    }

                                                    .topbar {
                                                        padding-bottom: 12px;
                                                        padding-left: 12px;
                                                        padding-top: 12px;
                                                    }

                                                    .dash {
                                                        border-top: 2px solid black;
                                                        /* définit la couleur et l'épaisseur du trait */
                                                        width: 40%;
                                                        /* définit la largeur du tiret */
                                                        margin-top: 20px;
                                                        /* définit l'espace au-dessus du tiret */
                                                        margin-bottom: 20px;
                                                        /* définit l'espace en-dessous du tiret */
                                                    }

                                                    .dashv {
                                                        border-top: 2px solid black;
                                                        /* définit la couleur et l'épaisseur du trait */
                                                        width: 70%;
                                                        /* définit la largeur du tiret */
                                                        margin-top: 20px;
                                                        /* définit l'espace au-dessus du tiret */
                                                        margin-bottom: 20px;
                                                        /* définit l'espace en-dessous du tiret */
                                                    }
                                                    .dashl {
                                                        border-top: 2px solid black;
                                                        /* définit la couleur et l'épaisseur du trait */
                                                        width: 100%;
                                                        /* définit la largeur du tiret */
                                                        margin-top: 20px;
                                                        /* définit l'espace au-dessus du tiret */
                                                        margin-bottom: 20px;
                                                        /* définit l'espace en-dessous du tiret */
                                                    }

                                                    .text {
                                                        position: absolute;
                                                        right: 0;
                                                        background-color: white;
                                                        padding: 0 10px;
                                                        top: 15%;

                                                    }
                                                    .texte{
                                                        position: absolute;
                                                        right:  130px;
                                                        background-color: white;
                                                        padding: 0 10px;
                                                        top: 0%

                                                    }
                                                    .ville{
                                                        position: absolute;
                                                        right:  500px;
                                                        background-color: white;
                                                        padding: 0 10px;
                                                        top: 0%

                                                    }
                                                  
                                                    .licence{
                                                        position: absolute;
                                                        right:  500px;
                                                        background-color: white;
                                                        padding: 0 10px;
                                                        bottom: 10%

                                                    }
                                                    .name{
                                                        position: absolute;
                                                        left:  130px;
                                                        background-color: white;
                                                        padding: 0 10px;
                                                        top: 2%

                                                    }
                                                    .date_naissance{
                                                        position: absolute;
                                                        left:  130px;
                                                        background-color: white;
                                                        padding: 0 10px;
                                                        top: 2%

                                                    }
                                                    .imgatt{
                                                        width: 100%;
                                                    }
                                                </style>
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                        var searchIcon = document.querySelector('.topbar-icon');
                                                        var searchForm = document.querySelector('.app-search-topbar');

                                                        searchIcon.addEventListener('click', function() {
                                                            searchForm.classList.add('active');
                                                        });
                                                    });
                                                </script>

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
                                                                    <span> FACULTE DES SCIENCES </span>
                                                                    <span style="font-size: smaller;"><em>FACULTY OF
                                                                            SCIENCES</em></span>
                                                                </div>
                                                                
                                                                <div
                                                                class="d-flex content-uy1-logo d-flex justify-content-center align-items-center">
                                                                <img class="imgatt" src="att.jpeg" alt="" srcset="">
                                                                    {{-- <img src="assets/img/logo_ui.png" alt="university of yaounde 1" class="img-fluid" /> --}}

                                                                </div>
                                                                <div
                                                                    class="d-flex content-state-data flex-column align-items-center">
                                                                    <span> REPUBLIC OF CAMEROON </span>
                                                                    <span> Peace - Work - Fatherland </span>
                                                                    <span> ------------------------- </span>
                                                                    <span> UNIVERSITY OF YAOUNDE 1 </span>
                                                                    <span style="font-size: smaller;"><em>UNIVERSITY OF
                                                                            YAOUNDE 1 </em></span>
                                                                </div>
                                                            </section>





                                                        </header>
                                                        <br>

                                                        <section>
                                                            <span>
                                                                PB/P.O. Box 812 Yaoundé <br> Tel: (237)222 234 496 <br>
                                                                Fax: (237)222 234 496 /<br>
                                                                Email: diplome@facsciences.uy1.cm
                                                            </span>

                                                        </section>
                                                        <br>

                                                        <div class="d-flex flex-column align-items-center">
                                                            <span class="lo text-center"> ATTESTATION DE REUSSITE
                                                                AU</span>
                                                            <span class="fs-2 text-center"> DIPLOME DE LICENCE</span>
                                                            <span class="lo text-center"><em> BACHELOR'S DEGREE SUCSESS
                                                                    TESTIMONIAL</em></span>
                                                        </div>
                                                        <div class="bottom-left">
                                                            <div class="form-value ps-4 pt-1 text-uppercase">
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp; &nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp;
                                                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                                {{-- N° : {{ isset($releve) ? $releve->id_releve : '' }} --}}
                                                                N° : 00898/NK0/L3/FS/ICT/3
                                                            </div>
                                                            <!--to change dans la table releve-->
                                                        </div>
                                                        <br>
                                                        <div class="d-flex flex-column align-items-center">
                                                            <span>Le doyen de la faculté des Sciences de l'Université de
                                                                Yaoundé, soussigné,</span>
                                                            <span><em>The Dean of the Faculty of Science of the
                                                                    University of Yaounde I, undersigned,</em></span>
                                                        </div>
                                                        <br>
                                                        <main class="w-100 d-flex flex-column align-items-center">

                                                            <section class="w-100">

                                                                <section
                                                                    class="w-100 d-flex align-items-center justify-content-between">

                                                                    <div class="d-flex flex-column align-items-center">
                                                                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                        &nbsp;&nbsp;
                                                                        &nbsp;
                                                                        <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vu
                                                                            le proces-verbal des deliberations du
                                                                            jury en date du
                                                                        </span>
                                                                        <span><em>
                                                                                &nbsp;&nbsp;&nbsp;Mindful of the
                                                                                official report of
                                                                                the deliberation of the jury dated</em>
                                                                        </span>
                                                                    </div>
                                                                    <br>
                                                                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
                                                                    &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
                                                                    &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                                    <p class="text"> 30 JUILLET 2022 &nbsp;&nbsp;
                                                                        &nbsp;&nbsp; &nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                        &nbsp;&nbsp;
                                                                        &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                        &nbsp;&nbsp;
                                                                        &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                        &nbsp;&nbsp;
                                                                        &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
                                                                        &nbsp;&nbsp;
                                                                    </p>
                                                                    <br>
                                                                    <div class="dash"></div>







                                                                </section>
                                                                <br>
                                                                <section
                                                                    class="w-100 d-flex align-items-center justify-content-start">
                                                                    <div class="d-flex form-item me-5 pe-5">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-5 fw-bolder bold_part">
                                                                                Atteste que: </span>
                                                                            <span class="english_subtitle"> Certify
                                                                                that
                                                                            </span>
                                                                        </div>
                                                                        <div
                                                                            class="form-value ps-4 pt-1 text-uppercase">
                                                                            {{-- {{ $etudiant->date_naissance }} --}}
                                                                            {{-- {{ isset($etudiant) ? $etudiant->date_naissance : '' }} --}}
                                                                        </div>
                                                                    </div>

                                                                </section>
                                                                <section
                                                                    class="w-100 d-flex align-items-center justify-content-start">
                                                                    <div class="d-flex form-item">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-5 fw-bolder bold_part">
                                                                                M./Mme/Mlle </span>
                                                                            <span class="english_subtitle">
                                                                                Mr./Mrs./Mlle
                                                                            </span>
                                                                        </div>






                                                                    </div>
                                                                    &nbsp;&nbsp; &nbsp;&nbsp;
                                                                        <div class="name">
                                                                          KEMGNE DEFO FLORIANE INGRID
                                                                        </div>
                                                                        <div class="dash"></div>
                                                                      <br>
                                                                      &nbsp;&nbsp; &nbsp;&nbsp;
                                                                        <div class="d-flex flex-column">
                                                                            <span>Mle</span>
                                                                        <span>Reg.N°</span>
                                                                            </span>
                                                                        </div>
                                                                        &nbsp;&nbsp; &nbsp;&nbsp;
                                                                       <p  class="texte">    20V2512</p>
                                                                        <div class="dash"></div>
                                                                    
                                                                      
                                                                </section>
                                                                <section
                                                                    class="w-100 d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex form-item me-5 pe-5 ">
                                                                        <div class="d-flex flex-column">
                                                                            <span
                                                                                class="fs-5 fw-bolder bold_part">Né(e) le: &nbsp;</span>
                                                                                
                                                                            <span class="english_subtitle"> Born on
                                                                            </span>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                    &nbsp;&nbsp; &nbsp;&nbsp;
                                                                    <div class="date_naissance">
                                                                      01/01 /2002
                                                                    </div>
                                                                    <div class="dash"></div>
                                                                  <br>
                                                                  &nbsp;&nbsp; &nbsp;&nbsp;
                                                                    <div class="d-flex flex-column">
                                                                        <span>a</span>
                                                                    <span>at</span>
                                                                        </span>
                                                                    </div>
                                                                    &nbsp;&nbsp; &nbsp;&nbsp;
                                                                   <p  class="ville">    DOUALA</p>
                                                                    <div class="dashv"></div>

                                                                   
                                                                </section>

                                                                <section
                                                                    class="w-100 d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex flex-column">
                                                                        <span>a subi avec succes,les epreuves sanctionnant l examen de la</span>
                                                                        <span class="english_subtitle"> has successfully fulfiled the requirement of the </span>
                                                                    </div>
                                                                   
                                                                    {{-- <div class="d-flex form-item">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-5 fw-bolder bold_part">
                                                                                Année Academique: </span>
                                                                            <span class="english_subtitle"> Academic
                                                                                year </span>
                                                                        </div>
                                                                        <div class="form-value ps-4 pt-1">
                                                                           
                                                                        </div>
                                                                    </div> --}}
                                                                   
                                                                </section>
                                                               
                                                                
                                                            </section>
                                                            <section
                                                                    class="w-100 d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex form-item me-5 pe-5 ">
                                                                        <div class="d-flex flex-column">
                                                                            <span
                                                                                class="fs-5 fw-bolder bold_part">Licence de</span>
                                                                                
                                                                            <span class="english_subtitle"> Bachelor's Defree in</span>
                                                                            
                                                                        </div>
                                                                     
                                                                    </div>
                                                                    &nbsp;&nbsp;&nbsp;
                                                                    <div class="name">
                                                                     
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        TECHNICIEN
                                                                    </div>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <div class="dashl"></div>
                                                                  <br>
                                                                

                                                                   
                                                                </section>
                                                               
                                                          
                                                            <section
                                                                    class="w-100 d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex form-item me-5 pe-5 ">
                                                                        <div class="d-flex flex-column">
                                                                            <span
                                                                                class="fs-5 fw-bolder bold_part">Specialite/Option</span>
                                                                                
                                                                            <span class="english_subtitle"> Speciality/Option
                                                                            </span>
                                                                        </div>
                                                                     
                                                                    </div>
                                                                    &nbsp;&nbsp;&nbsp;
                                                                    <div class="name">
                                                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        INFORMATION AND COMMUNICATION TECHNOLOGIE
                                                                    </div>
                                                                    <div class="dashl"></div>
                                                                  <br>
                                                                

                                                                   
                                                                </section>
                                                          
                                                                <section
                                                                class="w-100 d-flex align-items-center justify-content-between">
                                                                <div class="d-flex form-item me-5 pe-5 ">
                                                                    <div class="d-flex flex-column">
                                                                        <span
                                                                            class="fs-5 fw-bolder bold_part"><em>Session de</em></span>
                                                                            
                                                                        <span class="english_subtitle">Session</span>
                                                                        
                                                                    </div>
                                                                 
                                                                </div>
                                                                &nbsp;&nbsp;&nbsp;
                                                                <div class="d-flex flex-column">
                                                                    <span
                                                                        class="fs-5 fw-bolder bold_part">juillet 2022 avec une moyenne generale pondere(MGP) de:3.45/4.00,credit(s):180 et la mention Bien</span>
                                                                        
                                                                    <span class="english_subtitle">with a cummulate grade point Average(GPA) of:3.45/4.00,credit:180 and Grade:Good</span>
                                                                    
                                                                </div>
                                                            

                                                               
                                                            </section>
                                                            <br>
                                                             <section
                                                                class="w-100 d-flex align-items-center align-items-center">
                                                               
                                                                <div class="d-flex flex-column">
                                                                    <span
                                                                        class="fs-5 fw-bolder bold_part">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;En foi de quoi la presente attestation est établie et lui est délivrée pour servir et vqloir ce aue de droit.</span>
                                                                        
                                                                    <span class="english_subtitle">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In writness where of the present Testimonial is given with the privileges there into pertaining./</span>
                                                                    
                                                                </div>
                                                            

                                                               
                                                            </section>
                                                           
                                                            <section class="w-100 d-flex flex-column"
                                                                style="font-size: 12px">
                                                               
                                                                <div>
                                                                    <div class="d-flex ">

                                                                        <div class="content-recap w-100 mt-3 bloc">
                                                                            <table class="table w-100">
                                                                                <thead class="text-center">
                                                                                    <th>
                                                                                        <span> Systeme de notation /
                                                                                            Grapping </span>
                                                                                    </th>

                                                                                </thead>
                                                                                <thead>
                                                                                    <th>
                                                                                        <span>MGP/4 </span>
                                                                                    </th>
                                                                                    <th>
                                                                                        <span>Cote </span>
                                                                                    </th>
                                                                                    <th>
                                                                                        <span>Mention/Grade </span>
                                                                                    </th>
                                                                                    </th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td> [200-220[ </td>
                                                                                        <td class="text-center">C</td>
                                                                                        <td>Passable/Pass</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> [220-240[" </td>
                                                                                        <td class="text-center">C+</td>
                                                                                        <td>Passable/Pass</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> [240-260[ </td>
                                                                                        <td class="text-center">B-</td>
                                                                                        <td>Assez-Bien / Fair</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> [260-280[ </td>
                                                                                        <td class="text-center">B</td>
                                                                                        <td>Assez-Bien / Fair</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> [280-300[ </td>
                                                                                        <td class="text-center">B+</td>
                                                                                        <td>Bien / Good</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> [300-320[ </td>
                                                                                        <td class="text-center">A-</td>
                                                                                        <td>Passable/Pass</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> [300-400[ </td>
                                                                                        <td class="text-center">A</td>
                                                                                        <td>Passable/Pass</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 4.00 </td>
                                                                                        <td class="text-center">A+</td>
                                                                                        <td>Excellent</td>
                                                                                    </tr>

                                                                                </tbody>
                                                                            </table>
                                                                            
                                                                        </div>
                                                                      
                                                            </section>



                                                            <section
                                                            class="w-100 d-flex flex-column align-items-center">
                                                            <span
                                                                class="w-100 decision-data d-flex flex-column w-auto">
                                                                <span class="yaous"> Yaouné le /The </span>
                                                              
                                                                <!--to change-->
                                                            </span>
                                                        </section>
                                                        <section
                                                                    class="w-100 d-flex align-items-center justify-content-between">
                                                                    <div class="d-flex flex-column">
                                                                        <span>Le chef de departement de</span>
                                                                        <span class="english_subtitle"> The Head of the departement   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            <span style="text-decoration: underline;">Information and commucation Technologie</span> </span> 
                                                                    </div>
                                                                    <div class="d-flex form-item">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-5 fw-bolder bold_part">
                                                                                Le Doyen/The Dean</span>
                                                                            
                                                                        </div>
                                                                        <div class="form-value ps-4 pt-1">
                                                                           
                                                                        </div>
                                                                    </div> 
                                                                   
                                                                </section>
                                                                <br>
                                                                <section
                                                                class="w-100 d-flex align-items-center align-items-center">
                                                               
                                                                <div class="d-flex flex-column">
                                                                    <span
                                                                        class="english_subtitle"><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                          En foi de quoi la presente attestation est établie et lui est délivrée pour servir et vqloir ce aue de droit.</em></span>
                                                                        
                                                                    <span class="english_subtitle">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                              In writness where of the present Testimonial is given with the privileges there into pertaining./</span>
                                                                    
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
