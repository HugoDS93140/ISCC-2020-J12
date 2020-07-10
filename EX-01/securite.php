<?php
 
include_once("singelton.php");
$pdo= connect_to_database();


session_start();



if(isset($_POST["password"])&&isset($_POST["name"])){
$hds= $_POST["name"];
$sql= "SELECT * FROM utilisateurs WHERE Login='$klh'";
$stmt= $pdo->query($sql);
$users= $stmt->fetch();
      var_dump($users);
    $_SESSION ["id"] = $_POST["name"];
else {
    echo "Mauvais couple identifiant / Mot de passe";
}

?>
<ul id="nav">
    
<li><a href="connexion.php">Page de Connexion</a></li>