<?php    


    try 
    {        
        $db = new PDO('mysql:host=localhost;port=3308;charset=utf8;dbname=wazaa', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
       echo "Erreur : " . $e->getMessage() . "<br>";
       echo "N° : " . $e->getCode();
       die("Fin du script");
 }    
 


?>