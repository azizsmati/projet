<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/article.php";
include "../core/articleC.php";
	echo $_POST['id_article'];
if (isset($_POST['id_article'])){
	$articleC=new articleC();
    $result=$articleC->recupererarticle($_POST['id_article']);
	$article=new article($_POST['id_article'],'',$_POST['contenue'],$_POST['titre'],$_POST['image']);
	$articleC->modifierarticle($article,$_POST['id_article']);

}
	header('Location: blog.php');
?>
</body>
</HTMl>