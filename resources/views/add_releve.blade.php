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

    <!-- Plugins css -->
    <link href="../plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <link href="../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <style>
        #eltb {
            margin-top: 20px;
            margin-left: 1%;
        }

        .nav {
            margin-top: 6%;
        }

        .radio-group input[type="radio"] {
            display: none;
        }

        .radio-group label {
            display: inline-block;
            cursor: pointer;
            margin-right: 10px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #000;
        }

        .radio-group input[type="radio"]:checked+label {
            background-color: rgb(41, 76, 253);
            ;
            color: #fff;
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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Auth.doc</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Etudiants</li>
                                    </ol>
                                </div><!--end col-->

                            </div><!--end row-->
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div><!--end row-->
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-12">
                        @if($method==null)
                        <div class="card">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                                <a href="{{ route('details_releve', ['id' => isset($releve) ? $releve->id_releve : '', 'etudiant' => isset($etudiant) ? $etudiant : '', 'notes' => isset($notes) ? $notes : '']) }}">Voir le relevé</a>
                            </div>
                            @endif
                            <div class="card-header">
                                <h4 class="card-title">Select ton niveau par le code de ce niveau</h4>
                                <p class="text-muted mb-0">Selectionner ton niveu et Votre faculte
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body bootstrap-select-1">
                                <form method="POST" action="{{ route('get_ue_credit') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="mb-3">Filiere</label>
                                            <select id="filiere_select" name="filiere" class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" required>

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
                                            <select id="niveau" name="niveau" class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" required>
                                                <option value="L1"> L1</option>
                                                <option value="L2"> L2</option>
                                                <option value="L3"> L3</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <label class="mb-3" for="anneeAcademique">Academic year</label>
                                            <input type="text" class="form-control" id="anneeAcademique" name="anneeAcademique" placeholder=" Exemple : 2020/2022">

                                        </div> <!-- end col -->
                                        <div class="col-md-3">
                                            <label class="mb-3">Addition Method</label>
                                            <div class="radio-group">
                                                <input type="radio" id="radio1" name="radio" value="Excel">
                                                <label for="radio1">Excel</label>
                                                <input type="radio" id="radio2" name="radio" value="Manuel">
                                                <label for="radio2">Manual</label>
                                            </div>
                                        </div>

                                    </div><!-- end row -->
                                    <button id="eltb" class="btn btn-primary mb-3" type="submit">Valider le niveau</button>
                                </form>

                            </div><!-- end card-body -->
                        </div> <!-- end card -->
                        @endif
                        <div class="card">
                            @if($method=='Manuel')
                    
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Notes of Student</h4>
                                        <p class="text-muted mb-0">The following information concerns only the minutes of each teaching unit of the <code class="highlighter-rouge">&lt;CC,SN/RATRAPPAGE AND OU OR&gt;</code> the differents
                                        </p>
                                    </div><!--end card-header-->
                                    <div class="card-body bootstrap-select-1">
                                        @if(isset($resultats) )

                                        <form id="hidden_form" method="POST" action="{{ route('add_releve') }}">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">First name</label>
                                                    <input type="text" class="form-control" id="validationCustom01" name="firstName" placeholder="First name" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Last name</label>
                                                    <input type="text" class="form-control" id="validationCustom02" name="lastName" placeholder="Last name" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Matricule</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">#00A</span>
                                                        </div>
                                                        <input name="matricule" type="text" class="form-control" id="validationCustomUsername" placeholder="Matricule" aria-describedby="inputGroupPrepend" required>
                                                        <div class="invalid-feedback">
                                                            Please choose a Matricule.
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end form-row-->
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Birth Day</label>
                                                    <input name="birthDay" type="text" class="form-control" id="date_naissance" placeholder="04/04/2003" value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Place of Birth</label>
                                                    <input name="placeBirth" type="text" class="form-control" id="lieu_naissance" placeholder="Doula" value="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div><!--end col-->
                                            </div>
                                            <div class="form-row">

                                                @foreach ($resultats as $ue)
                                                <div class="col-md-2 mb-2">
                                                    <label for="code_ue_input">Code Ue</label>
                                                    <input type="text" class="form-control" id="validationCustom05" value="{{ $ue->id_ue }}" name="notes[{{ $ue->id_ue }}][code_ue]" required style="font-weight: bold;">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid state.
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-md-1 mb-1">
                                                    <label for="credit_input">Credit</label>
                                                    <input type="text" class="form-control" id="validationCustom05" value="{{ $ue->credit }}" name="notes[{{ $ue->id_ue }}][credit]" required style="font-weight: bold;">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid zip.
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-md-2 mb-2">
                                                    <label for="credit_input">Semestre</label>
                                                    <select id="niveau_select" name="notes[{{ $ue->id_ue }}][semestre]" class="select2 form-control mb-3 custom-select" style="font-weight: bold;" required>
                                                        <option value="" style="font-weight: bold;">Semestre</option>

                                                        <optgroup label="Le 1er semestre">
                                                            <option class="option" value="1">Semestre 1</option>
                                                            <option class="option" value="2">Semestre 2</option>
                                                        </optgroup>
                                                        <optgroup label="Le 2ème semestre">
                                                            <option class="option" value="3">Semestre 3</option>
                                                            <option class="option" value="4">Semestre 4</option>
                                                        </optgroup>


                                                    </select>
                                                </div><!--end col-->
                                                <div class="col-md-2 mb-2">
                                                    <label for="validationCustom04">Note(CC)</label>
                                                    <input type="numerics" class="form-control" id="validationCustom04" placeholder="CC" name="notes[{{ $ue->id_ue }}][note_cc]" required style="font-weight: bold;">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid state.
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom05">Note(SN)</label>
                                                    <input type="numerics" class="form-control" id="validationCustom05" placeholder="SN/RATRAPPAGE" name="notes[{{ $ue->id_ue }}][note_sn]" required style="font-weight: bold;">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid zip.
                                                    </div>
                                                </div><!--end col-->
                                                <div class="col-md-2 mb-2">
                                                    <label for="validationCustom05">Note(TP)</label>
                                                    <input type="numerics" class="form-control" id="validationCustom05" placeholder="TP" name="notes[{{ $ue->id_ue }}][note_tp]" style="font-weight: bold;">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid zip.
                                                    </div>
                                                </div>
                                                @endforeach
                                                <button type="submit" class="btn btn-primary">Submit</button>

                                                @else
                                                <!--end col-->
                                                @endif
                                            </div><!--end form-row-->
                                        </form>

                                        <!--end form-->


                                    </div><!--end card-body-->
                                </div><!--end card-->
                          
                            @endif
                            <!--end col-->
                        </div><!--end row-->
                        @if($method=='Excel')
                        <div class="col-lg-12" id="excel-form">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Soumetre Via Excel</h4>
                                    <!-- <p class="text-muted mb-0">Vous pouvez Soumetre Le(s) Etudiant(s) en utilisant<code class="highlighter-rouge"></code>
                                        <code class="highlighter-rouge">Excel. </code>Mais d abord charger ces <code class="highlighter-rouge">informations du formulaire</code>.
                                    </p> -->
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <form id="eltb" method="POST" action="{{route('import_excel')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">


                                            <div class="col-md-3">
                                                <label class="mb-6">Type of Evaluation</label>
                                                <select id="filiere_select" name="evaluation" class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" required>

                                                    <option value="CC">CC</option>

                                                    <option value="SN">SN</option>

                                                    <option value="TP">TP</option>
                                                </select>
                                            </div>

                                            <div class="col-md-2">
                                                <label class="mb-6">Matiere</label>
                                                <select id="filiere_select" name="matiere" class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" required>
                                                    <option value="">Liste des matieres</option>

                                                    <optgroup label="Code Ue">


                                                        @if ($listeMatiere)

                                                        @foreach($listeMatiere as $matiere)
                                                        <option value="{{ $matiere->id_ue }}">{{ $matiere->id_ue }}</option>
                                                        @endforeach
                                                        @endif

                                                    </optgroup>


                                                </select>
                                            </div>

                                            <div class="col-md-2">
                                                <label class="mb-6">Semestre</label>
                                                <select id="semestre" name="semestre" class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" required>
                                                    <option value="1">Semestre 1</option>
                                                    <option value="2">Semestre 2</option>
                                                    <option value="3">Semestre 3</option>
                                                    <option value="4">Semestre 4</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="mb-6">Matiere A TP</label>
                                                <div class="radio-group">
                                                    <input type="radio" id="yes" name="radioschoose" value="OUI">
                                                    <label for="yes">OUI</label>
                                                    <input type="radio" id="no" name="radioschoose" value="NON">
                                                    <label for="no">NON</label>
                                                </div>
                                            </div>
                                        </div>
                                         <div style="margin-top: 30px;">
                                        <input class="btn btn-sm btn-soft-primary " value="Import Fichier Excel" type="file" accept=".xlsx, .xls" name="excel_file" id="excel_file" required>
                                         &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                        <button class="btn btn-primary" type="submit" id="submit_btn" >Upload/.xlsx, .xls</button>
                                        </div>
                                        <!-- Code HTML du formulaire -->
                                    </form>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div>
                        @endif

                           <div class="card  mx-auto">
                                    <div class="card-body">
                                        <ul class="list-unstyled mb-0">
                                        
                                            <!--end card-header-->

                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th> Matricule</th>
                                                        <th> Name</th>
                                                        <th> FirstName</th>
                                                        <th>Note</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                @if(isset($etudiants))
                                                @foreach($etudiants as $etudiant)
                                                @foreach($listEtudiant as $releve)
                                                @if($releve->etudiant === $etudiant->matricule)
                                                    <tr>
                                                        <td>{{ $etudiant ->matricule }}</td>
                                                        <td>{{ $etudiant ->nom}}</td>
                                                        <td>{{ $etudiant ->prenom}}</td>
                                                        <td>{{ $releve ->note_evaluation}} / {{ $releve ->noteSur}} </td>
                                                    </tr>

                                                    @endif
                                                   
                                                    @endforeach
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                            <!-- <button id="eltb" class="btn btn-primary mb-3"  data-toggle="modal" data-target="#modalEnregistrementEtudiant" >Add Student</button>   -->
                                    </div>
                                </div>
                    </div> <!-- end col -->
                    <!-- end col -->
                </div> <!-- end row -->

                <!-- end row -->

            </div><!-- container -->

            <footer class="footer text-center text-sm-left">
                &copy; 2023 Auth.doc <span class="d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by KemgneFloriane</span>
            </footer>
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- jQuery  -->
    <script>

    </script>
    <script>
        function showHiddenForm() {
            var hiddenForm = document.getElementById('hidden_form');
            hiddenForm.classList.remove('d-none');


        }
    </script>

    <script>
        document.getElementById('excel_file').addEventListener('change', function() {
            var submitBtn = document.getElementById('submit_btn');
            submitBtn.disabled = this.files.length === 0;
        });
    </script>
    <script>
        // Récupérer les éléments du DOM
        const radioExcel = document.getElementById("radio1");
        const radioManuel = document.getElementById("radio2");
        const excelForm = document.getElementById("excel-form");
        const manuelForm = document.getElementById("manuel-form");


        // Ajouter des écouteurs d'événements pour les changements de sélection
        radioExcel.addEventListener("change", function() {
            if (this.checked) {
                excelForm.style.display = "block";
                manuelForm.style.display = "none";
            }
        });

        radioManuel.addEventListener("change", function() {
            if (this.checked) {
                excelForm.style.display = "none";
                manuelForm.style.display = "block";
            }
        });
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/simplebar.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/moment.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Plugins js -->
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <script src="../plugins/select2/select2.min.js"></script>
    <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="../plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
    <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

    <script src="assets/pages/jquery.forms-advanced.js"></script>




    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>