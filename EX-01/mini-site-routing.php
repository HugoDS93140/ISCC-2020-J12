<html>

<head>
    <titre>mini-site-routing</titre>
</head>
    
<header>
    
<a href="http://localhost:8888/ISCC-2020-J09/EX-01/mini-site-routing.php?page=1">Page Accueil</a>   
<a href="http://localhost:8888/ISCC-2020-J09/EX-01/mini-site-routing.php?page=2">Page2</a>  
<a href="http://localhost:8888/ISCC-2020-J09/EX-01/mini-site-routing.php?page=3">Page3</a>  
<a href="http://localhost:8888/ISCC-2020-J09/EX-01/connexion.php?page=connexion">connexion</a> 

    
<h1>  Bienvenue sur la page 

 <?php  
     if ($_GET['page']=="1") { 
     echo"Accueil";
     }
    if ($_GET['page']=="4") { 
     echo"Connexion";
     } 
     else {
         echo $_GET['page'];
     }
     ?> 
</h1>
</header>
   
</html>