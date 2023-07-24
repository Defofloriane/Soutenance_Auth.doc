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

                <li>
                    <a href="{{ route('view_admin') }}">
                        <i data-feather="user" class="align-self-center menu-icon"></i>
                        <span>Account</span>
                        <!-- <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span> -->
                    </a>
                    <!-- <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('index') }}"><i
                                    class="ti-control-record"></i>Home</a></li>
                    </ul> -->
                </li>
                <br />

                <li>
                    <a href=" {{ route('faculte') }}"><i data-feather="users" class="align-self-center menu-icon"></i>
                        <span>Students</span>
                        <!-- <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span> -->
                    </a>
                    <!-- <ul class="nav-second-level" aria-expanded="false"> -->
                </li>
                <br />
                <li>
                    <a href=" {{ route('faculte') }}"><i data-feather="book" class="align-self-center menu-icon"></i>

                        <span>Note</span>
                        <!-- <span class="menu-arrow">
                            <i class="mdi mdi-chevron-right"></i>
                        </span> -->
                    </a>
                    <!-- <ul class="nav-second-level" aria-expanded="false"> -->
                </li>



                <!-- <li>
                    <a href="javascript: void(0);"><i data-feather="lock" class="align-self-center menu-icon"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="{{ route('signup') }}"><i class="ti-control-record"></i>Add Admin</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('view_admin') }}"><i class="ti-control-record"></i>List Admin</a></li>

                    </ul>
                </li> -->

                <!-- <hr class="hr-dashed hr-menu">
                <li class="menu-label my-2">olders</li>


                <li>
                    <a href=" {{ route('faculte') }}"><i data-feather="layers" class="align-self-center menu-icon"></i><span>List Etudiant</span><span class="badge badge-soft-success menu-arrow">Exemple</span></a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="file-plus" class="align-self-center menu-icon"></i><span>Search Releve</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href=" {{ route('details') }}"><i class="ti-control-record"></i>Repord card</a></li>

                    </ul>
                </li> -->
                <!-- <li>
                    <a href="javascript: void(0);"><i data-feather="file-plus" class="align-self-center menu-icon"></i><span>Attestation</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href=" {{ route('filiereAttestation') }}"><i class="ti-control-record"></i>Attestation de reussite</a></li>

                    </ul>
                </li> -->
            </ul>

            <!-- <div class="update-msg text-center">
                <a href="javascript: void(0);" class="float-right close-btn text-white" data-dismiss="update-msg" aria-label="Close" aria-hidden="true">
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
                    <li class="dropdown">
                        <!-- <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="ml-1 nav-user-name hidden-sm">Nick</span>
                            <img src="assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i data-feather="settings" class="align-self-center icon-xs icon-dual mr-1"></i> Settings</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="#"><i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i> Logout</a>
                        </div> -->
                    </li>
                </ul>
                
                <ul class="list-unstyled topbar-nav mb-0">
                    <li>
                        <button class="nav-link button-menu-mobile">
                            <i data-feather="menu" class="align-self-center topbar-icon"></i>
                        </button>
                    </li>
                    <li class="creat-btn">
                        <div class="nav ">


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
                                                <h4 class="card-title">Student's information</h4>
                                                <h2 class="">{{$etudiant->nom}} {{$etudiant->prenom}}</h2>
                                                <h4 class="">{{$etudiant->matricule}}</h2>
                                                    <h4 class="">{{$etudiant->date_naissance}} at {{$etudiant->lieu_naissance}}</h2>
                                            </div>
                                            <!--end card-header-->

                                            <section class="w-100 mt-2">
                                                <table class="w-100 table print-table">
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
                                                    <tbody>
                                                        @if (isset($notes))
                                                        @foreach ($notes as $note)
                                                        <tr>
                                                            <td>{{ $note->ue }}</td>
                                                            <td>{{ $note->nom_ue }}</td>
                                                            <td>{{ $note->credit }}</td>
                                                            <td>{{ $note->note }}</td>
                                                            <td>{{ $note->mention }}</td>
                                                            <td>{{ $note->semestre }}</td>
                                                            <!--semestre de l ue A AJOUTER-->
                                                            <td>2021</td>
                                                            <!--anne que tu compose la matiere  de l ue A AJOUTER-->
                                                            <td>{{ $note->decision }}</td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        <tr>
                                                            <td colspan="8">Aucune note
                                                                trouvée pour cet étudiant</td>
                                                        </tr>
                                                        @endif



                                                    </tbody>
                                                </table>
                                            </section>



                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">

                                                        <form method="POST" action="{{ route('show') }}">
                                                            @csrf
                                                            <input type="hidden" name="id_releve" value="{{ $releve->id_releve }}" id="id_releve">
                                                            <input type="hidden" name="matricule" value="{{ $etudiant ->matricule}}" id="matricule ">
                                                            <input type="hidden" name="niveau" value="{{$niveau->nom_niveau}}" id="niveau">
                                                            <input type="hidden" name="filiere" value="{{$filiere->id_filiere}}" id="filiere">
                                                            <input type="hidden" name="type" value="releve" id="type">
                                                            @if(isset($note))
                                                            <button type="submit" id="eltb" class="btn btn-primary mb-3">Get Transcript</button>
                                                            @endif
                                                        </form>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                    </div>
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
    <!-- Fenêtre Modale -->

    <!-- fenetre modal -->




    <!-- fin -->

    </div>
    </div>
    </div>

    </div><!-- container -->

    <footer class="footer text-center text-sm-left">
        {{-- &copy; 2023 Auth.doc <span class="d-none d-sm-inline-block float-right">Crafted with <i
                    class="mdi mdi-heart text-danger"></i> by groupe 6</span> --}}
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
    <script>
        function enregistrerEtudiant() {
            // Récupérer les valeurs des champs du formulaire
            var nom = document.getElementById('nom').value;
            var prenom = document.getElementById('prenom').value;
            var matricule = document.getElementById('matricule').value;
            var dateNaissance = document.getElementById('dateNaissance').value;
            var lieuNaissance = document.getElementById('lieuNaissance').value;

            // Vous pouvez maintenant faire ce que vous voulez avec ces valeurs, par exemple, les envoyer à votre serveur pour les enregistrer dans une base de données.

            // Fermer la modal après l'enregistrement
            $('#modalEnregistrementEtudiant').modal('hide');
            alert('Enregist.')
        }
    </script>

</body>

</html>