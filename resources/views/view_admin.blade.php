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
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    {{-- <script>
        $(document).ready(function() {
            // Masquer le formulaire par défaut
            $('form#edit-admin').addClass('d-none');
            
            // Afficher le formulaire lorsqu'on clique sur le bouton "Update"
            $('button.update-btn').click(function() {
                $('form#edit-admin').removeClass('d-none');
            });
        });
    </script> --}}
    <!-- srcipt de suppression--->
    <script>
        document.querySelectorAll('[data-confirm]').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var message = this.getAttribute('data-confirm');
                if (confirm(message)) {
                    var form = this.closest('form');
                    form.submit();
                }
            });
        });
    </script>


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
                                                <h4 class="card-title">List Administrator</h4>
                                                <p class="text-muted mb-0">
                                                    The List of different administrators.You can change or Delete an administrator if you have the rigth.
                                                </p>
                                            </div>
                                            <!--end card-header-->

                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th> Name</th>
                                                        <th>Email</th>
                                                        <th>Change</th>
                                                        <th>Delete</th>

                                                    </tr>
                                                </thead>


                                                <tbody>

                                                    @foreach($admins as $admin)
                                                    <tr>
                                                        <td>{{$admin->name}} </td>
                                                        <td> {{$admin->email}}</td>

                                                        <td>
                                                            <form>
                                                                @csrf
                                                                {{-- <button class="edit-button btn-sm btn-soft-primary"  type="submit">Update</button> --}}
                                                                <button class="btn btn-sm btn-soft-primary edit-button" data-admin-id="{{ $admin->id }}">Update</button>


                                                                <!-- Champs du formulaire ici -->
                                                                {{-- <input type="hidden" name="id_releve" value="{{ $releve->id_releve }}"> --}}

                                                            </form>


                                                        </td>

                                                        <td>
                                                            <form method="POST" action="{{ route('admin_delete', $admin->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm btn-soft-danger" type="submit" data-confirm="Are you sure you want to delete this admin?">Delete</button>
                                                            </form>



                                                        </td>

                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                            <button id="eltb" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalEnregistrementEtudiant">Add Administrator</button>
                                            {{-- <form id="edit-form" method="POST" action="{{ route('admin_update', $admin->id) }}" class="d-none"> --}}
                                            @foreach ($admins as $admin)
                                            <form id="edit-form-{{ $admin->id }}" method="POST" action="{{ route('admin_update', $admin->id) }}" class="d-none">

                                                @csrf
                                                @method('PUT')

                                                <div class="form-group">
                                                    <label for="name">Name:</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{ $admin->name }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">Email:</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="{{ $admin->email }}">
                                                </div>

                                                <button class="btn btn-sm btn-soft-primary" data-admin-id="{{ $admin->id }}">Update</button>

                                            </form>
                                            @endforeach



                                            @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                            @endif


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
        <!-- fenetre modal -->
        <div class="modal fade" id="modalEnregistrementEtudiant" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Add administrator</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formEnregistrementEtudiant" action="{{route('customRegistration')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nom">Last name</label>
                                <input type="text" class="form-control" id="nom" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="lieuNaissance">Rule</label>
                                <select class="form-control" id="rule" name="rule" required>
                                    <!-- Options de la liste déroulante -->
                                    <!-- <option value=" "></option> -->
                                    <option value="note ">note administrator</option>
                                    <option value="student">student administrator</option>
                                    <option value="super">super administrator</option>
                                    <!-- Ajoutez d'autres options de règles si nécessaire -->
                                </select>
                            </div>

                            <!-- Boutons "Annuler" et "Enregistrer" inclus dans le formulaire -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <input type="submit" class="btn btn-primary" value="Add">
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
                    class="mdi mdi-heart text-danger"></i> Groupe 6</span> --}}
    </footer>
    <!--end footer-->
    </div>
    <!-- end page content -->
    </div>
    <!-- end page-wrapper -->



    <script>
        const editButtons = document.querySelectorAll('.edit-button');

        editButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const adminId = this.getAttribute('data-admin-id');
                const editForm = document.querySelector(`#edit-form-${adminId}`);
                const formAction = editForm.getAttribute('action');
                const newFormAction = formAction.replace(`${adminId}`, adminId);
                editForm.setAttribute('action', newFormAction);
                editForm.classList.remove('d-none');
            });
        });
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

    <script src="../plugins/leaflet/leaflet.js"></script>
    <script src="../plugins/lightpick/lightpick.js"></script>
    <script src="assets/pages/jquery.profile.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>