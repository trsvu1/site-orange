<?php
	session_start(); 
	require_once("controleur/controleur.class.php"); 
	//instancier la classe controleur : 
	$unControleur = new Controleur();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Site Orange</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.5/dist/bootstrap-table.min.css">
</head>
<body>
<center>
<h1> Site Orange pour la gestion des interventions </h1> 
<br>

<?php

	require_once("controleur/verif-connexion.php");

    if (isset($_SESSION["email"])){
    echo ' <div id="navbar" style="background-color : #f0f0f0 ;">
    <a href="index.php?page=1"> 
    	<img src="images/logo.png" height="100" width="100">
    </a>
    
    <a href="index.php?page=2"> 
    	<img src="images/client_tr.png" height="100" width="100">
    </a>
    
    <a href="index.php?page=3"> 
    	<img src="images/technicien_tr.png" height="100" width="100">
    </a>
    
    <a href="index.php?page=4"> 
    	<img src="images/telephone_tr.png" height="100" width="100">
    </a>
    
    <a href="index.php?page=5"> 
    	<img src="images/intervention_tr.png" height="100" width="100">a
    </a>
    
    <a href="index.php?page=6"> 
    	<img src="images/deconnexion_tr.png" height="100" width="100">
    </a>
    </div>
    ';

	$page = $_GET['page'] ?? 1;
	
	switch ($page) {
		case 1 : require_once ("controleur/home.php"); break;
		case 2 : require_once ("controleur/gestion_clients.php"); break;
		case 3 : require_once ("controleur/gestion_techniciens.php"); break;
		case 4 : require_once ("controleur/gestion_telephones.php"); break;
		case 5 : require_once ("controleur/gestion_interventions.php"); break;
		case 6 : session_destroy(); unset($_SESSION['email']); 
		header("Location: index.php");
		break;
	}
} //fin du if session 
?>

</center>
<div id="footer" style="font-size:smaller ;"></div>
<script>
    fetch('vue/vue_footer.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer').innerHTML = data;
            document.getElementById('footer').style.backgroundColor = '#f0f0f0'; // Fond gris
            document.getElementById('footer').style.padding = '20px';

        });
</script>
</body>
</html>








