<?PHP
include "../config.php";
class reclamationC {
/*function afficherreclamation($reclamation){
		echo "id_reclamation: ".$reclamation->getid()."<br>";
		echo "nom_utilisateur_utitisateur: ".$reclamation->getnom_utilisateur()."<br>";
		echo "type: ".$reclamation->get_type()."<br>";
		echo "type: ".$reclamation->getmessage()."<br>";
	    echo "type: ".$reclamation->getmessage()."<br>";

	}*/
	
	function ajouterreclamation($reclamation){
		$sql="insert into reclamation (nom_utilisateur,type,message,titre) values (:nom_utilisateur,:type,:message,:titre)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom_utilisateur=$reclamation->getnom_utilisateur();
        $type=$reclamation->get_type();
        $titre=$reclamation->gettitre();
        $message=$reclamation->getmessage();
		$req->bindValue(':nom_utilisateur',$nom_utilisateur);
		$req->bindValue(':type',$type);
		$req->bindValue(':titre',$titre);
		$req->bindValue(':message',$message);
		

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherreclamations(){
		//$sql="SElECT * From reclamation e inner join formationphp.reclamation a on e.id_reclamation= a.id_reclamation";
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerreclamation($nom_utilisateur){
		$sql="DELETE FROM reclamation where nom_utilisateur= :nom_utilisateur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom_utilisateur',$nom_utilisateur);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierreclamation($reclamation,$nom_utilisateur){
		$sql="UPDATE reclamation SET  nom_utilisateur=:nom_utilisateur,type=:type,titre=:titre,message=:message WHERE nom_utilisateur=:nom_utilisateur";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom_utilisateur=$reclamation->getnom_utilisateur();
        $type=$reclamation->get_type();
        $titre=$reclamation->gettitre();
        $message=$reclamation->getmessage();
		
		$datas = array(':nom_utilisateur'=>$nom_utilisateur,':titre'=>$titre,':type'=>$type,':message'=>$message);
		$req->bindValue(':nom_utilisateur',$nom_utilisateur);
		$req->bindValue(':type',$type);
		$req->bindValue(':message',$message);
		$req->bindValue(':titre',$titre);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererreclamation($nom_utilisateur){
		$sql="SELECT * from reclamation where nom_utilisateur='$nom_utilisateur'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	/*function rechercherListereclamations($tarif){
		$sql="SELECT * from reclamation where message=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
}

?>