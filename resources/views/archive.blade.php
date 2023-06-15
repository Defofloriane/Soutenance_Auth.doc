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
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Auth.doc <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ route('view_add_releve') }}">Add Releve</a></li>
                                {{-- <li><a href="apps-project-projects.html">Projects</a></li> --}}

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
                <a href=" {{ route('faculte') }}"><i data-feather="layers"
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



                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            {{-- <span class="">{{ $name }}</span> --}}

                            <img src="assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">

                            <a class="dropdown-item" href="{{ route('signOut') }}"><i data-feather="power"
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

                        <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="nav-link">
                                <input class=" btn btn-sm btn-soft-primary" type="file" name="name_file"
                                    id="name_file">
                                <button class=" btn btn-sm btn-soft-primary" type="submit">upload</button>

                            </div>

                        </form>

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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Verification</a>
                                        </li>
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


                <div class="container">
                    <div class="row" id="ocr_det">

                        <div class="col-one-half">
                            <div class="col-one-half">
                                <div class="ocr" onclick="showDownloadLink('http://127.0.0.1:8000/index')">
                                    <img src="assets/images/ocr1.jpg" alt="OCR Icon">
                                    <h4>Scan document with Ocr</h4>
                                </div>
                            </div>
                            <div class="modal fade" id="downloadModal" tabindex="-1" role="dialog"
                                aria-labelledby="downloadModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="downloadModalLabel">Télécharger l'application
                                                Mobile <span> Auth.doc </span></h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Cliquez sur le lien pour télécharger l'application mobile pour Use l ocr
                                                :</p>
                                            <p id="downloadLink"><a id="downloadHref" href="#"
                                                    target="_blank"></a></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-one-half">

                            <div class="ocr" onclick="showScanForm()">
                                <img src="assets/images/qrscanner.jpg" alt="OCR Icon">
                                <h4>Scan Qr Code</h4>
                            </div>
                        </div> --}}
                        <div class="col-one-half">
                            <div class="ocr" onclick="showScanForm()">
                                <img src="media/content/rel1.jpeg" alt="OCR Icon">
                                <h4>Archiver un Releve</h4>
                                <?php if (isset($DataSend['message'])) : ?>
                                <p><?php echo $DataSend['message']; ?></p>
                                <?php endif; ?>

                                <!-- Bouton pour afficher le relevé correspondant -->
                                <?php if (isset($DataSend['releve'])) : ?>
                                <a href="{{ route('details', ['DataSend' => $DataSend]) }}" class="btn">Voir le
                                    relevé</a>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="row reduce-spacing" id="scan-details">
                        <div class="col-one-half">
                            <p class="paragraph serif">The term used
                                for document authentication is: integrity check. Recognized as one of the principles of
                                computer security which consists in determining whether the data has not been altered
                                (by accident or intentionally).Auth.doc will allow us to authenticate the repord card ,
                                We can use <span>Ocr (optical character recognition).</span></p>
                            <p class="paragraph serif"></p>
                        </div>
                        <div class="col-one-half">
                            <p class="paragraph serif">In order to uphold these principles,
                                many processes are used, including hash functions, electronic signatures, cryptographic
                                algorithms, etc. Authentication is often associated with integrity checking in order to
                                better strengthen the locks.
                                we can use <span>Qr-code.</span></p>
                            <p class="paragraph serif"> </p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('webcam.capture') }}" id="scan-form"
                        style="display: none;">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header"> 
                                        <h4 class="card-title">Open Mobile Application </h4>
                                        <span class="text-muted mb-0">And Inter Your information of Login</span>
                                    </div>
                                    <!--end card-header-->

                                    <div class="card-body">
                                        <div class="description wow fadeInLeft">
        
                                            <form action="{{ route('store') }}" method="post" id="form">
                                                @csrf
                                                <input type="hidden" name="data" id="data">
                                            </form>
                                        </div>
                       
                                        <br />
                                 

                                        <input class="btn btn-primary" type=button value="Archiver"
                                            onClick="take_snapshot()">
                                        <input type="hidden" name="image" class="image-tag">
                                    </div>

                                </div>
                            </div>


                        </div><!-- container -->

                        <footer class="footer text-center text-sm-left">
                            &copy; 2023 Auth.doc <span class="d-none d-sm-inline-block float-right">Crafted with <i
                                    class="mdi mdi-heart text-danger"></i> by KemgneFloriane</span>
                        </footer>
                        <!--end footer-->
                </div>
                <!-- end page content -->
            </div>
            <!-- end page-wrapper -->

            <script>
                function showDownloadLink(link) {
                    // Afficher le lien de téléchargement dans la boîte de dialogue modale
                    var downloadLinkElement = document.getElementById("downloadHref");
                    downloadLinkElement.innerText = link;
                    downloadLinkElement.href = link;
                    $('#downloadModal').modal('show');
                }






                function showScanForm() {
                    // Affichage du formulaire de scan
                    document.getElementById("scan-form").style.display = "block";
                    document.getElementById("scan-details").style.display = "none";
                    document.getElementById("ocr_det").style.display = "none";


                }
            </script>
            <!-- <script language="JavaScript">
                var aspectRatio = 1.4142; // A4 paper aspect ratio (width / height)
                var canvasWidth = 490; // set canvas width
                var canvasHeight = Math.round(canvasWidth / aspectRatio); // calculate canvas height based on aspect ratio

                Webcam.set({
                    width: canvasWidth,
                    height: canvasHeight,
                    image_format: 'jpeg',
                    jpeg_quality: 90
                });

                Webcam.attach('#my_camera');

                function take_snapshot() {
                    Webcam.snap(function(data_uri) {
                        $(".image-tag").val(data_uri);
                        document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
                    });
                }
            </script> -->
            <!-- <script>
                function startCamera() {
                    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                        navigator.mediaDevices.getUserMedia({
                                video: true
                            })
                            .then(function(stream) {
                                var video = document.createElement('video');
                                video.srcObject = stream;
                                video.play();
                                document.getElementById('image-container').replaceChild(video, document.getElementById(
                                    'captured-image'));
                            })
                            .catch(function(error) {
                                console.log('Error: ', error);
                            });
                    }
                }

                function captureImage() {
                    var video = document.querySelector('video');
                    var canvas = document.createElement('canvas');
                    canvas.width = video.videoWidth;
                    canvas.height = video.videoHeight;
                    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
                    var dataUrl = canvas.toDataURL('images/jpeg');
                    document.getElementById('captured-image-data').value = dataUrl;
                    video.parentNode.replaceChild(document.getElementById('captured-image'), video);
                }
            </script> -->
            <script src="assets/js/jquery-3.3.1.min.js"></script>
            <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
            </script>
            <script src="assets/js/jquery.backstretch.min.js"></script>
            <script src="assets/js/wow.min.js"></script>
            <script src="assets/js/jquery.waypoints.min.js"></script>
            <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="assets/js/scripts.js"></script>
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
            </script>
            <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
            <script>
                function onScanSuccess(decodedText, decodedResult) {
                    // console.log(`Code matched = ${decodedText}`, decodedResult);
                    document.getElementById('data').value = decodedText;
                    document.getElementById('form').submit();
                    alert(decodedText);
                }

                function onScanFailure(error) {

                    console.warn(`Code scan error = ${error}`);
                }

                let html5QrcodeScanner = new Html5QrcodeScanner(
                    "reader", {
                        fps: 10,
                        qrbox: {
                            width: 250,
                            height: 250
                        }
                    },
                    false);
                html5QrcodeScanner.render(onScanSuccess, onScanFailure);
            </script>
</body>

</html>
