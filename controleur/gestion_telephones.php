<br>
<h2> Gestion des téléphones </h2>


<?php

	//on récupere les clients de la base pour les affichers dans le select
	$lesClients = $unControleur->selectAllClients (""); 
	require_once ("vue/vue_insert_telephone.php");


	$lesTelephones = $unControleur->selectAllTelephones ("");
	require_once ("vue/vue_select_telephones.php");

?>
