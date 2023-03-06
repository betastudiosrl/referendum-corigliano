<?php
/* COSE DA RICORDARE - PARTE AMMINISTRATORE 

    INSERT INTO nome_tab (campo1, campo2, campo3)
    VALUES (valore1, valore2, valore3)

*/
    require 'php/class/AdminImpl.php';
    $obj = new AdminImpl();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <base href="../">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Agorà ADMIN TEST v1 - Dati in tempo reale sulle "Elezioni Referendum Costituzionale di Corigliano d'Otranto"</title>
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
        <?php //include '../components/header.php'; ?>
        <!-- End Navigation Bar-->

        <!-- page wrapper start -->
        <div class="wrapper">
         
            <!-- page-title-box -->
            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="admin/php/aggiungi_lista.php" method="POST">
                                <div class="form-group">
                                    <label for="nomepartitoregione">Nome partito regione</label>
                                    <input type="text" class="form-control" id="nomepartitoregione" name="nome_partito" placeholder="Inserisci nome partito regione" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Presidente candidato regione</label>
                                    <select class="form-control" name="id_presidente" required>
                                        <option value="0">Seleziona un presidente candidato...</option>
                                         <?php
                                            $array=json_decode($obj-> getTuttoPresidente(),true);
                                            for ($i=0; $i<count($array['regionali']); ++$i) {
                                                echo '<option value="'.$array['regionali'][$i]['ID_candidato'].'">'.$array['regionali'][$i]['nome_cognome_presidente'].'</option>';
                                            }
                                         ?>
                                    </select>                                
                                </div>
                                <div class="form-group">
                                    <label for="ordinamento">Ordinamento</label>
                                    <input type="text" class="form-control" id="ordinamento" name="ordinamento" placeholder="Inserisci ordinamento" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Aggiungi lista</button>
                            </form>         
                        </div>
                    </div>  
                </div>  
            </div>
        </div>
        <!-- page wrapper end -->

        <!-- Footer -->
        <?php include '../components/footer.php'; ?>
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