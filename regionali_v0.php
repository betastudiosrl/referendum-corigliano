<!DOCTYPE html>
<html lang="en">

    <head>
        <base href="referendum/">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Agorà TEST v0 - Dati in tempo reale sulle "Elezioni Regionali di Corigliano d'Otranto"</title>
        <meta content="BetaStudio srl presenta 'Agorà', la nuova piattaforma di Live Data Consulting sulle Elezioni Amministrative di Corigliano d'Otranto. A partire da lunedì segui i risultati dello spoglio in diretta sulla nostra piattaforma." name="description" />
        <meta content="BetaStudio srl" name="author" />
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <link rel="stylesheet" href="../plugins/morris/morris.css">

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="../index.php" class="logo">
                            <img src="../assets/images/logo-sm-light.png" alt="" class="logo-small">
                            <img src="../assets/images/logo-light.png" alt="" class="logo-large">
                        </a>
                    </div>

                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">
     
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>
    
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="../index.php"><i class="mdi mdi-home"></i>Dashboard</a>
                            </li>

                            <li class="has-submenu active">
                                <a href="index.php"><i class="mdi mdi-account-multiple-outline"></i>Referendum Costituzionale</a>
                            </li>

                            <li class="has-submenu">
                                <a href="../regionali/index.php"><i class="mdi mdi-table-edit"></i>Elezioni Regionali</a>
                            </li>

                            <li class="has-submenu">
                                <a href="../comunali/index.php"><i class="mdi mdi-clipboard-account"></i>Elezioni Comunali</a>
                            </li>
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

        <!-- page wrapper start -->
        <div class="wrapper">
            <div class="page-title-box">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="state-information d-none d-sm-block">
                            </div>

                            <h4 class="page-title">ELEZIONI REGIONALI | Risultati in tempo reale</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Si vota per il rinnovo del Consiglio Regionale.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- end container-fluid -->
            
            </div>
            <!-- page-title-box -->
            <div class="page-content-wrapper" id="sezioneTotale">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">TOTALE VOTI</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">TOTALE VOTI</h6>
                                            <h3 class="mb-3 mt-0">
                                                3911
                                            </h3>
                                            <div class="">
                                                <span class="ml-2">aggiornato alle ore</span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-account-multiple-outline display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">VOTI VALIDI</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">VOTI VALIDI</h6>
                                            <h3 class="mb-3 mt-0">
                                                3450
                                            </h3>
                                            <div class="">
                                                <span class="ml-2">aggiornato alle ore</span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-package display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">SCHEDE BIANCHE</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">BIANCHE</h6>
                                            <h3 class="mb-3 mt-0">
                                                349
                                            </h3>
                                            <div class="">
                                                <span class="ml-2">aggiornato alle ore </span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-tag-text-outline display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">SCHEDE NULLE</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">NULLE</h6>
                                            <h3 class="mb-3 mt-0">
                                            112
                                            </h3>
                                            <div class="">
                                                <span class="ml-2">aggiornato alle ore </span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-briefcase-check display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="col-lg-12">
                        <div class="">
                            <div class="alert alert-dark" role="alert">
                                <strong> I dati presenti in questa pagina sono definitivi. </strong>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="">
                            <div class="alert alert-dark" role="alert">
                            <strong> Totale Elettori: 4814 <br>
                                Totale Votanti: 3911 <br>
                                Affluenza alle urne: 81.24% <br> </strong>
                            </div>
                        </div>
                    </div>

                    
                <div class="row">
                    <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Risultati Totali Elezioni Regionali</h4>
                                    <p class="text-muted m-b-30">Risultati <strong>definitivi</strong> sul numero voti dei <strong>Candidati Presidenti</strong> delle Elezioni Regionali </p>
    
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive b-0" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table  table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Cand. Presidente</th>
                                                    <th data-priority="1">Sez. 1</th>
                                                    <th data-priority="2">Sez. 2</th>
                                                    <th data-priority="3">Sez. 3</th>
                                                    <th data-priority="4">Sez. 4</th>
                                                    <th data-priority="5">Sez. 5</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
                            <div class="card m-b-20">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Risultati Totali Elezioni Regionali</h4>
                                    <p class="text-muted m-b-30">Risultati <strong>definitivi</strong> sul numero voti dei <strong>Candidati Presidenti</strong> delle Elezioni Regionali </p>
    
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive b-0" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table  table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Cand. Presidente</th>
                                                    <th data-priority="1">Sez. 1</th>
                                                    <th data-priority="2">Sez. 2</th>
                                                    <th data-priority="3">Sez. 3</th>
                                                    <th data-priority="4">Sez. 4</th>
                                                    <th data-priority="5">Sez. 5</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>

                <div class="row">
                    <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Risultati Totali Elezioni Regionali</h4>
                                    <p class="text-muted m-b-30">Risultati <strong>definitivi</strong> sul numero dei voti delle <strong>Liste Candidate </strong>alle Elezioni Regionali.</p>
    
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive b-0" data-pattern="priority-columns" id="sezioneUno">
                                            <table id="tech-companies-1" class="table  table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Cand. Lista</th>
                                                    <th data-priority="1">Sez. 1</th>
                                                    <th data-priority="2">Sez. 2</th>
                                                    <th data-priority="3">Sez. 3</th>
                                                    <th data-priority="4">Sez. 4</th>
                                                    <th data-priority="5">Sez. 5</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
                            <div class="card m-b-20">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Risultati Totali Elezioni Regionali della Lista <strong>PARTITO DEMOCRATICO</strong></h4>
                                    <p class="text-muted m-b-30">Risultati <strong>definitivi </strong>sul numero dei voti per sezione dei <strong>Candidati Consiglieri</strong> alle Elezioni Regionali.</p>
    
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive b-0" data-pattern="priority-columns" id="sezioneUno">
                                            <table id="tech-companies-1" class="table  table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Cand. Consigliere</th>
                                                    <th data-priority="1">Sez. 1</th>
                                                    <th data-priority="2">Sez. 2</th>
                                                    <th data-priority="3">Sez. 3</th>
                                                    <th data-priority="4">Sez. 4</th>
                                                    <th data-priority="5">Sez. 5</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
                            <div class="card m-b-20">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Risultati Totali Elezioni Regionali della Lista <strong>CON EMILIANO</strong></h4>
                                    <p class="text-muted m-b-30">Risultati <strong>definitivi </strong>sul numero dei voti per sezione dei <strong>Candidati Consiglieri</strong> alle Elezioni Regionali.</p>
    
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive b-0" data-pattern="priority-columns" id="sezioneUno">
                                            <table id="tech-companies-1" class="table  table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Cand. Consigliere</th>
                                                    <th data-priority="1">Sez. 1</th>
                                                    <th data-priority="2">Sez. 2</th>
                                                    <th data-priority="3">Sez. 3</th>
                                                    <th data-priority="4">Sez. 4</th>
                                                    <th data-priority="5">Sez. 5</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>



                
               

                </div>
            </div>
                <!-- end container-fluid -->
            </div>
            <!-- end page content-->

        </div>
        <!-- page wrapper end -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                     Copyright ©2020 | Tutti i diritti riservati | Progettato e Sviluppato da <a href="https://www.betastudiodue.it/" target="_blank">BetaStudio srl</a> - P.IVA 03923450757 <br> Sede legale: Via Santi 48, 73022 Corigliano D'Otranto, LE. <br> Tel: 3760288612</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/waves.min.js"></script>

        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Peity JS -->
        <script src="../plugins/peity/jquery.peity.min.js"></script>

        <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael-min.js"></script>

        <script src="../assets/pages/dashboard.js"></script>        

        <!-- App js -->
        <script src="../assets/js/app.js"></script>

    </body>

</html>