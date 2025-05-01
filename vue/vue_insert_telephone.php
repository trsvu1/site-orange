<br>
<h3>Ajout d'un Téléphone</h3>
<form method="post">
	<table>
		<tr>
			<td> Désignation : </td>
			<td> <input type="text" name="designation"></td>
		</tr>

		<tr>
			<td> Prix Achat : </td>
			<td> <input type="text" name="prixAchat"></td>
		</tr>

		<tr>
			<td> Date Achat: </td>
			<td> <input type="date" name="dateAchat"></td>
		</tr>

		<tr>
			<td> Le client : </td>
			<td> 
				<select name ="idclient">
					<?php 
					foreach($lesClients as $unClient){ 
						echo '<option value="'.$unClient['idclient'].'">'; 
						echo  $unClient['idclient'].'- '.$unClient['nom'].' '.$unClient['prenom'];
						echo '</option>';
					}
					?>
				</select>
			</td>
		</tr>
		
		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td>
			<td> <input type="submit" name="Valider" value="Valider"></td>
		</tr>

	</table>
</form>