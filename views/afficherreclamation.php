<?PHP
include "../core/reclamationC.php";
$reclamation1C=new reclamationC();
$listereclamations=$reclamation1C->afficherreclamations();

//var_dump($listereclamations->fetchAll());
?>
<table border="1">
<tr>
<td>ID</td>
<td>nom_utilisateur</td>
<td>type</td>
<td>message</td>
<td>titre</td>


</tr>

<?PHP
foreach($listereclamations as $row){
	?>
	<tr>
	<td><?PHP echo $row['ID']; ?></td>
	<td><?PHP echo $row['nom_utilisateur']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><?PHP echo $row['message']; ?></td>
	<td><?PHP echo $row['titre']; ?></td>

	<td><form method="POST" action="supprimerreclamation.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['nom_utilisateur']; ?>" name="nom_utilisateur">
	</form>
	</td>
	<td><a href="modifierreclamation.php?nom_utilisateur=<?PHP echo $row['nom_utilisateur']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


