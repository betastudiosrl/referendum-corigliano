<?php
    require 'php/class/ComunaliImpl.php';
    $obj = new ComunaliImpl();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Agorà TEST v0 - Dati in tempo reale sulle "Elezioni Regionali di Corigliano d'Otranto"</title>
        <meta content="BetaStudio srl presenta 'Agorà', la nuova piattaforma di Live Data Consulting sulle Elezioni Amministrative di Corigliano d'Otranto. A partire da lunedì segui i risultati dello spoglio in diretta sulla nostra piattaforma." name="description" />
        <meta content="BetaStudio srl" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link rel="stylesheet" href="plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <!-- Navigation Bar-->
        <?php include 'components/header.php'; ?>
        <!-- End Navigation Bar-->

        <!-- page wrapper start -->
        <div class="wrapper">
            <div class="page-title-box">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="state-information d-none d-sm-block">
                            </div>

                            <h4 class="page-title">ELEZIONI COMUNALI | Risultati in tempo reale</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Si vota per il rinnovo del Consiglio Comunale.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- end container-fluid -->
            
            </div>
            <!-- page-title-box -->
            <?php include 'components/Comunali/box_generali_com.php';?>
                    <!-- end row -->
                    <!-- candidati_sindaco.php -->
                    <?php include 'components/Comunali/candidati_sindaco.php';?>
                    <!-- candidati_maggioranza.php -->  
                    <?php include 'components/Comunali/candidati_maggioranza.php';?>
                    <div class="row">
                        <div class="col-12">

                             <!-- candidati_minoranza.php -->  
                             <?php include 'components/Comunali/candidati_minoranza.php';?>
                             <!-- voti_singoli_candidati.php --> 
                             <?php include 'components/Comunali/voti_singoli_candidati.php';?>
                            
                        </div> <!-- end col -->
                    </div>

                </div>
            </div>
                <!-- end container-fluid -->
            </div>
            <!-- end page content-->

        </div>
        <!-- page wrapper end -->

        <br><br>

        <!-- Footer -->
        <?php include 'components/footer.php'; ?>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <script src="plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Peity JS -->
        <script src="plugins/peity/jquery.peity.min.js"></script>

        <script src="plugins/morris/morris.min.js"></script>
        <script src="plugins/raphael/raphael-min.js"></script>

        <script src="assets/pages/dashboard.js"></script>        

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>