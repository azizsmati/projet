<!DOCTYPE html>
<?PHP include "../core/reclamationC.php";
$reclamation=new reclamationC();
$liste=$reclamation->afficherreclamations();
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
                <a class="navbar-brand" href="index.html">Gestion De Client</a>
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
                   
                    <li class="active">
                        <a href="gestion client.html">
                            <i class="material-icons">swap_calls</i>
                            <span>Gestion des Clients</span>
                        </a>
                    </li>
                    <li>
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
                <h2>Gestion de SAV</h2>
            </div>
            <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Les Réclamations :</h2>
                        </div>
                        <div class="body">
                            <table id="t01">
     <tr>
        <th>Nom d'utilisateur</th> 
		<th>ID_Réclamation</th>
        <th>type de réclamation</th>
        <th>titre de Réclamation</th>
		<th>Message de Réclamation</th>
        <th>etat</th>

		<th>traiter une reclamation</th>
         
		
    </tr>
<?php foreach($liste as $row){
?>

	<tr>
    
	     <td><?PHP echo $row['nom_utilisateur']; ?></td>
         <td><?PHP echo $row['ID']; ?> </td>
         <td><?PHP echo $row['type']; ?> </td>
         <td> <?PHP echo $row['titre']; ?> </td>
         <td> <textarea readonly> <?PHP echo $row['message']; ?> </textarea></td>
 <td> 	<input type="submit" name="bachoula" value="<?php echo $row['etat']; ?>"  >
</td>		
		<td><a href="?action=<?php echo $row['nom_utilisateur'];?>">Traiter</a></td>
        
		 <td> 
         	 <form method="POST" action="supprimerreclamation.php">
	<input type="submit" name="supprimer" value="refuser" class="button">
	<input type="hidden" value="<?PHP echo $row['nom_utilisateur']; ?>" name="nom_utilisateur">
	</form>
	</td>
    </tr>
<?php
}
?>
    </table>
       
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
                              Traiter une Reclamation 
                            </h2>
                            
                        </div>
                        
						<?php
						if(isset($_GET['action'])){
						$loulou=$reclamation->recupererreclamation($_GET['action']);
						foreach($loulou as $row){
?>
<form method="POST" >
						<table id="t01">
    
   
    <tr><td>titre de comfirmation</td><td><input type="text" name="titre" value="<?PHP echo $row['titre']; ?>"></td></tr>
	<tr><td>message de reclamation</td><td><input type="text" name="message" value="<?PHP echo $row['message']; ?>"></td></tr>
	<tr><td>email</td><td><input type="text" name="email" ></td></tr>
     	<tr><td>message de comfirmation</td><td><input type="text" name="msg"></td></tr>

  </table>
  <label class="label2"><input type="submit" name="Envoyer" value="Envoyer" class="button"></label>
  </form>
             <?php
			 
if ( (isset($_POST['msg'])) )
{

 $to ='karma.company@gmail.com';
$subject  ='Reponse';
$message  =$_POST['msg'];
$headers  = "From:".$row['email']. "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
           mail($to, $subject, $message, $headers);
           
 }  

    

else
{

}

						}	}			  
?>
	

	
                        </div>
                    
            </div>
            <!-- #END# Headings -->
            <!-- Text Styles -->
            <!--<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card"> +-++--+--    
                        <div class="header">
                            <h2>
                             Traiter une Reclamation Refusée
                              </h2>
                        </div>
                                          <table id="t01">
    <tr><td>ID_Réclamation</td></p><td><input type="text" name="login"></td></tr>
    <tr><td> Nom d'utulisateur</td></p><td><input type="text" name="login"></td></tr>
    <tr><td>titre de comfirmation</td><td><input type="password" name="login"></td></tr>
	<tr><td>message de reclamation</td><td><input type="password" name="login"></td></tr>
    
   
  </table>
  <label class="label2"><input type="button" name="Envoyer" value="Envoyer" class="button"></label>
                        </div> -->

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
</body>

</html>
