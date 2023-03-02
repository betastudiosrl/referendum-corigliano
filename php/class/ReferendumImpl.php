<?php
/* 
*   Copyright 2023 © BetaStudio Software
*   Contatto: info@betastudiosoftware.it
*/

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Referendum.php';

class ReferendumImpl implements Referendum {
    public function totSi() {
        try {
            include 'php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
        
            $sql = "SELECT * FROM votazioni_referendum_1 ref1 WHERE ID_voto=4 UNION ALL SELECT * FROM votazioni_referendum_2 ref2 WHERE ID_voto=4 UNION ALL SELECT * FROM votazioni_referendum_3 ref3 WHERE ID_voto=4 UNION ALL SELECT * FROM votazioni_referendum_4 ref4 WHERE ID_voto=4 UNION ALL SELECT * FROM votazioni_referendum_5 ref5 WHERE ID_voto=4";           
        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $counter=0;
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                ++$counter;
            }
        
            return $counter;
        
        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
        }
    }

    public function totNo() {
        try {
            include 'php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
        
            $sql = "SELECT * FROM votazioni_referendum_1 ref1 WHERE ID_voto=1 UNION ALL SELECT * FROM votazioni_referendum_2 ref2 WHERE ID_voto=1 UNION ALL SELECT * FROM votazioni_referendum_3 ref3 WHERE ID_voto=1 UNION ALL SELECT * FROM votazioni_referendum_4 ref4 WHERE ID_voto=1 UNION ALL SELECT * FROM votazioni_referendum_5 ref5 WHERE ID_voto=1";           
        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $counter=0;
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                ++$counter;
            }
        
            return $counter;
        
        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
        }
    }

    public function totBianche() {
        try {
            include 'php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
        
            $sql = "SELECT * FROM votazioni_referendum_1 ref1 WHERE ID_voto=2 UNION ALL SELECT * FROM votazioni_referendum_2 ref2 WHERE ID_voto=2 UNION ALL SELECT * FROM votazioni_referendum_3 ref3 WHERE ID_voto=2 UNION ALL SELECT * FROM votazioni_referendum_4 ref4 WHERE ID_voto=2 UNION ALL SELECT * FROM votazioni_referendum_5 ref5 WHERE ID_voto=2";           
        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $counter=0;
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                ++$counter;
            }
        
            return $counter;
        
        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
        }
    }

    public function totNulle() {
        try {
            include 'php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
        
            $sql = "SELECT * FROM votazioni_referendum_1 ref1 WHERE ID_voto=3 UNION ALL SELECT * FROM votazioni_referendum_2 ref2 WHERE ID_voto=3 UNION ALL SELECT * FROM votazioni_referendum_3 ref3 WHERE ID_voto=3 UNION ALL SELECT * FROM votazioni_referendum_4 ref4 WHERE ID_voto=3 UNION ALL SELECT * FROM votazioni_referendum_5 ref5 WHERE ID_voto=3";           
        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $counter=0;
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                ++$counter;
            }
        
            return $counter;
        
        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
        }
    }

    public function dataVotiSi() {
        try {
            include 'php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
        
            $sql = "SELECT DATE_FORMAT(ref1.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_1 ref1 WHERE ID_voto=4 UNION ALL SELECT DATE_FORMAT(ref2.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_2 ref2 WHERE ID_voto=4 UNION ALL SELECT DATE_FORMAT(ref3.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_3 ref3 WHERE ID_voto=4 UNION ALL SELECT DATE_FORMAT(ref4.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_4 ref4 WHERE ID_voto=4 UNION ALL SELECT DATE_FORMAT(ref5.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_5 ref5 WHERE ID_voto=4 ORDER BY data_format DESC LIMIT 1";           
        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        
            $data = [];
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                $data[] = $row;  
            }
        
            $response         = [];
            $response['referendum'] =  $data;
        
            $ritorno = json_encode($response, JSON_PRETTY_PRINT);

            return $ritorno;
        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
        }
    }

    public function dataVotiNo() {
        try {
            include 'php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
        
            $sql = "SELECT DATE_FORMAT(ref1.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_1 ref1 WHERE ID_voto=1 UNION ALL SELECT DATE_FORMAT(ref2.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_2 ref2 WHERE ID_voto=1 UNION ALL SELECT DATE_FORMAT(ref3.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_3 ref3 WHERE ID_voto=1 UNION ALL SELECT DATE_FORMAT(ref4.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_4 ref4 WHERE ID_voto=1 UNION ALL SELECT DATE_FORMAT(ref5.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_5 ref5 WHERE ID_voto=1 ORDER BY data_format DESC LIMIT 1 ";           
        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        
            $data = [];
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                $data[] = $row;  
            }
        
            $response         = [];
            $response['referendum'] =  $data;
        
            $ritorno = json_encode($response, JSON_PRETTY_PRINT);

            return $ritorno;
        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
        }
    }

    public function dataVotiBianche() {
        try {
            include 'php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
        
            $sql = "SELECT DATE_FORMAT(ref1.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_1 ref1 WHERE ID_voto=2 UNION ALL SELECT DATE_FORMAT(ref2.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_2 ref2 WHERE ID_voto=2 UNION ALL SELECT DATE_FORMAT(ref3.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_3 ref3 WHERE ID_voto=2 UNION ALL SELECT DATE_FORMAT(ref4.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_4 ref4 WHERE ID_voto=2 UNION ALL SELECT DATE_FORMAT(ref5.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format  FROM votazioni_referendum_5 ref5 WHERE ID_voto=2 ORDER BY data_format DESC LIMIT 1 ";           
        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        
            $data = [];
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                $data[] = $row;  
            }
        
            $response         = [];
            $response['referendum'] =  $data;
        
            $ritorno = json_encode($response, JSON_PRETTY_PRINT);

            return $ritorno;
        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
        }
    }

    public function dataVotiNulle() {
        try {
            include 'php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
        
            $sql = "SELECT DATE_FORMAT(ref1.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_1 ref1 WHERE ID_voto=3 UNION ALL SELECT DATE_FORMAT(ref2.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_2 ref2 WHERE ID_voto=3 UNION ALL SELECT DATE_FORMAT(ref3.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_3 ref3 WHERE ID_voto=3 UNION ALL SELECT DATE_FORMAT(ref4.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format FROM votazioni_referendum_4 ref4 WHERE ID_voto=3 UNION ALL SELECT DATE_FORMAT(ref5.`data_ora_inserimento` , '%d/%m/%y alle ore %H:%i') AS data_format  FROM votazioni_referendum_5 ref5 WHERE ID_voto=3 ORDER BY data_format DESC LIMIT 1";           
        
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        
            $data = [];
        
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                $data[] = $row;  
            }
        
            $response         = [];
            $response['referendum'] =  $data;
        
            $ritorno = json_encode($response, JSON_PRETTY_PRINT);
        
            return $ritorno;
        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
        }
    }

    public function getVoti($num_sezione) {
        if($num_sezione < 0 || $num_sezione==null)
            throw new InvalidArgumentException("num_sezione < 0 || num_sezione==null ");

        try {
            include 'php/pdo_connection.php';
        
            $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   

            /* VOTI SI */
        
            $sql = "SELECT * , COUNT(ID_votazione_referendum) AS si_sez FROM votazioni_referendum_".$num_sezione." WHERE ID_voto=4"; 
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        
            $si_sez=0;

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                $si_sez=$row['si_sez'];
            } 
        
            /* VOTI NO */

            $sql = "SELECT * , COUNT(ID_votazione_referendum) AS no_sez FROM votazioni_referendum_".$num_sezione." WHERE ID_voto=1"; 
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        
            $no_sez=0;

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                $no_sez=$row['no_sez'];
            } 

            /* VOTI BIANCHE */

            $sql = "SELECT * , COUNT(ID_votazione_referendum) AS blank_sez FROM votazioni_referendum_".$num_sezione." WHERE ID_voto=2"; 
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        
            $blank_sez=0;

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                $blank_sez=$row['blank_sez'];
            } 

            /* VOTI NULLE */

            $sql = "SELECT * , COUNT(ID_votazione_referendum) AS nulle_sez FROM votazioni_referendum_".$num_sezione." WHERE ID_voto=3"; 
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        
            $nulle_sez=0;

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                $nulle_sez=$row['nulle_sez'];
            } 

            return array($si_sez,$no_sez,$blank_sez,$nulle_sez);
        } catch (PDOException $e) {
            echo 'Database error. ' . $e->getMessage();
        }
        
    }
}