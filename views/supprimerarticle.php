<?PHP
include "../core/articleC.php";
$articleC=new articleC();
if (isset($_POST["titre"])){
	$articleC->supprimerarticle($_POST["titre"]);
	header('Location: blog.php');
}
?>