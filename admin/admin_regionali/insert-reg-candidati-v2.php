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

        <!-- MIO CSS -->
        <link href="assets/css/customModal.css" rel="stylesheet" type="text/css">

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
                            <form class="qualcosa" action="#">
                                <div class="form-group">
                                    <label for="nomepartitoregione">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Inserisci nome" required>
                                </div>
                                <div class="form-group">
                                    <label for="nomepartitoregione">Cognome</label>
                                    <input type="text" class="form-control" id="cognome" name="cognome" placeholder="Inserisci cognome" required>
                                </div>
                                <div class="form-group">
                                    <label for="nomepartitoregione">Voti 1</label>
                                    <input type="text" class="form-control" id="voti_sez_1" name="voti_sez_1" placeholder="Inserisci voti sezione 1" required>
                                </div>
                                <div class="form-group">
                                    <label for="nomepartitoregione">Voti 2</label>
                                    <input type="text" class="form-control" id="voti_sez_2" name="voti_sez_2" placeholder="Inserisci voti sezione 2" required>
                                </div>
                                <div class="form-group">
                                    <label for="nomepartitoregione">Voti 3</label>
                                    <input type="text" class="form-control" id="voti_sez_3" name="voti_sez_3" placeholder="Inserisci voti sezione 3" required>
                                </div>
                                <div class="form-group">
                                    <label for="nomepartitoregione">Voti 4</label>
                                    <input type="text" class="form-control" id="voti_sez_4" name="voti_sez_4" placeholder="Inserisci voti sezione 4" required>
                                </div>
                                <div class="form-group">
                                    <label for="nomepartitoregione">Voti 5</label>
                                    <input type="text" class="form-control" id="voti_sez_5" name="voti_sez_5" placeholder="Inserisci voti sezione 5" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Lista di appartenenza</label>
                                    <select class="form-control" id="lista_appartenenza" required>
                                        <option value="0">Seleziona un partito di provenienza...</option>
                                         <?php
                                            $array=json_decode($obj-> getAllList(),true);
                                            for ($i=0; $i<count($array['liste']); ++$i) {
                                                echo '<option value="'.$array['liste'][$i]['ID_lista'].'">'.$array['liste'][$i]['nome_partito_regione'].'</option>';
                                            }
                                         ?>
                                    </select>                                
                                </div>
                                <button type="submit" class="btn btn-primary">Aggiungi lista</button>
                            </form>         
                        </div>
                    </div>  
                </div>  
            </div>
        </div>
        <!-- page wrapper end -->

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <!-- Modal Successfull-->
        <div class="modal fade successfullModal" id="successfullModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tutto okay</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    La lista è stata aggiunta correttamente. Vedrai sul database la riga corrispondente.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal Fail -->
        <div class="modal fade" id="failModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ahiiaa..è successo qualcosa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    La lista non è stata aggiunta. Per favore, riprova!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                </div>
                </div>
            </div>
        </div>

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

        <script>
            /* COSE DA RICORDARE 
                // il punto serve per osservare le class
                // l'hashtag serve per osservare gli id 
            */


            // Dico quale elemento osservare...
            $('.qualcosa').submit(function (e) {
                e.preventDefault();
                //Si scatena l'evento e viene eseguito questo codice...

                //Prendo i dati
                var nome = $('#nome').val();
                var cognome = $('#cognome').val();
                var voti_sez_1 = $('#voti_sez_1').val();
                var voti_sez_2 = $('#voti_sez_2').val();
                var voti_sez_3 = $('#voti_sez_3').val();
                var voti_sez_4 = $('#voti_sez_4').val();
                var voti_sez_5 = $('#voti_sez_5').val();
                var lista_appartenenza = $('#lista_appartenenza').val();

                //Invio i dati
                $.ajax({
                    type: "POST",
                    url: "admin/php/aggiungi_candidato.php",
                    data: {
                            "nome": nome,
                            "cognome": cognome,
                            "voti_sez_1": voti_sez_1,
                            "voti_sez_2": voti_sez_2,
                            "voti_sez_3": voti_sez_3,
                            "voti_sez_4": voti_sez_4,
                            "voti_sez_5": voti_sez_5,
                            "lista_appartenenza": lista_appartenenza
                        },
                    success: function (response) {
                        $('#successfullModal').modal('show');
                        $('.qualcosa').trigger("reset");
                    },
                    error: function() {
                        $('#failModal').modal('show');
                        $('.qualcosa').trigger("reset");
                    }
                });
            });
        </script>

    </body>

</html>