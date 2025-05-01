<br>
<h2> Gestion des techniciens </h2>

<?php
if(isset($_SESSION['role']) && $_SESSION['role']=="admin") {
	$leTechnicien = null; 
	if (isset($_GET['action']) && isset($_GET['idtechnicien'])){
		$action = $_GET['action']; 
		$idtechnicien = $_GET['idtechnicien']; 
		switch ($action) {
			case 'sup':
				$unControleur->deleteTechnicien($idtechnicien); 
				break;
			case 'edit':
				$leTechnicien = $unControleur->selectWhereTechnicien($idtechnicien); 
				break;
		}
	}

	require_once ("vue/vue_insert_technicien.php");
	if (isset($_POST["Valider"])){
		//insertion des données dans la base 
		$unControleur->insertTechnicien($_POST);
		echo " <br> Insertion réussie.";
	}

	if (isset($_POST["Modifier"])){
		//update des données dans la base 
		$unControleur->updateTechnicien($_POST);
		//actualiser la page 
		header("Location: index.php?page=3");
	}

}
	//recuperation des techniciens de la base de données 
	if(isset($_POST['Filtrer'])){
		$filtre = $_POST['filtre'];
	}else {
		$filtre = ""; 
	}
	$lesTechniciens = $unControleur->selectAllTechniciens($filtre);
	require_once ("vue/vue_select_techniciens.php");

?>











