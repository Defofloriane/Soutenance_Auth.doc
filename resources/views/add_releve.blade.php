
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
                                    <li><a href="{{route('add_releve')}}">Add Releve</a></li>
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
                        <li class="dropdown hide-phone">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
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
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
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
                                                <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">10 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                                <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
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
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-right text-muted pl-2">1 hr ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                            </div>
                                            <div class="media-body align-self-center ml-2 text-truncate">
                                                <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                                <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
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
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
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
                    </ul><!--end topbar-nav-->
        
                    <ul class="list-unstyled topbar-nav mb-0">                        
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li> 
                        <li class="creat-btn">
                            <div class="nav-link">
                                <a class=" btn btn-sm btn-soft-primary" href="#" role="button"><i class="fas fa-plus mr-2"></i>Import Fichier Excel</a>
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
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                            <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                            <span class="" id="Select_date">Jan 11</span>
                                            <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i data-feather="download" class="align-self-center icon-xs"></i>
                                        </a>
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                
                    <div class="row">
                        <div class="col-12">
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
                                           
                                            <div class="col-md-6">
                                                <label class="mb-6">Niveau</label>
                                                <select id="niveau_select" name="niveau" class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" required>
                                                    <option value="">Niveau Scolaire</option>
                                                    <optgroup label="Au Niveau 1">
                                                        <option value="L1">ICT L1</option>
                                                        {{-- <option value="INFO L1">INF0 L1</option>
                                                        <option value="MATHS L1">MATHS L1</option> --}}
                                                    </optgroup>
                                                    <optgroup label="Au Niveau 2">
                                                        <option value="L2">ICT L2</option>
                                                        {{-- <option value="INFO L2">INF0 L2</option>
                                                        <option value="MATHS L2">MATHS L2</option> --}}
                                                    </optgroup>
                                                    <optgroup label="Au Niveau 3">
                                                        <option value="L3">ICT L3</option>
                                                        {{-- <option value="INFO L3">INF0 L3</option>
                                                        <option value="MATHS L3">MATHS L3</option> --}}
                                                    </optgroup>   
                                                </select> 
                                            </div><!-- end col -->   
                                       
                                        <div class="col-md-6">
                                            <label class="mb-3">Anne Academique</label>
                                            <select name="anneeAcamdemique" class="select2 mb-3 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Annee Academique" required>
                                                <optgroup label="Votre Anne Academique">
                                                    <option value="2022/2023">2022/2023</option>
                                                    <option value="2021/2022">2021/2022</option>
                                                    <option value="2020/2021">2020/2021</option>
                                                    <option value="2019/2020">2020/2021</option>
                                                    <option value="2018/2019">2020/2021</option>
                                                    <option value="2017/2018">2020/2021</option>
                                                </optgroup>
                                               
                                            </select> 
                                        </div> <!-- end col -->  
                                        <button id="eltb" class="btn btn-primary mb-3" >Valider le niveau</button>  
                                    </div><!-- end row --> 
                                </form>   
                                    
                                </div><!-- end card-body --> 
                            </div> <!-- end card -->         
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Les Notes d'un Etudiant</h4>
                                            <p class="text-muted mb-0">Les informations suivantes concernent uniquement les procces verbaux de chaque unite d enseignements du  <code class="highlighter-rouge">&lt;CC,SN/RATRAPPAGE ET OU TP&gt;</code>des differentEs
                                                Unites d enseignement<code class="highlighter-rouge">.Choisir au prealable le niveau</code>, et aussi <code class="highlighter-rouge">L'annee Academique</code>.
                                            </p>
                                        </div><!--end card-header-->
                                        <div class="card-body">
                                            @if(isset($resultats))

                                            <form id="hidden_form" method="POST" action="{{ route('add_releve') }}" >
                                                @csrf
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">First name</label>
                                                        <input type="text" class="form-control" id="validationCustom01" name="firstName" placeholder="First name"  required>
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
                                                            <input type="text" class="form-control" id="validationCustom05"  value="{{ $ue->id_ue }}" name="notes[{{ $ue->id_ue }}][code_ue]" required style="font-weight: bold;" >
                                                            <div class="invalid-feedback">
                                                                Please provide a valid state.
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-md-1 mb-1">
                                                            <label for="credit_input">Credit</label>
                                                            <input type="text" class="form-control" id="validationCustom05" value="{{ $ue->credit }}"name="notes[{{ $ue->id_ue }}][credit]"  required style="font-weight: bold;">
                                                            <div class="invalid-feedback">
                                                                Please provide a valid zip.
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-md-2 mb-2">
                                                            <label for="credit_input">Semestre</label>
                                                            <select  id="niveau_select" name="notes[{{ $ue->id_ue }}][semestre]" class="select2 form-control mb-3 custom-select" style="font-weight: bold;" required>
                                                                <option value="" style="font-weight: bold;" >Semestre</option>
                                                                
                                                                    <optgroup label="Le 1er semestre">
                                                                      <option class="option"value="1">Semestre 1</option>
                                                                      <option class="option"value="2">Semestre 2</option>
                                                                    </optgroup>
                                                                    <optgroup label="Le 2ème semestre">
                                                                      <option class="option"value="3">Semestre 3</option>
                                                                      <option class="option"value="4">Semestre 4</option>
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
                                                        <input type="numerics" class="form-control" id="validationCustom05" placeholder="TP" name="notes[{{ $ue->id_ue }}][note_tp]" style="font-weight: bold;" >
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
   
                                                {{-- <button class="btn btn-primary" type="submit">Submit form</button> --}}
                                                
                                                
                                                    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                                                   
                                             </form>

                                            <!--end form-->   
                                         
                                                         
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
        
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Validation Etudiant</h4>
                                            <p class="text-muted mb-0">Verification du nom, prenom et matricule de l etudiant <code class="highlighter-rouge">&lt;Et matricule&gt;</code>s are only 
                                               Afficahe de sa <code class="highlighter-rouge">MGP</code>Moyenne Generale Pondere <code class="highlighter-rouge">/4.00</code>.
                                            </p>
                                        </div><!--end card-header-->
                                        <div class="card-body">
                                           
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationTooltip01">First name</label>
                                                        <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                                                        <div class="valid-tooltip">
                                                            Looks good!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationTooltip02">Last name</label>
                                                        <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                                                        <div class="valid-tooltip">
                                                            Looks good!
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationTooltipUsername">Matricule</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="validationTooltipUsernamePrepend">#000000A</span>
                                                            </div>
                                                            <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Matricule" aria-describedby="validationTooltipUsernamePrepend" required>
                                                           
                                                        </div>
                                                    </div><!--end col-->
                                                </div><!--end form-row-->
        
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationTooltip03">MGP</label>
                                                        <input type="text" class="form-control" id="validationTooltip03" placeholder="MGP" required>
                                                        <div class="invalid-tooltip">
                                                            Please provide a valid city.
                                                        </div>
                                                    </div><!--end col-->
                                                    
                                                </div><!--end form-row-->
                                                {{-- <button class="btn btn-primary" type="submit">Submit form</button> --}}
                                                <form method="POST" action="{{ route('add_releve') }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                                                               
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                            </div><!--end row-->                      
                        </div> <!-- end col -->
                         <!-- end col -->
                    </div> <!-- end row --> 
  
                <!-- end row -->

                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2023 Auth.doc <span class="d-none d-sm-inline-block float-right">Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by KemgneFloriane</span>
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