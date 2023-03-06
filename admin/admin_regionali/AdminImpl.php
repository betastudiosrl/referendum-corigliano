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

    public function getTuttoCandidati(){
        try {
            include '../php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
        
            $sql = "SELECT * FROM regionale_totale_candidati";           
        
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

    public function getAllList() {
        try {
            include '../php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
        
            $sql = "SELECT * FROM liste_regione";           
        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        
            $data = [];
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                $data[] = $row;  
            }
        
            $response         = [];
            $response['liste'] =  $data;
        
            $ritorno = json_encode($response, JSON_PRETTY_PRINT);

            return $ritorno;
        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
        }
    }

    public function insertCandidatoRegionale($nome, $cognome, $voti_sez1, $voti_sez2, $voti_sez3, $voti_sez4, $voti_sez5, $lista_appartenenza){
        if($nome == null || !strlen($nome) > 0)
            throw new InvalidArgumentException("nome == null || !strlen(nome) > 0 ");

        if($cognome == null || !strlen($cognome) > 0)
            throw new InvalidArgumentException("nome == null || !strlen(nome) > 0 ");

        if($voti_sez1 < 0 || $voti_sez1==null)
            throw new InvalidArgumentException("voti_sez1 < 0 || voti_sez1==null ");

        if($voti_sez2 < 0 || $voti_sez2==null)
            throw new InvalidArgumentException("voti_sez2 < 0 || voti_sez2==null ");
        
        if($voti_sez3 < 0 || $voti_sez3==null)
            throw new InvalidArgumentException("voti_sez3 < 0 || voti_sez3==null ");

        if($voti_sez4 < 0 || $voti_sez4==null)
            throw new InvalidArgumentException("voti_sez4 < 0 || voti_sez4==null ");

        if($voti_sez5 < 0 || $voti_sez5==null)
            throw new InvalidArgumentException("voti_sez5 < 0 || voti_sez5==null ");    
        
        if($lista_appartenenza < 0 || $lista_appartenenza==null)
            throw new InvalidArgumentException("lista_appartenenza < 0 || lista_appartenenza==null ");  
        try {
            include '../../php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
        
            $sql = "INSERT INTO regionale_totale_candidati (cognome_candidato, nome_candidato, voti_sezione_1, voti_sezione_2, voti_sezione_3, voti_sezione_4, voti_sezione_5, lista_appartenenza) VALUES ('".$nome."', '".$cognome."' , $voti_sez1, $voti_sez2, $voti_sez3, $voti_sez4, $voti_sez5, $lista_appartenenza)";           
        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
        }
    }
}