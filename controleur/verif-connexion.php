<?php
if ( ! isset($_SESSION["email"])){ 
    require_once("vue/vue_connexion.php");
}

if (isset($_POST["Connexion"])){
		$email = $_POST["email"];
		$mdp = $_POST["mdp"];

		//on vérifie dans la BDD - User 
		$unUser = $unControleur->verifConnexion($email, $mdp);
		if ($unUser){
			//enregistrement de la session 
			$_SESSION["nom"] = $unUser["nom"]; 
			$_SESSION["prenom"] = $unUser["prenom"]; 
			$_SESSION["email"] = $unUser["email"];
			$_SESSION["role"] = $unUser["role"]; 
			//actualisation de la page 
			header("Location: index.php?page=1"); 
		} else {
			echo "<br> Veuillez Vérifier vos identifiants."; 
		}
	}
?>