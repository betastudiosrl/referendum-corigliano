<?php 

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    require 'Regionali.php';

    class RegionaliImpl implements Regionali {

        public function getTuttoPresidente(){

            try {
                include 'php/pdo_connection.php';
            
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

        public function getTuttoLista() {
            try {
                include 'php/pdo_connection.php';
            
                $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
            
                $sql = "SELECT * FROM regionale_totale_liste";           
            
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
                include 'php/pdo_connection.php';
            
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

        public function getCandidati($id_lista_appartenenza) {
            if($id_lista_appartenenza < 0 || $id_lista_appartenenza==null)
                throw new InvalidArgumentException("id_lista_appartenenza < 0 || id_lista_appartenenza==null ");

            try {
                include 'php/pdo_connection.php';
            
                $pdo = new PDO('mysql:host=' . $database_host . '; dbname=' . $database_name, $database_user, $database_password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);   
            
                $sql = "SELECT * FROM regionale_totale_candidati WHERE lista_appartenenza=$id_lista_appartenenza ORDER BY cognome_candidato ASC";           
            
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
            
                $data = [];
            
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
                    $data[] = $row;  
                }
            
                $response         = [];
                $response['candidati_per_lista'] =  $data;
            
                $ritorno = json_encode($response, JSON_PRETTY_PRINT);

                return $ritorno;
            } catch (PDOException $e) {
                echo 'Database error. ' . $e->getMessage();
            }
        }

        public function sommaVotiSezioni($voti_sez1, $voti_sez2, $voti_sez3, $voti_sez4, $voti_sez5) {
            return $voti_sez1+$voti_sez2+$voti_sez3+$voti_sez4+$voti_sez5;
        }
    }
?>