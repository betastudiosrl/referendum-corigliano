<?php
    $nome=$_POST['nome'];
    $cognome=$_POST['cognome'];
    $voti_sez_1=$_POST['voti_sez_1'];
    $voti_sez_2=$_POST['voti_sez_2'];
    $voti_sez_3=$_POST['voti_sez_3'];
    $voti_sez_4=$_POST['voti_sez_4'];
    $voti_sez_5=$_POST['voti_sez_5'];
    $lista_appartenenza=$_POST['lista_appartenenza'];

    require 'class/AdminImpl.php';
    $obj = new AdminImpl();
    $obj-> insertCandidatoRegionale($nome, $cognome, $voti_sez_1, $voti_sez_2, $voti_sez_3, $voti_sez_4, $voti_sez_5, $lista_appartenenza);

    header('location: ../insert-reg-candidati-v1.php');