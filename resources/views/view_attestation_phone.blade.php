<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Auth.doc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="../plugins/leaflet/leaflet.css" rel="stylesheet">
    <link href="../plugins/lightpick/lightpick.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <style>
        a {
            display: inline-block;
            color: #000;
            text-decoration: none;
        }

        a i {
            font-size: 20px;
            margin-right: 5px;
        }

        a:hover {
            color: #00f;
            /* Couleur au survol */
        }

        .col-sm-4 {
            margin-bottom: 2%;
        }

        #downloadButton:hover {
            background-color: blue;
            /* Définit la couleur de fond du bouton au survol */
            color: white;
            /* Définit la couleur du texte du bouton au survol */
        }
        .Qrcode{
            margin-top: 50px;
            margin-left: -100px;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>

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

                <li>
                    <a href="{{ route('index') }}"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Home</span></a>
                    <!-- <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}"><i
                                    class="ti-control-record"></i>Home</a></li>
                    </ul> -->
                </li>
                <li>
                    <a href="{{ route('login') }}"> <i data-feather="user" class="align-self-center menu-icon"></i>
                        <span>Login</span></a>
                    <!-- <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}"><i
                                    class="ti-control-record"></i>Home</a></li>
                    </ul> -->
                </li>

                <li>
                    <a>  <i data-feather="scanner" class="align-self-center menu-icon"></i>
                        <span>Scan document</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('scan_code') }}"><i class="ti-control-record"></i>With Qr code</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#downloadModal"><i class="ti-control-record"></i>With OCR</a></li>
                    </ul>
                </li>
                <!-- 
                <li>
                    <a href="javascript: void(0);"><i data-feather="grid"
                            class="align-self-center menu-icon"></i><span>Apps</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">

                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Auth.doc <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('view_add_releve') }}">Add Releve</a></li>
                                {{-- <li><a href="apps-project-projects.html">Projects</a></li> --}}

                            </ul>
                        </li>

                </li> -->
            </ul>
            </li>

            <!-- <li>
                <a href="javascript: void(0);"><i data-feather="lock"
                        class="align-self-center menu-icon"></i><span>Authentication</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ route('signup') }}"><i
                                class="ti-control-record"></i>Add Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('view_admin') }}"><i
                                class="ti-control-record"></i>List Admin</a></li>

                </ul>
            </li> -->




            <!-- <li>
                <a href=" {{ route('faculte') }}"><i data-feather="layers"
                        class="align-self-center menu-icon"></i><span>List Etudiant</span><span
                        class="badge badge-soft-success menu-arrow">Exemple</span></a>
            </li> -->

            <!-- <li>
                <a href="javascript: void(0);"><i data-feather="file-plus"
                        class="align-self-center menu-icon"></i><span>Search Releve</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href=" {{ route('details') }}"><i
                                class="ti-control-record"></i>Repord card</a></li>

                </ul>
            </li> -->
            <!-- <li>
                <a href="javascript: void(0);"><i data-feather="file-plus"
                        class="align-self-center menu-icon"></i><span>Attestation</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href=" {{ route('filiereAttestation') }}"><i
                                class="ti-control-record"></i>Attestation de reussite</a></li>

                </ul>
            </li> -->
            </ul>
            <!-- 
            <div class="update-msg text-center">
                <a href="javascript: void(0);" class="float-right close-btn text-white" data-dismiss="update-msg"
                    aria-label="Close" aria-hidden="true">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="mt-3">Auth.doc</h5>
                <p class="mb-3">Checks the integrity of the documents, in particular the transcripts or Report Card
                    of the university of yaounde 1</p>
            </div> -->
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


                    </li>

                </ul>
                &nbsp;&nbsp; &nbsp;
                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp; &nbsp;
                <!--end topbar-nav-->
                <div class="col-auto align-self-center">
                    @if (session('message'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                    @endif
                </div>
                <ul class="list-unstyled topbar-nav mb-0">
                    <li>
                        <button class="nav-link button-menu-mobile">
                            <i data-feather="menu" class="align-self-center topbar-icon"></i>
                        </button>
                    </li>
                    <!-- <li class="creat-btn">
                        <div class="nav-link">
                            <form method="POST" action="{{ route('getAttestation') }}">
                                @csrf
                                <div>
                                    <button type="submit" class="ti-search"></button>
                                    <a class="btn btn-sm btn-soft-primary" href="#" role="button">
                                        <input type="search" name="search" id="searchInput" class="form-control top-search mb-0" placeholder="Matricule/Name" required>
                                    </a>
                                </div>
                                <button type="submit" class="ti-search" onclick="searchEtudiant(event)"></button>

                            </form>

                        </div>
                    </li> -->
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
                            <div class="tab-pane fade " id="Profile_Project" role="tabpanel" aria-labelledby="Profile_Project_tab">
                                <div class="row mb-4">
                                    <div class="col">
                                        <form>
                                            <div class="input-group input-group-lg">
                                                <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-soft-primary"><i class="fas fa-search "></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    <!--end col-->
                                    <div class="col-auto">
                                        <button type="button" class="btn btn-soft-primary btn-lg"><i class="fas fa-filter"></i></button>
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
                                                <img src="assets/images/widgets/project2.jpg" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
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
                                                <img src="assets/images/widgets/project4.jpg" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
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

                                    <!--end col-->
                                    <div class="col-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <img src="assets/images/widgets/project1.jpg" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
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
                                                <img src="assets/images/widgets/project4.jpg" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
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
                                                <img src="assets/images/widgets/project3.jpg" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
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
                                                <img src="assets/images/widgets/project1.jpg" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
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
                                                <img src="assets/images/widgets/project2.jpg" alt="" class="rounded-circle d-block mx-auto mt-2" height="70">
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
                            <div class="tab-pane fade show active" id="Profile_Post" role="tabpanel" aria-labelledby="Profile_Post_tab">
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

                                    <div class="contents">
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


                                                        
                                         

                                                        .bg-image::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('Uy.png');
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.5;
    background-attachment: fixed; /* Ajout de cette propriété pour afficher l'arrière-plan sur mobile */
}


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
                                                            color: #000000;
                                                            font-size: 10px;
                                                            font-weight: bold;
                                                        }

                                                        .bold_part1 {
                                                            font-size: 13px !important;
                                                            color: #000000;
                                                            font-size: 10px;
                                                            font-weight: bold;
                                                        }

                                                        .english_subtitle {
                                                            font-style: italic;
                                                            font-size: 13px;
                                                            margin-top: -5px;

                                                        }

                                                        .english_subtitle1 {
                                                            font-style: italic;
                                                            font-size: 13px;
                                                            font-size: 14px;
                                                            font-weight: bold;
                                                            text-align: center
                                                        }

                                                        .english_subtitle2 {
                                                            font-style: italic;
                                                            font-size: 10px;
                                                            font-size: 14px;
                                                            font-weight: bold;
                                                            text-align: center
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
                                                            padding: 0 3px;
                                                            top: 14%;
                                                            font-weight: bold;
                                                            font-size: 17px;

                                                        }

                                                        .texte {
                                                            position: absolute;
                                                            right: 130px;
                                                            padding: 0 10px;
                                                            top: 0%;
                                                            font-weight: bold;
                                                            font-size: 17px;
                                                        }

                                                        .ville {
                                                            position: absolute;
                                                            right: 130px;
                                                            font-weight: bold;
                                                            font-size: 17px;
                                                            padding: 0 10px;
                                                            top: 0%;

                                                        }

                                                        .licence {
                                                            position: absolute;
                                                            right: 500px;
                                                            padding: 0 10px;
                                                            bottom: 10%;
                                                            font-size: 18px;
                                                            font-weight: bold;
                                                            font-size: 17px;
                                                        }

                                                        .name {
                                                            position: absolute;
                                                            left: 130px;
                                                            padding: 0 10px;
                                                            top: 2%;
                                                            font-weight: bold;
                                                            font-size: 17px;
                                                        }

                                                        .namespecialit {
                                                            position: absolute;
                                                            left: 130px;
                                                            padding: 0 10px;
                                                            font-weight: bold;
                                                            font-size: 17px;
                                                        }

                                                        .date_naissance {
                                                            position: absolute;
                                                            left: 130px;
                                                            padding: 0 10px;
                                                            top: 2%;
                                                            font-weight: bold;
                                                            font-size: 17px;
                                                        }

                                                        .card-body.bg-image span,
                                                        .card-body.bg-image p,
                                                        .card-body.bg-image tr,
                                                        .card-body.bg-image th,
                                                        .card-body.bg-image {
                                                            color: #000000;
                                                            user-select: none;

                                                        }

                                                        #downloadButton {
                                                            border: 1px solid blue;
                                                            /* Ajoute un bord de 1 pixel avec la couleur bleue */
                                                            padding: 5px 10px;
                                                            /* Ajuste le rembourrage intérieur du bouton */
                                                            background-color: white;
                                                            /* Définit la couleur de fond du bouton */
                                                            color: blue;

                                                        }

                                                        .print-table {
                                                            font-size: 12px;
                                                            /* Taille de police réduite */
                                                        }

                                                        .print-table th,
                                                        .print-table td {
                                                            padding: 5px;
                                                            /* Espacement réduit entre les cellules */
                                                        }

                                                        @media print {
                                                            body.print-bg {
                                                                background-image: url('Uy.png');
                                                                background-repeat: no-repeat;
                                                                background-size: cover;
                                                            }
                                                        }
                                                         /* Styles généraux pour le contenu, inchangés pour le mobile */
    * {
        position: relative;
    }

    .bloc {
        display: inline-block;
        margin-right: 20px;
    }

    .bg-image {
        position: relative;
    }

    .bg-image::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('Uy.png');
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.5;

}


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

    /* Styles spécifiques pour les appareils mobiles */
    @media screen and (max-width: 767px) {
        .fs-2 {
            font-size: 24px;
        }

        .lo {
            font-size: 16px;
        }

        /* Ajoutez d'autres styles spécifiques pour les appareils mobiles si nécessaire */
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

                                                    
                                                                <body> <section class="w-100 d-flex flex-column" style="font-size: 12px">
                                                        <!-- Vos éléments de contenu -->
                                                    <div class="d-flex container-lg flex-column py-5 px-5 default_option">
                                                       
                                                            <section class="w-100 d-flex flex-column align-items-center justify-content-center" style="max-width: 375px; margin: 0 auto;">
                                                                <div class="d-flex flex-row align-items-center mb-2">
                                                                    <div class="d-flex content-state-data flex-column align-items-center">
                                                                        <span class="text-center">REPUBLIQUE DU CAMEROUN</span>
                                                                        <span class="text-center">Paix - Travail - Patrie</span>
                                                                        <span class="text-center">-------------------------</span>
                                                                        <span class="text-center">FACULTE DES SCIENCES</span>
                                                                        <span style="font-size: smaller;" class="text-center"><em>FACULTY OF SCIENCES</em></span>
                                                                    </div>
                                                            
                                                                    <div class="d-flex content-uy1-logo justify-content-center align-items-center">
                                                                        <img class="imgatt" src="unilog.png" alt="" srcset="" style="max-width: 100%; max-height: 150px;">
                                                                    </div>
                                                            
                                                                    <div class="d-flex content-state-data flex-column align-items-center">
                                                                        <span class="text-center">REPUBLIC OF CAMEROON</span>
                                                                        <span class="text-center">Peace - Work - Fatherland</span>
                                                                        <span class="text-center">-------------------------</span>
                                                                        <span class="text-center">UNIVERSITY OF YAOUNDE 1</span>
                                                                        <span style="font-size: smaller;" class="text-center"><em>UNIVERSITY OF YAOUNDE 1</em></span>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            
                                                            
                                                            
                                                           
                                                            
                                                            
                                                            <br>

                                                            <section class="w-100 d-flex flex-column align-items-center justify-content-center" style="max-width: 375px; margin: 0 auto;">
                                                                <span class="text-center">
                                                                    PB/P.O. Box 812 Yaoundé <br> Tel: (237)222 234 496
                                                                    <br>
                                                                    Fax: (237)222 234 496 /<br>
                                                                    Email: diplome@facsciences.uy1.cm
                                                                </span>
                                                            
                                                                <br>
                                                            
                                                                <div class="d-flex flex-column align-items-center text-center">
                                                                    <span class="lo text-center" style="font-size: 16px;">ATTESTATION DE REUSSITE AU</span>
                                                                    <span class="lo text-center" style="font-size: 16px;">DIPLOME DE LICENCE</span>
                                                                    <span class="lo text-center" style="font-size: 12px;"><em>BACHELOR'S DEGREE SUCCESS TESTIMONIAL</em></span>
                                                                </div>
                                                                <div class="form-value ps-4 pt-1 text-uppercase">
                                                                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                                    N° : {{ isset($releve) ? $releve->id_releve : '' }}
                                                                </div>
                                                                <br>
                                                                <div class="d-flex flex-column align-items-center text-center"  style="max-width: 370px;"    >
                                                                    <span style="font-size: smaller;">Le doyen de la faculté des Sciences de l'Université de Yaoundé, soussigné,</span>
                                                                    <span style="font-size: smaller;"><em>The Dean of the Faculty of Science of the University of Yaounde I, undersigned,</em></span>
                                                                </div>
                                                                <div class="d-flex flex-column align-items-center" style="max-width: 370px;" >
                                                                    <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        Vu
                                                                        le proces-verbal des deliberations du
                                                                        jury en date du
                                                                    </span>
                                                                 
                                                                </div>
                                                              
                                                                <div class="bottom-left">
                                                                   
                                                                    <div class="d-flex flex-column align-items-center mb-2">
                                                                       
                                                                           
                                                                        <span class="text-center">Le <?php echo date('j F Y'); ?></span>
                                                                        <div class="dash"></div>
                                                                    </div>
                                                        
                                                                </div>
                                                            </section>
                                                            
                                                            <main class="w-100 d-flex flex-column align-items-center">
                                                                
                                                                <section class="w-100">
<br>
                                                              
                                                                    <section class="w-100 d-flex align-items-center justify-content-center">
                                                                        <div class="content" style="max-width: 375px;">
                                                                            <div class="d-flex form-item me-5 pe-5">
                                                                                <div class="d-flex flex-column">
                                                                                    <span class="fs-5 fw-bolder bold_part text-center">
                                                                                        Atteste que:
                                                                                    </span>
                                                                                    <span class="english_subtitle text-center">Certify that</span>
                                                                                </div>
                                                                                <div class="form-value ps-4 pt-1 text-uppercase">
                                                                                    {{-- Contenu ici --}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>

                                                                    <section class="w-100 d-flex flex-wrap align-items-center justify-content-center">
                                                                        <div class="d-flex form-item">
                                                                            <div class="d-flex flex-column text-center">
                                                                                <span class="fs-5 fw-bolder bold_part">M./Mme/Mlle</span>
                                                                                <span class="english_subtitle">Mr./Mrs./Mlle</span>
                                                                            </div>
                                                                        </div>
                                                                    
                                                                        <div class="d-flex justify-content-center">
                                                                            <span class="name">
                                                                                {{ isset($etudiant) ? $etudiant->nom : '' }}  {{ isset($etudiant) ? $etudiant->prenom : '' }}
                                                                            </span>
                                                                        </div>
                                                                    
                                                                        <div class="dash"></div>
                                                                    
                                                                        <div class="d-flex form-item">
                                                                            <div class="d-flex flex-column text-center">
                                                                                <span>Mle</span>
                                                                                <span>Reg.N°</span>
                                                                            </div>
                                                                        </div>
                                                                    
                                                                        <div class="d-flex justify-content-center">
                                                                            <p class="texte">
                                                                                {{ isset($etudiant) ? $etudiant->matricule : '' }}
                                                                            </p>
                                                                        </div>
                                                                    
                                                                        <div class="dash"></div>
                                                                    </section>
                                                                    
                                                                    <section class="w-100 d-flex flex-wrap align-items-center justify-content-center">
                                                                        <div class="d-flex form-item">
                                                                            <div class="d-flex flex-column text-center">
                                                                                <span class="fs-5 fw-bolder bold_part">Né(e) le:</span>
                                                                                <span class="english_subtitle">Born on</span>
                                                                            </div>
                                                                        </div>
                                                                    
                                                                        <div class="d-flex justify-content-center">
                                                                            <span class="name">
                                                                                {{ isset($etudiant) ? $etudiant->date_naissance : '' }}
                                                                            </span>
                                                                        </div>
                                                                    
                                                                        <div class="dash"></div>
                                                                    
                                                                        <div class="d-flex form-item">
                                                                            <div class="d-flex flex-column text-center">
                                                                                <span>a</span>
                                                                                <span>at</span>
                                                                            </div>
                                                                        </div>
                                                                    
                                                                        <div class="d-flex justify-content-center">
                                                                            <p class="texte">
                                                                                {{ isset($etudiant) ? $etudiant->lieu_naissance : '' }}
                                                                            </p>
                                                                        </div>
                                                                    
                                                                        <div class="dash"></div>
                                                                    </section>

                                                                

                                                                    
                                                                    

                                                                    <section class="w-100 d-flex align-items-center justify-content-between">
                                                                        <div class="d-flex flex-column text-center" style="max-width: 370px;"> <!-- Ajout de la propriété max-width ici -->
                                                                            <span>a subi avec succes, les epreuves sanctionnant l'examen de la</span>
                                                                            <span class="english_subtitle"> has successfully fulfiled the requirement of the</span>
                                                                        </div>
                                                                    </section>
                                                                    
                                                                    


                                                                </section>
                                                                <section class="w-100 d-flex align-items-center justify-content-between"  style="max-width: 360px;">
                                                                    <div class="d-flex form-item me-5 pe-5">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-5 fw-bolder bold_part">Licence de</span>
                                                                            <span class="english_subtitle">Bachelor's Degree in</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex justify-content-center"> <!-- Utilisation de justify-content-center pour centrer le texte -->
                                                                       
                                                                    </div>
                                                                    <div class="dashl"  style="max-width: 360px;"></div>
                                                                    <div class="name">
                                                                        TECHNICIEN
                                                                    </div>
                                                                    <br>
                                                                </section>
                                                                


                                                                <section class="w-100 d-flex align-items-center justify-content-between" style="max-width: 360px;">
                                                                    <div class="d-flex form-item me-5 pe-5">
                                                                        <div class="d-flex flex-column">
                                                                            <span class="fs-5 fw-bolder bold_part">Specialite/Option</span>
                                                                            <span class="english_subtitle">Speciality/Option</span>
                                                                         <br>
                                                                        
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex justify-content-center"> <!-- Utilisation de justify-content-center pour centrer le texte -->
                                                                        <div class="namespecialit">
                                                                            {{ isset($releve) ? $releve->filiere : '' }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="dashl" style="max-width: 360px;"></div>
                                                                    
                                                                </section>
                                                                

                                                                <section class="w-100 d-flex align-items-center justify-content-between" style="max-width: 360px;">
                                                                    <div class="d-flex form-item me-5 pe-5 ">
                                                                        <div class="d-flex flex-column">
                                                                                    <span class="fs-5 fw-bolder bold_part"><em>Session
                                                                                    de</em></span>

                                                                            <span class="english_subtitle">Session</span>
                                                                            <br>
                                                                            <br>
                                                                            <br>
                                                                        </div>

                                                                    </div>
                                                                    &nbsp;&nbsp;&nbsp;
                                                                    <div class="d-flex flex-column">
                                                                        <span class="fs-5 fw-bolder bold_part1">
                                                                            <?php echo date('F Y'); ?>
                                                                        
                                                                            avec une moyenne generale pondere(MGP)
                                                                            de:
                                                                            {{ isset($releve) ? $releve->mgp : '' }},credit(s):180
                                                                            et la mention
                                                                            Bien</span>

                                                                        <span class="english_subtitle1">with a
                                                                            cummulate
                                                                            grade point Average(GPA)
                                                                            of:{{ isset($releve) ? $releve->mgp : '' }}/4.00,credit:180
                                                                            and Grade:Good</span>

                                                                    </div>



                                                                </section>
                                                                <br>
                                                               
                                                                <section class="w-100 d-flex align-items-center align-items-center" style="max-width: 360px;">

                                                                    <div class="d-flex flex-column">
                                                                        <span class="fs-5 fw-bolder bold_part1 english_subtitle1" style="max-width: 360px;">
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                           
                                                                            En foi de quoi la presente attestation
                                                                            est
                                                                            établie et lui est délivrée pour servir
                                                                            et
                                                                            valoir ce droit</span>

                                                                        <span class="english_subtitle2" style="max-width: 360px;">
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In
                                                                            writness where of the present Testimonial is
                                                                            given with the privileges there into
                                                                            pertaining./</span>

                                                                    </div>



                                                                </section>

                                                                <section class="w-100 d-flex flex-column" style="font-size: 12px" style="max-width: 360px;">

                                                                    <div>
                                                                        <div  class="d-flex flex-wrap justify-content-center">

                                                                            <div class="content-recap w-100 mt-3 bloc" style="max-width: 360px;">
                                                                                <table class="table table-sm" style="max-width: 360px;">
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
                                                                                            <td class="text-center">C
                                                                                            </td>
                                                                                            <td>Passable/Pass</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> [220-240[" </td>
                                                                                            <td class="text-center">C+
                                                                                            </td>
                                                                                            <td>Passable/Pass</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> [240-260[ </td>
                                                                                            <td class="text-center">B-
                                                                                            </td>
                                                                                            <td>Assez-Bien / Fair</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> [260-280[ </td>
                                                                                            <td class="text-center">B
                                                                                            </td>
                                                                                            <td>Assez-Bien / Fair</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> [280-300[ </td>
                                                                                            <td class="text-center">B+
                                                                                            </td>
                                                                                            <td>Bien / Good</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> [300-320[ </td>
                                                                                            <td class="text-center">A-
                                                                                            </td>
                                                                                            <td>Passable/Pass</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> [300-400[ </td>
                                                                                            <td class="text-center">A
                                                                                            </td>
                                                                                            <td>Passable/Pass</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> 4.00 </td>
                                                                                            <td class="text-center">A+
                                                                                            </td>
                                                                                            <td>Excellent</td>
                                                                                        </tr>

                                                                                    </tbody>
                                                                                </table>
                                                                               
                                                                                  

                                                                            </div>
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
                                                                            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                            &nbsp;&nbsp; &nbsp;
                                                                            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                            &nbsp;&nbsp; &nbsp;
                                                                            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                            &nbsp;&nbsp; &nbsp;
                                                                            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                           
                                                                            <div class="Qrcode" >
                                                                            {{-- {{QrCode::size(150)->generate($hmacInfo)}} --}}
                                                                           </div>
                                                                        </div>

                                                                </section>



                                                                <section class="w-100 d-flex flex-column align-items-center" style="max-width: 360px;">
                                                                    <span class="w-100 decision-data d-flex flex-column w-auto">
                                                                        <span class="yaous"> Yaouné le /The
                                                                            <?php echo date('j F Y'); ?> </span>

                                                                        <!--to change-->
                                                                    </span>
                                                                </section>
                                                                <section class="w-100 d-flex align-items-center justify-content-between" style="max-width: 360px;">
                                                                    <div class="d-flex flex-column" style="max-width: 360px;">
                                                                        <span>Le chef de departement de</span>
                                                                        <span class="english_subtitle"> The Head of the
                                                                            departement
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            <span style="text-decoration: underline;">Information
                                                                                and commucation Technologie</span>
                                                                        </span>
                                                                    </div>

                                                                    <div class="d-flex flex-column" style="max-width: 360px;">
                                                                        <span class="fs-5 fw-bolder bold_part1">
                                                                            Le Doyen/The Dean</span>

                                                                    </div>
                                                                    <div class="form-value ps-4 pt-1">

                                                                    </div>


                                                                </section>
                                                                <br>
                                                                <section>

                                                                    <div class="d-flex flex-column" style="max-width: 360px;">
                                                                        <span class="english_subtitle1"><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                En foi de quoi la presente attestation
                                                                                est
                                                                                établie et lui est délivrée pour servir
                                                                                et
                                                                                valoir ce droit.</em></span>

                                                                        <span class="english_subtitle" style="max-width: 360px;">
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            In writness where of the present Testimonial
                                                                            is
                                                                            given with the privileges there into
                                                                            pertaining./</span>

                                                                    </div>



                                                                </section>
                                                                <br>
                                                                <section class="w-100 d-flex align-items-center justify-content-between" style="max-width: 360px;">
                                                                    <div class="d-flex flex-column" style="max-width: 360px;">
                                                                        <span></span>
                                                                        <span class="english_subtitle">
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            <span style="text-decoration: underline;"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="form-value ps-4 pt-1">
                                                                    </div>
                                                                    <div class="d-flex form-item">
                                                                        <div class="d-flex flex-column" style="max-width: 360px;">
                                                                            <span class="english_subtitle">
                                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                a/FS.Imprimé le 06/01/2023</span>
                                                                            <span class="english_subtitle">
                                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                              CopyRight
                                                                                GICA SUNGO</span>


                                                                        </div>

                                                                    </div>

                                                                </section>
                                                           

                                                            </main>
                                                    </div>
                                                    </section>



                                                
                                                   
                                                        </ul>
                                                    </div> 
                                            </div>
                                            <!--end card-body-->

                                        </div>
                                        <div class="col-sm-4">

                                            <button id="downloadButton">Télécharger le PDF</button>
                                        </div>
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
                    class="mdi mdi-heart text-danger"></i> </span> --}}
        </footer>
        <!--end footer-->
    </div>
    </div>
    <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Vue Blade (attestation.blade.php) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#downloadButton').click(function() {
                var content = $('.contents').html();

                var printWindow = window.open('', 'Auth.doc');
                printWindow.document.write('<html><head><title>Auth.doc</title>');
                printWindow.document.write(
                    '<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />');
                printWindow.document.write(
                    '<link href="assets/css/jquery-ui.min.css" rel="stylesheet">');
                printWindow.document.write(
                    '<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />');
                printWindow.document.write(
                    '<style>@page { size: A4; margin: 0; } body { margin: 1cm; } .print-page { background-image: url(\'Uy.png\'); background-repeat: no-repeat; background-size: cover; }</style>');
                printWindow.document.write('</head><body>');
                printWindow.document.write('<div class="print-page">' + content + '</div>');
                printWindow.document.write('</body></html>');

                printWindow.document.close();

                // Attendre que le contenu soit chargé dans la fenêtre d'impression
                printWindow.onload = function() {
                    var printDocument = printWindow.document.documentElement;
                    var printPage = printDocument.querySelector('.print-page');

                    // Calculer la hauteur maximale d'une page A4
                    var pageHeight = 11.7 * 96; // Hauteur en pixels

                    // Réduire la hauteur des éléments pour s'adapter à une seule page
                    var elements = printPage.querySelectorAll('*');
                    for (var i = 0; i < elements.length; i++) {
                        var element = elements[i];
                        var elementHeight = element.offsetHeight;
                        if (elementHeight > pageHeight) {
                            element.style.height = pageHeight + 'px';
                        }
                    }

                    // Appeler la fonction d'impression de la fenêtre d'impression
                    printWindow.print();
                };
            });
        });
    </script>


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    {{-- <script src="assets/js/bootstrap.bundle.min.js"></script> --}}
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>