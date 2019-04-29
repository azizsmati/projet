<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";
if (isset($_GET['nom_utilisateur'])){
	$reclamationC=new reclamationC();
    $result=$reclamationC->recupererreclamation($_GET['nom_utilisateur']);
	foreach($result as $row){
		$ID=$row['ID'];
		$nom_utilisateur=$row['nom_utilisateur'];
		$type=$row['type'];
		$message=$row['message'];
		$titre=$row['titre'];

?>
<form method="POST">
<table>
<caption>Modifier reclamation</caption>
<tr>
<td>id_reclamation</td>
<td><input type="number" name="id_reclamation" value="<?PHP echo $ID ?>"></td>
</tr>
<tr>
<td>nom_utilisateur</td>
<td><input type="text" name="nom_utilisateur" value="<?PHP echo $nom_utilisateur ?>"></td>
</tr>
<tr>
<td>type</td>
<td><input type="text" name="type" value="<?PHP echo $type ?>"></td>
</tr>
<tr>
<td>message</td>
<td><input type="text" name="message" value="<?PHP echo $message ?>"></td>
</tr>
<tr>
<td>titre</td>
<td><input type="text" name="titre" value="<?PHP echo $titre ?>"></td>
</tr>
<tr>
<td>etat</td>
<td><select name="etat">
<option>Accepter</option>
<option>Refuser</option>
<option>En attente</option>
</select>

</td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="nom_utilisateur_ini" value="<?PHP echo $_GET['nom_utilisateur'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$reclamation=new reclamation($_POST['nom_utilisateur_ini'],$_POST['type'],$_POST['message'],$_POST['titre']);
	$reclamationC->modifierreclamation($reclamation,$_POST['nom_utilisateur_ini']);
	echo $_POST['nom_utilisateur_ini'];
	header('Location: afficherreclamation.php');
}
?>
</body>
</HTMl>