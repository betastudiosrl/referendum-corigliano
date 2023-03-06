<?php

/* 
*   Copyright 2023 © BetaStudio Software
*   Contatto: info@betastudiosoftware.it
*/

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Admin.php';

class AdminImpl implements Admin {
    public function insertLista($nome_lista, $id_candidato_presidente, $ordinamento) {
        if($nome_lista == null || !strlen($nome_lista) > 0)
            throw new InvalidArgumentException("nome_lista == null || !strlen(nome_lista) > 0 ");

        if($id_candidato_presidente < 0 || $id_candidato_presidente==null)
            throw new InvalidArgumentException("id_candidato_presidente < 0 || id_candidato_presidente==null ");

        if($ordinamento < 0 || $ordinamento==null)
            throw new InvalidArgumentException("ordinamento < 0 || ordinamento==null ");

        try {
            include '../../php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
        
            $sql = "INSERT INTO liste_regione (nome_partito_regione, candidato_presidente, ordinamento) VALUES ('".$nome_lista."', $id_candidato_presidente , $ordinamento)";           
        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
        }
    }

    public function getTuttoPresidente(){
        try {
            include '../php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
        
            $sql = "SELECT * FROM regionale_totale_presidenti";           
        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        
            $data = [];
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                $data[] = $row;  
            }
        
            $response         = [];
            $response['regionali'] =  $data;
        
            $ritorno = json_encode($response, JSON_PRETTY_PRINT);

            return $ritorno;
        
        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
        }

    }
}