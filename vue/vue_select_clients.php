<br>
<h3> Liste des clients ( <?= (isset($lesClients))? count($lesClients) : '' ?> )</h3>

<form method="post">
	Filtrer par : <input type="text" name="filtre">
	<input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>

<table class="table table-dark" border="1">
  <thead class="thead-dark">
  	<tr>
		<td> Id Client</td>
		<td> Nom </td>
		<td> Prénom </td>
		<td> Adresse courrier </td>
		<td> Email </td>
		<td> Téléphone </td>
<?php
if(isset($_SESSION['role']) && $_SESSION['role']=="admin") {
		echo "<td> Opérations </td>"; 
	} ?>
	</tr>
	</thead>
<tbody>
	<?php
	//liste des clients de la BDD 
	if(isset($lesClients)){
		foreach ($lesClients as $unClient) {
			echo "<tr>";
			echo "<td>" . $unClient["idclient"] . "</td>";
			echo "<td>" . $unClient["nom"] . "</td>";
			echo "<td>" . $unClient["prenom"] . "</td>";
			echo "<td>" . $unClient["adresse"] . "</td>";
			echo "<td>" . $unClient["email"] . "</td>";
			echo "<td>" . $unClient["tel"] . "</td>";

if(isset($_SESSION['role']) && $_SESSION['role']=="admin") {
			echo "<td>" ;

			echo "<a href='index.php?page=2&action=sup&idclient=".$unClient["idclient"]."'> <img src='images/supprimer.png' heigth='30' width='30'> </a>"; 

			echo "<a href='index.php?page=2&action=edit&idclient=".$unClient["idclient"]."'> <img src='images/editer.png' heigth='30' width='30'> </a>"; 

			echo "</td>";
		}

			echo "</tr>";
		}
	}
	?>
	</tbody>
</table>
<br> <br> <br> 









