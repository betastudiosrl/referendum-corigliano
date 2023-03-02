<?php
/* 
*   Copyright 2023 © BetaStudio Software
*   Contatto: info@betastudiosoftware.it
*/

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Comunali.php';

class ComunaliImpl implements Comunali 
{
    public function getAllListe()
    {
        try {
            include 'php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
        
            $sql = "SELECT * FROM liste";           
        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $data = [];
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                $data[] = $row;  
            }
        
            $response         = [];
            $response['all_liste'] =  $data;
        
            $ritorno = json_encode($response, JSON_PRETTY_PRINT);

            return $ritorno;
        } catch (PDOException $e) 
        {
            echo 'Database error. ' . $e->getMessage();
        }
    }
    public function getCandidati($id_lista_appartenenza)
    {
        if($id_lista_appartenenza< 0 || $id_lista_appartenenza==null)
            throw new InvalidArgumentException("id_lista_appartenenza< 0 || id_lista_appartenenza ");

        try 
        {
            include 'php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   

            
        
            $sql = "SELECT * FROM comunale_totale_candidati WHERE lista_appartenenza=$id_lista_appartenenza"; 
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute();  

            $data = [];
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                $data[] = $row;  
            }
        
            $response         = [];
            $response['all_candidati'] =  $data;
        
            $ritorno = json_encode($response, JSON_PRETTY_PRINT);

            return $ritorno;

        }
        catch (PDOException $e) 
        {
            echo 'Database error. ' . $e->getMessage();
        }
    }
}