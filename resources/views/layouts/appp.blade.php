<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E-filière</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="/boot1/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>



  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/boot1/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/boot1/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/boot1/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/boot1/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/boot1/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/boot1/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/boot1/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/boot1/assets/css/style.css" rel="stylesheet">
  <style>
    .dropbtn {
      background-color: #46b3e6;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {background-color: #ddd;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: #46b3e6;}
    </style>

    </head>
    <body class="sb-nav-fixed" style="background-color: #e3f2fd;">
        <nav class="sb-topnav navbar navbar-expand navbar-light" style="background-color: #e3f2fd;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{ route('dash') }}">{{ Auth::user()->name }}</a>
            <!-- Sidebar Toggle-->

            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" ><i class="fas fa-bars">MENU</i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->

            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="{{ route('log1') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>logout</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="{{ route('log1') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>




        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion " style="background-color: #e3f2fd;" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>

                           <a class="nav-link" href="{{ route('dash2') }}">
                                <div class="sb-nav-link-icon"></div>
                              BIENVENUE
                            </a>

                            <a class="nav-link" href="{{ route('filiere') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Save filière
                            </a>

                            <a class="nav-link" href="{{ route('debouche') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-project-diagram"></i></div>
                              Debouche
                            </a>

                            <a class="nav-link" href="{{ route('matiere') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                              save matières
                            </a>
                            <a class="nav-link" href="{{ route('dash') }}">
                                <div class="sb-nav-link-icon"> <i class="fas fa-table"> </i></div>
                              Dashboard
                            </a>
                        </div>
                    </div>

                </nav>
            </div>
            <div id="layoutSidenav_content">


                @yield("ente")



                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <script>
                var coun=3;
                function fAddText(){

                    coun+=1
                    html= '\
                    <div class="col-sm-10" id="row'+coun+'">\
                        <input type="text" class="form-control" id="inputText" placeholder="Débouché '+coun+'" name="debouche[]">\
                      </div><br><br> \
                    '
                    var form= document.getElementById('forme1')
                    form.innerHTML+=html
                }
            </script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/boot1/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="/boot1/assets/demo/chart-area-demo.js"></script>
        <script src="/boot1/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="/boot1/js/datatables-simple-demo.js"></script>

    </body>
</html>


