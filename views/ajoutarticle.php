<?PHP
include "../entities/article.php";
include "../core/articleC.php";

if (isset($_POST['id_article']) and isset($_POST['type']) and isset($_POST['contenue']) and isset($_POST['titre']) and isset($_POST['image'])){
$article1=new article($_POST['id_article'],$_POST['type'],$_POST['contenue'],$_POST['titre'],$_POST['image']);
//Partie2
/*
var_dump($article1);
}
*/
//Partie3
$article1C=new articleC();
$article1C->ajouterarticle($article1);
header('Location: gestion blog.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>