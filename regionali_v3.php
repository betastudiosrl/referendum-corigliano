<?php
    require 'php/class/RegionaliImpl.php';
    $obj = new RegionaliImpl();
?>
<?php
// per visualizzazione degli errori

//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);

// Per le date...

/*
SELECT DATE_FORMAT(ref1.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format 
FROM votazioni_referendum_1 ref1
WHERE ...
ORDER BY data_format DESC
LIMIT 1 
*/


/*
COSE DA RICORDARE

    include : inclusione della connessione
    echo    : stampa (equivalente di System.out.println() )

    mysqli_query() : Esegue una query ARGS($conn , query preparata prima)
    mysqli_num_rows() : prende una tab ris e conta il numero di righe ARGS(tab ris)
    mysqli_fetch_array() : converte righe di una tab ris in array ARGS(tab ris)

    array('','');

    '.$array.' Concatenazione di stringhe in un echo

*/ 

    // Connessione al database...
    //include 'connessione_db.php';

    /* Estrazione dei dati */

        // Preparazione della query
        //  $query="SELECT * FROM votazioni_referendum_1 WHERE ID_voto=4";

        // Esecuzione della query
        //   $tab_ris=mysqli_query($conn,$query); //dati

        // Conta numero righe della tabella risultato
        //   echo $n=mysqli_num_rows($tab_ris); // n = 610

        //Scorro la tabella risultato da 0:n
        /*  
            for($i=0; $i<$n; ++$i) {
                //Converto in array la tabella risultato
                $array=mysqli_fetch_array($tab_ris);

                echo $array['data_ora_inserimento'];
                echo '<br>';

            }
        */

/*
SELECT DATE_FORMAT(ref1.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format 
FROM votazioni_referendum_1 ref1
WHERE ID_voto=4
ORDER BY data_format DESC
LIMIT 1 

*/
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <base href="referendum/">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Agor?? TEST v3 - Dati in tempo reale sulle "Elezioni Regionali di Corigliano d'Otranto"</title>
        <meta content="BetaStudio srl presenta 'Agor??', la nuova piattaforma di Live Data Consulting sulle Elezioni Amministrative di Corigliano d'Otranto. A partire da luned?? segui i risultati dello spoglio in diretta sulla nostra piattaforma." name="description" />
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

                            <li class="has-submenu">
                                <a href="index.php"><i class="mdi mdi-account-multiple-outline"></i>Referendum Costituzionale</a>
                            </li>

                            <li class="has-submenu active">
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
                                                    <th data-priority="6">Tot Voti</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $n=json_decode($obj-> getTuttoPresidente(),true);
                                                    for ($i=0; $i<count($n['regionali']); ++$i) {
                                                        echo '<tr> 
                                                        <td>'.$n['regionali'][$i]['nome_cognome_presidente'].'</td>
                                                        <td> '.$n['regionali'][$i]['voti_sezione_1'].'</td>
                                                        <td> '.$n['regionali'][$i]['voti_sezione_2'].'</td>
                                                        <td> '.$n['regionali'][$i]['voti_sezione_3'].'</td>
                                                        <td> '.$n['regionali'][$i]['voti_sezione_4'].'</td>
                                                        <td> '.$n['regionali'][$i]['voti_sezione_5'].'</td>
                                                        <td> '.$obj->sommaVotiSezioni($n['regionali'][$i]['voti_sezione_1'],$n['regionali'][$i]['voti_sezione_2'],$n['regionali'][$i]['voti_sezione_3'],$n['regionali'][$i]['voti_sezione_4'],$n['regionali'][$i]['voti_sezione_5']).'</td>
                                                    </tr>';
                                                    }
                                                    ?>
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
                                                    <th data-priority="6">Tot Voti</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                    $n=json_decode($obj-> getTuttoLista(),true);
                                                    for ($i=0; $i<count($n['regionali']); ++$i) {
                                                        echo '<tr> 
                                                        <td>'.$n['regionali'][$i]['nome_lista'].'</td>
                                                        <td> '.$n['regionali'][$i]['voti_sezione_1'].'</td>
                                                        <td> '.$n['regionali'][$i]['voti_sezione_2'].'</td>
                                                        <td> '.$n['regionali'][$i]['voti_sezione_3'].'</td>
                                                        <td> '.$n['regionali'][$i]['voti_sezione_4'].'</td>
                                                        <td> '.$n['regionali'][$i]['voti_sezione_5'].'</td>
                                                        <td> '.$obj->sommaVotiSezioni($n['regionali'][$i]['voti_sezione_1'],$n['regionali'][$i]['voti_sezione_2'],$n['regionali'][$i]['voti_sezione_3'],$n['regionali'][$i]['voti_sezione_4'],$n['regionali'][$i]['voti_sezione_5']).'</td>
                                                    </tr>';
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
                            <?php
                                $n=json_decode($obj-> getAllList(),true);
                                for ($i=0; $i<count($n['liste']); ++$i) {
                                    $id_lista=$n['liste'][$i]['ID_lista'];
                                    echo '<div class="card m-b-20">
                                            <div class="card-body">
                                                <h4 class="mt-0 header-title">Risultati Totali Elezioni Regionali della Lista <strong>'.$n['liste'][$i]['nome_partito_regione'].'</strong></h4>
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
                                                                <th data-priority="6">Tot Voti</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>';
                                                            $candidati=json_decode($obj-> getCandidati($id_lista),true);
                                                            for($j=0;$j<count($candidati['candidati_per_lista']);++$j) {
                                                                echo'<tr> 
                                                                        <td>'.$candidati['candidati_per_lista'][$j]['cognome_candidato'].' '.$candidati['candidati_per_lista'][$j]['nome_candidato'].'</td>
                                                                        <td> '.$candidati['candidati_per_lista'][$j]['voti_sezione_1'].'</td>
                                                                        <td> '.$candidati['candidati_per_lista'][$j]['voti_sezione_2'].'</td>
                                                                        <td> '.$candidati['candidati_per_lista'][$j]['voti_sezione_3'].'</td>
                                                                        <td> '.$candidati['candidati_per_lista'][$j]['voti_sezione_4'].'</td>
                                                                        <td> '.$candidati['candidati_per_lista'][$j]['voti_sezione_5'].'</td>
                                                                        <td> '.$obj->sommaVotiSezioni($candidati['candidati_per_lista'][$j]['voti_sezione_1'],$candidati['candidati_per_lista'][$j]['voti_sezione_2'],$candidati['candidati_per_lista'][$j]['voti_sezione_3'],$candidati['candidati_per_lista'][$j]['voti_sezione_4'],$candidati['candidati_per_lista'][$j]['voti_sezione_5']).'</td>
                                                                    </tr>';
                                                            }
                                                            echo '</tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';     
                                }
                            ?>
                            <br></br>
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
                     Copyright ??2020 | Tutti i diritti riservati | Progettato e Sviluppato da <a href="https://www.betastudiodue.it/" target="_blank">BetaStudio srl</a> - P.IVA 03923450757 <br> Sede legale: Via Santi 48, 73022 Corigliano D'Otranto, LE. <br> Tel: 3760288612</span>
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