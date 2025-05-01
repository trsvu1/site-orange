<br>
<h2> Gestion des clients </h2>

<?php
if(isset($_SESSION['role']) && $_SESSION['role']=="admin") {
	$leClient = null; 
	if (isset($_GET['action']) && isset($_GET['idclient'])){
		$action = $_GET['action']; 
		$idclient = $_GET['idclient']; 
		switch ($action) {
			case 'sup':
				$unControleur->deleteClient($idclient); 
				break;
			case 'edit':
				$leClient = $unControleur->selectWhereClient($idclient); 
				break;
		}
	}

	require_once ("vue/vue_insert_client.php");
	if (isset($_POST["Valider"])){
		//insertion des données dans la base 
		$unControleur->insertClient($_POST);
		echo " <br> Insertion réussie.";
	}

	if (isset($_POST["Modifier"])){
		//update des données dans la base 
		$unControleur->updateClient($_POST);
		//actualiser la page 
		header("Location: index.php?page=2");
	}
}

	//recuperation des clients de la base de données 
	if(isset($_POST['Filtrer'])){
		$filtre = $_POST['filtre'];
	}else {
		$filtre = ""; 
	}
	$lesClients = $unControleur->selectAllClients($filtre);
	require_once ("vue/vue_select_clients.php");

?>











