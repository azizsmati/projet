<?PHP
include "../core/reclamationC.php";
$reclamationC=new reclamationC();
if (isset($_POST["nom_utilisateur"])){
	$reclamationC->supprimerreclamation($_POST["nom_utilisateur"]);
	header('Location: SAV.php');
}

?>