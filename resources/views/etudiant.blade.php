<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Auth.doc</title>
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
    <style type="text/css">
        #select {
            font-size: 16px;
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 8px;
            width: 200px;
        }

        #select:hover,
        #select:focus {
            outline: none;
            border-color: #5c5cff;
        }
    </style>
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
                    <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{route('index')}}"><i class="ti-control-record"></i>Home</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Apps</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">

                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Auth.doc <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('view_add_releve')}}">Add Releve</a></li>
                                {{-- <li><a href="apps-project-projects.html">Projects</a></li> --}}

                            </ul>
                        </li>

                </li>
            </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('signup')}}"><i class="ti-control-record"></i>Add Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('view_admin')}}"><i class="ti-control-record"></i>List Admin</a></li>

                </ul>
            </li>

            <hr class="hr-dashed hr-menu">
            <li class="menu-label my-2">olders</li>


            <li>
                <a href=" {{route('faculte')}}"><i data-feather="layers" class="align-self-center menu-icon"></i><span>List Etudiant</span><span class="badge badge-soft-success menu-arrow">Exemple</span></a>
            </li>

            <li>
                <a href="javascript: void(0);"><i data-feather="file-plus" class="align-self-center menu-icon"></i><span>Search Releve</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href=" {{route('details')}}"><i class="ti-control-record"></i>Repord card</a></li>

                </ul>
            </li>
            <li>
                <a href="javascript: void(0);"><i data-feather="file-plus" class="align-self-center menu-icon"></i><span>Attestation</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href=" {{route('attestation')}}"><i class="ti-control-record"></i>Attestation de reussite</a></li>

                </ul>
            </li>
            </ul>

            <div class="update-msg text-center">
                <a href="javascript: void(0);" class="float-right close-btn text-white" data-dismiss="update-msg" aria-label="Close" aria-hidden="true">
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
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i data-feather="search" class="topbar-icon"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-lg p-0">
                            <!-- Top Search Bar -->
                            <div class="app-search-topbar">
                                <form action="#" method="get">
                                    <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i data-feather="bell" class="align-self-center topbar-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">

                            <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
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
                                            <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
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
                                            <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
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
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="ml-1 nav-user-name hidden-sm">Nick</span>
                            <img src="assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i data-feather="settings" class="align-self-center icon-xs icon-dual mr-1"></i> Settings</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="#"><i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i> Logout</a>
                        </div>
                    </li>
                </ul>
                <!--end topbar-nav-->


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

                            </div>

                            <script>
                                const select = document.getElementById('select');
                                const addMatriculeButton = document.getElementById('add-matricule');

                                addMatriculeButton.addEventListener('click', function() {
                                    const matriculeToAdd = prompt('Enter matricule to add:');
                                    if (matriculeToAdd) {
                                        const option = document.createElement('option');
                                        option.value = matriculeToAdd;
                                        option.text = matriculeToAdd;
                                        select.insertBefore(option, select.firstChild);
                                        select.value = matriculeToAdd;
                                    }
                                });
                            </script>

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
                        <div class="tab-pane fade show active" id="Profile_Post" role="tabpanel" aria-labelledby="Profile_Post_tab">
                            <div class="row">



                                <div class="card  mx-auto">

                                    <div class="card-body">
                                        <ul class="list-unstyled mb-0">
                                            <div class="card-header">
                                                <h4 class="card-title">Student's global information</h4>
                                                <p class="text-muted mb-0">
                                                    some summary information of the students present in the database, your Last Name ,FirstName, Matricule, Level, Filiere, MGP, Decision;Anne Scolaire
                                                </p>
                                            </div>
                                            <!--end card-header-->

                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th> Matricule</th>
                                                        <th> Name</th>
                                                        <th> FirstName</th>
                                                        <th>Check</th>

                                                    </tr>
                                                </thead>


                                                <tbody>
                                                @foreach($etudiants as $etudiant)
                                                @foreach($releves as $releve)
                                                @if($releve->etudiant === $etudiant->matricule)
                                                    <tr>
                                                        <td>{{ $etudiant ->matricule }}</td>
                                                        <td>{{ $etudiant ->nom}}</td>
                                                        <td>{{ $etudiant ->prenom}}</td>
                                                       

                                                        <td>
                                                            <form method="POST" action="{{ route('show') }}">
                                                                @csrf
                                                                <input type="hidden" name="id_releve" value="{{ $releve->id_releve }}" id="id_releve">
                                                                <input type="hidden" name="matricule " value="{{ $etudiant ->matricule}}" id="matricule ">
                                                                <input type="hidden" name="niveau " value="{{ $niveau}}" id="niveau">
                                                                <button class="btn btn-sm btn-soft-primary" type="submit">Voir le releve</button>
                                                            </form>


                                                        </td>

                                                    </tr>

                                                    @endif
                                                   
                                                    @endforeach
                                                    @endforeach
                                                </tbody>
                                            </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
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