<!DOCTYPE html>
<?PHP include "../core/articleC.php";
$article=new articleC();
$liste=$article->afficherarticles();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Karma - client</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style1.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
	<script type="text/javascript" src="blog.js"></script>

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>S'il vous plaît, attendez...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">Chercher</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">Fermer</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Gestion De blog</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                    <!-- Call Search -->

                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    
                    <!-- #END# Notifications -->
                    
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                   
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->

        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lamia Marzouki</div>
                    <div class="email">lamiamarzoukibekri@yahoo.com</div>
                    
                </div>
            </div>
            <!-- #User Info -->

            <!-- Menu -->
             <div class="menu">
                <ul class="list">
                    <li class="header">Navigation principale</li>
                    <li >
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Mise En page</span>
                        </a>
                    </li>
                    <li>
                        <a href="Statistique.html">
                            <i class="material-icons">text_fields</i>
                            <span>Statistique</span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion produit.html">
                            <i class="material-icons">layers</i>
                            <span>Gestion de produits</span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion livraison.html" >
                            <i class="material-icons">widgets</i>
                            <span>Gestion de livraison</span>
                        </a>
                       
                    </li>
                   
                    <li>
                        <a href="gestion client.html">
                            <i class="material-icons">swap_calls</i>
                            <span>Gestion des Clients</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="gestion blog.html">
                            <i class="material-icons">assignment</i>
                            <span>Gestion de Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="SAV.html" >
                            <i class="material-icons">view_list</i>
                            <span>Service Apres vente</span>
                        </a>
                    </li>
                    <li>
                        <a href="gestion pub.html" >
                            <i class="material-icons">perm_media</i>
                            <span>Gestion de Blog</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->
         <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Gestion de Blog</h2>
            </div>
            <!-- Body Copy -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Body Copy -->
            <!-- Headings -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Ajouter Un Article
                            </h2>
                            
                        </div>
						<form method="POST" action="ajoutarticle.php" onsubmit="return verifForm(this)" >
                        <table id="t01">
       
	   <tr><td>titre</td></p><td><input maxlength="15" type="text" name="titre" onblur="verifTitre(this)"></td></tr>

	<tr><td>ID_Article</td></p><td><input type="number" name="id_article" "></td></tr>
   
   <tr><td> Type d'Article </td> <td><input required="" list="browsers" name="type" id="type" onblur="verifType(this)">
  <datalist id="browsers">
  <option value="choix1">
  <option value="choix2">
  <option value="choix3">
</datalist></td></tr>	
 <tr><td> Contenue d'Article </td><td><input type="text" name="contenue" onblur="verifMessage(this)" ></td></tr>
 <tr><td> image  </td><td><input id="image" type="file" name="image" onblur="verifImage(this)"></td></tr>

   
  </table>
             <label class="label2"><input type="submit" name="Télécharger"  value="Télécharger"  class="button"></label>
			 </form>
                        </div>
                    
            </div>
            <!-- #END# Headings -->
			 <!-- Headings -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Rechercher Un Article
                            </h2>
                            
                        </div>
						<form name="f" method="POST" >
                        <table id="t01">
     <tr><td> <input type="text" name="recherche" class="form-control"></td><td><input type="submit" name="biz" value="rechercher"></td></tr> 
  </table>
			 </form>
			 
			 
			 
			 <table border="1">
<tr>
<td>id_article</td>
<td>titre</td>
<td>type</td>
<td>message</td>
<td>image</td>

</tr>

<?PHP
if(isset($_POST['recherche'])){
$listeff=$article->recupererarticle1($_POST['recherche']);

foreach($listeff as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_article']; ?></td>
	<td><?PHP echo $row['titre']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><?PHP echo $row['contenue']; ?></td>
		<td><?PHP echo $row['image']; ?></td>

	<td><form method="POST" action="supprimerreclamation.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['titre']; ?>" name="id_reclamation">
	</form>
	</td>
	<td><a href="modifierreclamation.php?titre=<?PHP echo $row['titre']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
}
?>
</table>
                        </div>
                    
            </div>
            <!-- #END# Headings -->
            <!-- Text Styles -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card"> +-++--+--    
                        <div class="header">
                            <h2>
                              Modifier Un Article
                            </h2>
                            
                        </div>
                       
						
						<form name="f" method="POST" action="modifierarticle.php" id="updatearticle">
                        <table id="t01">
        
	<tr><td>ID_Article</td></p><td><input id="ida" type="text" name="id_article"></td></tr>

		<tr><td> Titre article</td><td><input list="dropdown" name="titre" id="type" >
  <datalist id="dropdown">
  <?php foreach($liste as $row)
  {
  echo '
  <option value="'.$row['titre'].'"> </option>'; } ?>
</datalist></td></tr>		
 <tr><td> Contenue d'Article </td><td><input id="contenue" type="text" name="contenue"></td></tr>
 <tr><td> image  </td><td><input id="date" type="file" name="image"></td></tr>

   
  </table>
             <label class="label2"><input type="submit" name="modifier"  value="modifier"  class="button"></label>
			 </form>
						

						</div>

                    </div>
                </div>
            </div>
			
			
			
			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card"> +-++--+--    
                        <div class="header">
                            <h2>
                              Supprimer Un Article
                            </h2>
                            
                        </div>
						<form name="f" method="POST" action="supprimerarticle.php">
                    
            <table id="t01">
   <tr><td> Titre article</td><td><input list="dropdown" name="titre" id="type" >
  <datalist id="dropdown">
  <?php foreach($liste as $row)
  {
  echo '
  <option value="'.$row['titre'].'"> </option>'; } ?>
</datalist></td></tr>	
   
  </table>
             <label class="label2"><input type="submit" name="Supprimer" value="Supprimer" class="button"></label>
                        </form>
						</div>
                    </div>
                </div>
            </div>	
            <!-- #END# Text Styles -->
           
            
        </div>
    </section>
    
            

            <!-- Widgets -->
            
                <!-- #END# Answered Tickets -->
            
                <!-- Task Info -->
               
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>

<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js'></script>
  <script type="text/javascript" src="blog.js"></script>
</body>

</html>
