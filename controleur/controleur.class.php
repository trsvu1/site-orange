<?php
	require_once ("modele/modele.class.php");
	class Controleur {
		private $unModele ; 

		public function   __construct(){
			//instancier la classe modele 
			$this->unModele = new Modele (); 
		}
		/****************** Gestion des clients ******/
		public function   insertClient($tab){
			//controler les donnees avant leur insertion dans la BDD 

			//appel au modele pour inserer les données
			$this->unModele->insertClient($tab);
		}

		public function selectAllClients ($filtre){
			$lesClients = $this->unModele->selectAllClients($filtre); 

			//controler les données 

			return $lesClients; 
		}
		public function deleteClient($idclient){
			//on doit vérifier que le client existe dans la table 
			$this->unModele->deleteClient($idclient);
		}

		public function updateClient($tab){
			$this->unModele->updateClient($tab);
		}

		public function selectWhereClient($idClient){
			return $this->unModele->selectWhereClient($idClient);
		}

		/****************** Gestion des techniciens ******/
		public function insertTechnicien($tab){
			//controler les donnees avant leur insertion dans la BDD 

			//appel au modele pour inserer les données
			$this->unModele->insertTechnicien($tab);
		}

		public function selectAllTechniciens ($filtre){
			$lesTechniciens = $this->unModele->selectAllTechniciens($filtre); 

			//controler les données 

			return $lesTechniciens; 
		}
		public function deleteTechnicien($idTechnicien){
			//on doit vérifier que le client existe dans la table 
			$this->unModele->deleteTechnicien($idTechnicien);
		}

		public function updateTechnicien($tab){
			$this->unModele->updateTechnicien($tab);
		}

		public function selectWhereTechnicien($idTechnicien){
			return $this->unModele->selectWhereTechnicien($idTechnicien);
		}

		/*************** Gestion telephones ***************/
		public function selectAllTelephones ($filtre){
			$lesTelephones = $this->unModele->selectAllTelephones($filtre);

			return $lesTelephones; 
		}

		/*************** Gestion Interventions ***************/
		public function selectAllInterventions ($filtre){
			$lesInterventions = $this->unModele->selectAllInterventions($filtre);

			return $lesInterventions; 
		}

		/********* Gestion des users *************/
		public function verifConnexion ($email, $mdp){
			//controler les données email et mdp 

			//appel du modele 
			return $this->unModele->verifConnexion ($email, $mdp);
		}
	}
	
?>












