<br>
<h3> Liste des techniciens ( <?= (isset($lesTechniciens))? count($lesTechniciens) : '' ?> )</h3>

<form method="post">
	Filtrer par : <input type="text" name="filtre">
	<input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>

<table border="1">
	<tr>
		<td> Id Client</td>
		<td> Nom </td>
		<td> Prénom </td>
		<td> Spécialité</td>
		<td> Email </td>
		<td> Téléphone </td>
		<?php
if(isset($_SESSION['role']) && $_SESSION['role']=="admin") {
		echo "<td> Opérations </td>"; 
	} ?>
	</tr>

	<?php
	//liste des techniciens de la BDD 
	if(isset($lesTechniciens)){
		foreach ($lesTechniciens as $unTechnicien) {
			echo "<tr>";
			echo "<td>" . $unTechnicien["idtechnicien"] . "</td>";
			echo "<td>" . $unTechnicien["nom"] . "</td>";
			echo "<td>" . $unTechnicien["prenom"] . "</td>";
			echo "<td>" . $unTechnicien["specialite"] . "</td>";
			echo "<td>" . $unTechnicien["email"] . "</td>";
			echo "<td>" . $unTechnicien["tel"] . "</td>";
if(isset($_SESSION['role']) && $_SESSION['role']=="admin") {
			echo "<td>" ;

			echo "<a href='index.php?page=3&action=sup&idtechnicien=".$unTechnicien["idtechnicien"]."'> <img src='images/supprimer.png' heigth='30' width='30'> </a>"; 

			echo "<a href='index.php?page=3&action=edit&idtechnicien=".$unTechnicien["idtechnicien"]."'> <img src='images/editer.png' heigth='30' width='30'> </a>"; 

			echo "</td>";
		}

			echo "</tr>";
		}
	}
	?>
</table>
<br> <br> <br> 









