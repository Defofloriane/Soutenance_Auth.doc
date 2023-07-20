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
    <link href="assets/css/card.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="mask-icon" href="assets/images/logo-sm.png" color="rgb(36,38,58)">
    <link rel="shortcut icon" href="assets/images/logo-sm.png">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

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



                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            {{-- <span class="">{{ $name }}</span> --}}

                            <img src="assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">

                            <a class="dropdown-item" href="{{ route('signOut') }}"><i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i> Logout</a>
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

                                    </ol>
                                </div>
                                <!--end col-->

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
                <!-- fenetre modal -->
                <div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle">Télécharger l'application mobile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Contenu de la modal -->
                                <p>Pour profiter de cette fonctionnalité, téléchargez notre application mobile puis installer la dans votre mobile</p>
                                <a href="http://192.168.43.108:8000/apk/app-debug.apk" class="btn btn-primary" download="app-debug.apk">Télécharger l'application</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fin -->

                <div class="container">
                    <div class="row" id="ocr_det">





                    </div>
                    <br>
                    <div class="row reduce-spacing" id="scan-details">

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Scan Qr-codw </h4>
                                    <span class="text-muted mb-0">Scan Qr-code here</span>
                                </div>
                                <!--end card-header-->

                                <div class="card-body">
                                    <div class="description wow fadeInLeft">
                                        <div name="reader" id="reader" width="600px"></div>
                                        <form action="{{ route('store') }}" method="post" id="formQr">
                                            @csrf
                                            <input type="hidden" name="data" id="data">
                                        </form>
                                    </div>

                                    <br />
                                    <input class="btn btn-primary" type=button value="Scan Qr-code" onClick="scanner()">
                                    <input type="hidden" name="image" class="image-tag">

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-5">

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Information d'entete du Qr-code</h4>

                                    <div id="info-etu">
                                        <h3>Informations étudiant</h3>
                                        <ul>
                                            <li id="nom"><strong>Nom :</strong> Dupont</li>
                                            <li id="pre"><strong>Prénom :</strong> Jean</li>
                                            <li id="niv"><strong>Niveau :</strong> L3</li>
                                            <li id="mat"><strong>Matricule :</strong> 123456</li>
                                            <li id="fil"><strong>Filière :</strong> Informatique</li>
                                            <li id="num"><strong>Numéro du relevé :</strong> Informatique</li>
                                            <li id="mgp"><strong>Numéro du relevé :</strong> Informatique</li>
                                            <li id="dec"><strong>Numéro du relevé :</strong> Informatique</li>
                                        </ul>
                                    </div>

                                </div>
                                <!--end card-header-->
                                <div class="card-body" id="results">


                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                            <div class="card " id="affirmation">
                                <div class="card-header">
                                    <h4 class="card-title">Les differents resultats de votre releve affirme que:
                                    </h4>
                                    <h3>
                                        <p id="message"></p>
                                    </h3>
                                </div>
                                <!--end card-header-->
                                <div class="card-body">

                                    <form method="POST" action="{{ route('show') }}" id="mon-formulaire" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="id_releve" value="" id="id_releve">
                                        <input type="hidden" name="niveau" value="" id="niveau">
                                        <input type="hidden" name="matricule" value="" id="matricule">
                                        <button class="btn btn-sm btn-soft-primary" type="submit">Voir le releve</button>
                                    </form>

                                    <!-- <form method="POST" action="{{ route('show') }}">
                                            @csrf
                                            <input type="hidden" name="id_releve" value="" id="id_releve">
                                            <button class="btn btn-sm btn-soft-primary" type="submit">Voir le releve</button>
                                        </form> -->

                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>


                        <!--end row-->

                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2023 Auth.doc <span class="d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> ICT4D</span>
                    </footer>
                    <!--end footer-->


                </div>
                <!-- end page content -->
            </div>
            <!-- end page-wrapper -->

            <script>
                document.getElementById('info-etu').style.display = "none";
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
            <script src="../plugins/Auth.doc/jquery.magnific-popup.js"></script>
            <script src="assets/pages/jquery.Auth.doc.init.js"></script>
            <!-- App js -->
            <script src="assets/js/app.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
            </script>
            <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script>
                // $('#result').val('test');
                function onScanSuccess(decodedText, decodedResult) {
                    // alert(decodedText);
                    $('#result').val(decodedText);
                    let id = decodedText;
                    alert(decodedText);
                    html5QrcodeScanner.clear().then(_ => {
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            url: "{{ route('store') }}",
                            method: 'POST',
                            data: {
                                _token: "{{ csrf_token() }}",
                                data: id // Utilisation de "data" au lieu de "qr_code"
                            },
                            success: function(response) {
                                console.log(response);
                                if (response.status == 200) {
                                    document.getElementById("mon-formulaire").style.display = "block";
                                    document.getElementById("info-etu").style.display = "block";
                                    let etudiant = response.data.etudiant;
                                    let releve = response.data.releve;
                                    console.log(etudiant[0]);
                                    const nom = document.getElementById("nom");
                                    const prenom = document.getElementById("pre");
                                    const matricule = document.getElementById("mat");
                                    const niveau = document.getElementById("niv");
                                    const filiere = document.getElementById("fil");
                                    const mgp = document.getElementById("mgp");
                                    const decision = document.getElementById("dec");
                                    const numero = document.getElementById("num");
                                    nom.innerHTML = "<strong>Nom :</strong> " + etudiant.nom;
                                    prenom.innerHTML = "<strong>Prenom :</strong> " + etudiant.prenom;
                                    matricule.innerHTML = "<strong>Matricule:</strong> " + etudiant.matricule;
                                    niveau.innerHTML = "<strong>Niveau :</strong> " + releve.niveau;
                                    filiere.innerHTML = "<strong>Filiere :</strong> " + releve.filiere;
                                    numero.innerHTML = "<strong>Numéro du relevé  :</strong> " + releve.id_releve;
                                    mgp.innerHTML = "<strong>Mgp :</strong> " + releve.mgp;
                                    decision.innerHTML = "<strong>" + releve.decision + "</strong>";
                                    let id_releve = document.getElementById("id_releve");
                                    let niveau_ = document.getElementById("niveau");
                                    let matri = document.getElementById("matricule");
                                    id_releve.value = releve.id_releve;

                                    niveau_.value = releve.niveau;

                                    matri.value = releve.etudiant;

                                    let message = document.getElementById("message");
                                    message.textContent = "Document authentique"
                                    message.style.color = 'green';

                                } else if (response.status == 400) {
                                    let message = document.getElementById("message");
                                    message.style.color = 'red';
                                    message.textContent = "Document non authentique"
                                } else {
                                    alert('error');
                                }

                            }
                        });
                    }).catch(error => {
                        alert('something wrong');
                    });

                }

                function onScanFailure(error) {
                    // handle scan failure, usually better to ignore and keep scanning.
                    // for example:
                    // console.warn(`Code scan error = ${error}`);
                }

                let html5QrcodeScanner = new Html5QrcodeScanner(
                    "reader", {
                        fps: 10,
                        qrbox: {
                            width: 250,
                            height: 250
                        }
                    },
                    /* verbose= */
                    false);
                html5QrcodeScanner.render(onScanSuccess, onScanFailure);

                function scanner() {
                    let html5QrcodeScanner = new Html5QrcodeScanner(
                        "reader", {
                            fps: 10,
                            qrbox: {
                                width: 250,
                                height: 250
                            }
                        },
                        /* verbose= */
                        false);
                    html5QrcodeScanner.render(onScanSuccess, onScanFailure);
                    let message = document.getElementById("message");
                    message.textContent = ""
                    document.getElementById('info-etu').style.display = "none";
                }
            </script>
</body>

</html>