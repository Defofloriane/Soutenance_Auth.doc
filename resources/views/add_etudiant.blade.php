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
                    <a href=" {{ route('view_add_releve') }}"><i data-feather="book" class="align-self-center menu-icon"></i>

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
                <br>
                <li>
                    <a href=" {{ route('filiereAttestation') }}">
                        <i data-feather="file-plus" class="align-self-center menu-icon">

                        </i><span>Attestation</span>
                        <!-- < span class="menu-arrow"> -->
                        <!-- <i class="mdi mdi-chevron-right"></i> -->
                        <!-- </span> -->
                    </a>

                </li>
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
                                                <h4 class="card-title">Student's global information</h4>
                                                <p class="text-muted mb-0">
                                                    some summary information of the students present in the database, your Last Name ,FirstName, Matricule, Level, Filiere, MGP, Decision;Anne Scolaire
                                                </p>
                                            </div>
                                            <!--end card-header-->
                                            <div class="card-body bootstrap-select-1">
                                    <form method="POST" action="{{ route('get_ue_credit') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="mb-3">Filiere</label>
                                                <select id="filiere_select" name="filiere"
                                                    class="select2 form-control mb-3 custom-select"
                                                    style="width: 100%; height:36px;" required>

                                                    <option value="ICT4D">ICT4D</option>
                                                    <option value="INFO">INFO</option>
                                                    <option value="MATHS">MATHS</option>
                                                    <option value="PHYSIQUE">PHYSIQUE</option>
                                                    <option value="CHIMIE">CHIMIE</option>
                                                    <option value="BIOS">BIOS</option>

                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="mb-3" for="niveau">Level</label>
                                                <select id="niveau" name="niveau"
                                                    class="select2 form-control mb-3 custom-select"
                                                    style="width: 100%; height:36px;" required>
                                                    <option value="L1"> L1</option>
                                                    <option value="L2"> L2</option>
                                                    <option value="L3"> L3</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label class="mb-3" for="anneeAcademique">Academic year</label>
                                                <input type="text" class="form-control" id="anneeAcademique"
                                                    name="anneeAcademique" placeholder=" Exemple : 2020/2022">

                                            </div> <!-- end col -->
                                            <div class="col-md-3">
                                                <label class="mb-3">Addition Method</label>
                                                <div class="radio-group">
                                                    <input type="radio" id="radio1" name="radio"
                                                        value="Excel">
                                                    <label for="radio1">Excel</label>
                                                    <input type="radio" id="radio2" name="radio"
                                                        value="Manuel">
                                                    <label for="radio2">Manual</label>
                                                </div>
                                            </div>

                                        </div><!-- end row -->
                                        <button id="eltb" class="btn btn-primary mb-3" type="submit">
                                            validate</button>
                                    </form>

                                </div>

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
                                                    @if(isset($etudiants))
                                                    @foreach($etudiants as $etudiant)
                                                    @foreach($releves as $releve)
                                                    @if($releve->etudiant === $etudiant->matricule)
                                                    <tr>
                                                        <td>{{ $etudiant ->matricule }}</td>
                                                        <td>{{ $etudiant ->nom}}</td>
                                                        <td>{{ $etudiant ->prenom}}</td>


                                                        <td>
                                                            <form method="POST" action="{{ route('detail_student') }}">
                                                                @csrf
                                                                <input type="hidden" name="id_releve" value="{{ $releve->id_releve }}" id="id_releve">
                                                                <input type="hidden" name="matricule" value="{{ $etudiant ->matricule}}" id="matricule ">
                                                                <input type="hidden" name="niveau" value="{{$niveau->id_niveau}}" id="niveau">
                                                                <input type="hidden" name="filiere" value="{{$filiere->id_filiere}}" id="filiere">
                                                                <input type="hidden" name="type" value="releve" id="type">
                                                                <button class="btn btn-sm btn-soft-primary" type="submit">retail</button>
                                                            </form>

                                                        </td>

                                                    </tr>

                                                    @endif

                                                    @endforeach
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                            </table>

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <button id="eltb" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalEnregistrementEtudiant">Add Student</button>
                                                    </div>
                                                    <div class="col">
                                                        <button id="eltb" class="btn btn-secondary mb-3" data-toggle="modal" data-target="#myModal">Add Many Student With Excel file</button>

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
        
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- En-tête de la Fenêtre Modale -->
                    <div class="modal-header">
                        <h4 class="modal-title">Form to Send an Excel File</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Corps de la Fenêtre Modale -->
                    <div class="modal-body">
                        <!-- Formulaire pour envoyer le fichier Excel -->
                        <form action="{{ route('addStudent_excel') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="dateNaissance">Academic year</label>
                                <input type="text" class="form-control" id="dateNaissance" name="anneeAcademique" placeholder=" Exemple : 2020/2022">
                            </div>
                            <div class="form-group">
                                <label for="fileInput">Select an Excel file:</label>
                                <input type="file" class="form-control-file" id="fileInput" name="file">
                                <input type="hidden" class="form-control" name="niveau" value="{{$niveau->id_niveau}}">
                                <input type="hidden" class="form-control" name="filiere" value="{{$filiere->id_filiere}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- fenetre modal -->
        <div class="modal fade" id="modalEnregistrementEtudiant" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Register a student</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formEnregistrementEtudiant" action="{{ route('addStudent') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nom">Last name</label>
                                <input type="text" class="form-control" id="nom" name="nom">
                            </div>
                            <div class="form-group">
                                <label for="prenom">First name</label>
                                <input type="text" class="form-control" id="prenom" name="prenom">
                            </div>
                            <div class="form-group">
                                <label for="matricule">Registration</label>
                                <input type="text" class="form-control" id="matricule" name="matricule">
                            </div>
                            <div class="form-group">
                                <label for="dateNaissance">Date of birth</label>
                                <input type="date" class="form-control" id="dateNaissance" name="dateNaissance">
                            </div>
                            <div class="form-group">
                                <label for="lieuNaissance">Place of birth</label>
                                <input type="text" class="form-control" id="lieuNaissance" name="lieuNaissance">
                                <input type="hidden" class="form-control" name="niveau" value="{{$niveau->id_niveau}}">
                                <input type="hidden" class="form-control" name="filiere" value="{{$filiere->id_filiere}}">
                            </div>
                            <div class="form-group">
                                <label for="dateNaissance">Academic year</label>
                                <input type="text" class="form-control" id="dateNaissance" name="anneeAcademique" placeholder=" Exemple : 2020/2022">
                            </div>
                            <!-- Boutons "Annuler" et "Enregistrer" inclus dans le formulaire -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <input type="submit" class="btn btn-primary" value="Enregistrer">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!-- fin -->

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