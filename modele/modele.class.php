<?php
class Modele {
	private $unPdo ; 
	//connexion via la classe PDO : PHP DATA Object 

	public function __construct(){
		$serveur = "localhost:8889"; 
		$bdd = "orange_25_Slam2A"; 
		$user = "root";
		$mdp = "root"; 
		try{
		$this->unPdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user, $mdp);
		}
		catch(PDOException $exp){
			echo "Erreur de connexion à la BDD";
		}
	}
	/********* Gestion des users ****************/
	public function verifConnexion ($email, $mdp){
		$requete = "select * from user where email =:email and mdp =:mdp ;"; 
		$exec = $this->unPdo->prepare ($requete);
		$donnees = array(":email"=>$email, ":mdp"=>$mdp);
		$exec->execute ($donnees);
		return $exec->fetch(); 
	}
	
	/**************** Gestion des clients ************/
	public function insertClient($tab){
		$requete = "insert into client values (null, :nom, :prenom, :adresse, :email, :tel);";
		$donnees = array(':nom' => $tab['nom'],
						 ':prenom' => $tab['prenom'],
						 ':adresse' => $tab['adresse'],
						 ':email' => $tab['email'],
						 ':tel' => $tab['telephone']
						); 
		//on prépare la requete 
		$exec = $this->unPdo->prepare ($requete);
		//exécuter la requete 
		$exec->execute ($donnees);
	}
	public function selectAllClients ($filtre){
		if ($filtre == ""){
				$requete = "select * from client ;" ; 
				$exec = $this->unPdo->prepare ($requete);
				$exec->execute ();
		} else{
				$requete = "select * from client where nom like :filtre or prenom like :filtre or adresse like :filtre or email like :filtre or tel like :filtre ; " ;
				$donnees = array(":filtre"=>"%".$filtre."%");
				$exec = $this->unPdo->prepare ($requete);
				$exec->execute ($donnees);
		}
		
		return $exec->fetchAll(); //extraire tous les clients
	}

	public function deleteClient($idClient){
		$requete = "delete from client where idclient = :idclient;"; 
		$donnees = array(":idclient"=>$idClient); 
		$exec = $this->unPdo->prepare ($requete);
		$exec->execute ($donnees);
	}

	public function updateClient ($tab){
		$requete ="update client set nom= :nom, prenom=:prenom, adresse =:adresse, email =:email, tel =:tel where idclient =:idclient ;"; 
		$donnees = array(
						 ':idclient' => $tab['idclient'],
						 ':nom' => $tab['nom'],
						 ':prenom' => $tab['prenom'],
						 ':adresse' => $tab['adresse'],
						 ':email' => $tab['email'],
						 ':tel' => $tab['telephone']
						); 
		$exec = $this->unPdo->prepare ($requete);
		$exec->execute ($donnees);
	}
	public function selectWhereClient($idClient){
		$requete = "select * from client where idclient = :idclient";
		$donnees = array(":idclient"=>$idClient); 
		$exec = $this->unPdo->prepare ($requete);
		$exec->execute ($donnees);
		$unClient = $exec->fetch(); //extraire un seul client.
		return $unClient ;
	}


	/**************** Gestion des techniciens ************/
	public function insertTechnicien($tab){
		$requete = "insert into technicien values (null, :nom, :prenom, :specialite, :email, :tel);";
		$donnees = array(':nom' => $tab['nom'],
						 ':prenom' => $tab['prenom'],
						 ':specialite' => $tab['specialite'],
						 ':email' => $tab['email'],
						 ':tel' => $tab['telephone']
						); 
		//on prépare la requete 
		$exec = $this->unPdo->prepare ($requete);
		//exécuter la requete 
		$exec->execute ($donnees);
	}
	public function selectAllTechniciens ($filtre){
		if ($filtre == ""){
				$requete = "select * from technicien ;" ; 
				$exec = $this->unPdo->prepare ($requete);
				$exec->execute ();
		} else{
				$requete = "select * from technicien where nom like :filtre or prenom like :filtre or specialite like :filtre or email like :filtre or tel like :filtre ; " ;
				$donnees = array(":filtre"=>"%".$filtre."%");
				$exec = $this->unPdo->prepare ($requete);
				$exec->execute ($donnees);
		}
		
		return $exec->fetchAll(); //extraire tous les clients
	}

	public function deleteTechnicien($idTechnicien){
		$requete = "delete from technicien where idtechnicien = :idtechnicien;"; 
		$donnees = array(":idtechnicien"=>$idTechnicien); 
		$exec = $this->unPdo->prepare ($requete);
		$exec->execute ($donnees);
	}

	public function updateTechnicien ($tab){
		$requete ="update technicien set nom= :nom, prenom=:prenom, specialite =:specialite, email =:email, tel =:tel where idtechnicien =:idtechnicien ;"; 
		$donnees = array(
						 ':idtechnicien' => $tab['idtechnicien'],
						 ':nom' => $tab['nom'],
						 ':prenom' => $tab['prenom'],
						 ':specialite' => $tab['specialite'],
						 ':email' => $tab['email'],
						 ':tel' => $tab['telephone']
						); 
		$exec = $this->unPdo->prepare ($requete);
		$exec->execute ($donnees);
	}
	public function selectWhereTechnicien($idTechnicien){
		$requete = "select * from technicien where idtechnicien = :idtechnicien";
		$donnees = array(":idtechnicien"=>$idTechnicien); 
		$exec = $this->unPdo->prepare ($requete);
		$exec->execute ($donnees);
		$unTechnicien = $exec->fetch(); //extraire un seul client.
		return $unTechnicien ;
	}

	/*********** Gestion des telephones ************/
	public function selectAllTelephones ($filtre){
		if ($filtre == ""){
				$requete = "select * from telephone ;" ; 
				$exec = $this->unPdo->prepare ($requete);
				$exec->execute ();
		} else{
				$requete = "select * from telephone where designation like :filtre or dateachat like :filtre  ; " ;
				$donnees = array(":filtre"=>"%".$filtre."%");
				$exec = $this->unPdo->prepare ($requete);
				$exec->execute ($donnees);
		}
		
		return $exec->fetchAll(); //extraire tous les clients
	}
	/*********** Gestion des Interventions ************/
	public function selectAllInterventions ($filtre){
		if ($filtre == ""){
				$requete = "select * from intervention ;" ; 
				$exec = $this->unPdo->prepare ($requete);
				$exec->execute ();
		} else{
				$requete = "select * from intervention where description like :filtre or dateinter like :filtre  ; " ;
				$donnees = array(":filtre"=>"%".$filtre."%");
				$exec = $this->unPdo->prepare ($requete);
				$exec->execute ($donnees);
		}
		
		return $exec->fetchAll(); //extraire tous les clients
	}
} 
?>






















