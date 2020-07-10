<?php
function connect_to_database() {
     $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename ="Base_site_rooting";
    
    {
        $pdo=new PDO=("mysql:host=$servername;dbname=$databasename",$unsername,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "la connection c'est faite avec succès";
        return $pdo;
    }
    catch(PDOException $e){
        echo "la connection a échoué:".$e->getMessage();
    }
    
}