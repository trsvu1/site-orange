<br>
<h2> Gestion des interventions </h2>


<?php
	$lesTechniciens = $unControleur->selectAllTechniciens (""); 
	$lesTelephones = $unControleur->selectAllTelephones ("");
	require_once ("vue/vue_insert_intervention.php");

	require_once ("vue/vue_select_interventions.php");

?>