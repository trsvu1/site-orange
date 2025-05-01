<br>
<h3> Liste des interventions</h3>
<br>

<table border="1">
	<tr>
		<td> Id Intervention</td>
		<td> Description </td>
		<td> Prix Intervention </td>
		<td> Date Intervention  </td>
		<td> Technicien </td>
		<td> Téléphone </td>

		<td> Opérations </td>
	</tr>

	<?php
	//liste des telephones de la BDD 
	if(isset($lesInterventions)){
		foreach ($lesInterventions as $uneInter) {
			echo "<tr>";
			echo "<td>" . $uneInter["idInter"] . "</td>";
			echo "<td>" . $uneInter["designation"] . "</td>";
			echo "<td>" . $uneInter["prixInter"] . "</td>";
			echo "<td>" . $uneInter["dateInter"] . "</td>";
			echo "<td>" . $uneInter["idtechnicien"] . "</td>";
			echo "<td>" . $uneInter["idtelephone"] . "</td>";
		 
			echo "<td>" ;

			echo "<a href='index.php?page=5&action=sup&idInter=".$uneInter["idInter"]."'> <img src='images/supprimer.png' heigth='30' width='30'> </a>"; 

			echo "<a href='index.php?page=5&action=edit&idInter=".$uneInter["idInter"]."'> <img src='images/editer.png' heigth='30' width='30'> </a>"; 

			echo "</td>";

			echo "</tr>";
		}
	}
	?>
</table>
<br> <br> <br> 