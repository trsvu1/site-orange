<br>
<h3>Ajout d'un Technicien</h3>
<form method="post">
	<table>
		<tr>
			<td> Nom du Technicien : </td>
			<td> <input type="text" name="nom" value="<?= ($leTechnicien==null)?'':$leTechnicien['nom'] ?>"></td>
		</tr>

		<tr>
			<td> Prénom du Technicien : </td>
			<td> <input type="text" name="prenom" value="<?= ($leTechnicien==null)?'':$leTechnicien['prenom'] ?>"></td>
		</tr>

		<tr>
			<td> Spécialité : </td>
			<td> 
			<select name ="specialite">
				<option value="telephonie">Téléphonie</option>
				<option value="box">Box Internet</option>
				<option value="autre">Autre</option>
			</select>
			</td>
		</tr>

		<tr>
			<td> Email Technicien : </td>
			<td> <input type="text" name="email" value="<?= ($leTechnicien==null)?'':$leTechnicien['email'] ?>"></td>
		</tr>

		<tr>
			<td> Tel Technicien : </td>
			<td> <input type="text" name="telephone" value="<?= ($leTechnicien==null)?'':$leTechnicien['tel'] ?>"></td>
		</tr>

		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td>
			<td> <input type="submit" <?= ($leTechnicien==null) ? 'name="Valider" value="Valider"' : 'name ="Modifier" value ="Modifier"' ?>></td>
		</tr>
		<?= ($leTechnicien==null) ? '' : '<input type="hidden" name ="idtechnicien" value="'.$leTechnicien['idtechnicien'].'" >' ?>

	</table>
</form>










