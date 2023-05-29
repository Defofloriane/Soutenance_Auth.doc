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
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Auth.doc <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('view_add_releve')}}">Add Releve</a></li>
                                {{-- <li><a href="apps-project-projects.html">Projects</a></li> --}}
    
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
                                    <li class="nav-item"><a class="nav-link" href="{{route('view_admin')}}"><i
                                        class="ti-control-record"></i>List Admin</a></li>
                       
                    </ul>
                </li>

                <hr class="hr-dashed hr-menu">
                <li class="menu-label my-2">olders</li>


                <li>
                    <a href=" {{route('view_etudiant')}}"><i data-feather="layers"
                            class="align-self-center menu-icon"></i><span >List Etudiant</span><span
                            class="badge badge-soft-success menu-arrow">Exemple</span></a>
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
                       
                        <form method="POST" action="{{ route('upload') }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="nav-link">
                                <input class=" btn btn-sm btn-soft-primary"  type="file" name="name_file" id="name_file">
                                <button class=" btn btn-sm btn-soft-primary"  type="submit">upload</button>  
                                
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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Verification</a></li>
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
                            <div class="ocr" onclick="showDownloadLink('lien_telechargement_ocr_app')">
                                <img src="assets/images/ocr1.jpg" alt="OCR Icon">
                                <h4>Scan document with Ocr</h4>
                            </div>
                        </div>
                        <div class="col-one-half">
  
                            <div class="ocr" onclick="showScanForm()">
                                <img src="assets/images/qrscanner.jpg" alt="OCR Icon">
                                <h4>Scan Qr Code</h4>
                              </div>
                        </div>
                        
                    </div>
                    <br>
                    <div class="row reduce-spacing" id="scan-details">
                        <div class="col-one-half">
                          <p class="paragraph serif">The term used
                            for document authentication is: integrity check. Recognized as one of the principles of computer security which consists in determining whether the data has not been altered
                             (by accident or intentionally).Auth.doc will allow us to authenticate the repord card , We can use <span>Ocr (optical character recognition).</span></p>
                          <p class="paragraph serif"></p>
                        </div>
                        <div class="col-one-half">
                          <p class="paragraph serif">In order to uphold these principles,
                            many processes are used, including hash functions, electronic signatures, cryptographic algorithms, etc. Authentication is often associated with integrity checking in order to better strengthen the locks.
                            we can use <span>Qr-code.</span></p>
                          <p class="paragraph serif"> </p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('webcam.capture') }}" id="scan-form" style="display: none;">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Scan Qr-codw </h4>
                                        <span class="text-muted mb-0" >Scan Qr-code here</span>
                                    </div>
                                    <!--end card-header-->
                                   
                                    <div class="card-body">
                                        <div id="my_camera">
                                            <img src="assets/images/small/img-1.jpg" alt="" class="img-fluid"  id="captured-image" onclick="startCamera()"  name="image" >

                                        </div>
                                        {{-- <div id="image-container" >
                                        </div> --}}
                                        <br/>
                                        <input  class="btn btn-primary" type=button value="Scan Qr-code" onClick="take_snapshot()">
                                        <input type="hidden" name="image" class="image-tag">
                                    
                                    </div>
                                 
                                </div>
                            </div>
                            <div class="col-lg-5">                       {{--11111111111111111111111111111 --}}
                                                   
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">Information d entete du Qr-code</h4>
                                                                <p class="text-muted mb-0" >results.</p>
                                                            </div>
                                                            <!--end card-header-->
                                                            <div class="card-body" id="results" >
                                                             
                                                                
                                                            </div>
                                                            <!--end card-body-->
                                                        </div>
                                                        <!--end card-->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">Les differents resultats de votre releve affirme que:</h4>
                                                            
                                                            </div>
                                                            <!--end card-header-->
                                                            <div class="card-body">
                                                                <div class="button-items">
                                                                    <a class="btn btn-outline-primary popup-youtube"
                                                                        href="http://www.youtube.com/watch?v=0O2aH4XLbto">Document?</a>
                                                                    
                                                                </div>
                                                            </div>
                                                            <!--end card-body-->
                                                        </div>
                                                        <!--end card-->
                                                    </div>                   
                            
             
                <!--end row-->

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
  // Afficher la boîte de dialogue avec le lien du site
  alert("Cliquez sur le lien pour télécharger l'application OCR :\n" + link);
}




function showScanForm() {
  // Affichage du formulaire de scan
  document.getElementById("scan-form").style.display = "block";
  document.getElementById("scan-details").style.display = "none";
  document.getElementById("ocr_det").style.display = "none";
  

}

    </script>
<script language="JavaScript">
    var aspectRatio = 1.4142; // A4 paper aspect ratio (width / height)
    var canvasWidth = 490; // set canvas width
    var canvasHeight = Math.round(canvasWidth / aspectRatio) ; // calculate canvas height based on aspect ratio

    Webcam.set({
        width: canvasWidth,
        height: canvasHeight,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
    
    Webcam.attach( '#my_camera' );
    
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }

    
</script>
<script>
 function startCamera() {
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function(stream) {
                var video = document.createElement('video');
                video.srcObject = stream;
                video.play();
                document.getElementById('image-container').replaceChild(video, document.getElementById('captured-image'));
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




</script>
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
