<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";

if ( isset($_POST['nom_utilisateur']) and isset($_POST['type']) and isset($_POST['message']) and isset($_POST['titre'])  ){
$reclamation1=new reclamation($_POST['nom_utilisateur'],$_POST['type'],$_POST['message'],$_POST['titre']);
//Partie2
/*
var_dump($reclamation1);
}
*/
//Partie3
$reclamation1C=new reclamationC();
$reclamation1C->ajouterreclamation($reclamation1);
header('Location: recl.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>