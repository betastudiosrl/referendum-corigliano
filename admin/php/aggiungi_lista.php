<?php
    $nome_partito=$_POST['nome_partito'];
    $id_presidente=$_POST['id_presidente'];
    $ordinamento=$_POST['ordinamento'];

    require 'class/AdminImpl.php';
    $obj = new AdminImpl();
    $obj-> insertLista($nome_partito, $id_presidente, $ordinamento);

    header('location: ../insert-new-lista.php');