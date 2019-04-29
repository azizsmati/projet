<?PHP
include "../config.php";
class articleC {
function afficherarticle ($article){
		echo "id_article: ".$article->getid()."<br>";
        echo "titre: ".$article->gettitre()."<br>";
        echo "type: ".$article->get_type()."<br>";
		echo "contenue: ".$article->getcontenue()."<br>";
        echo "image: ".$article->get_image()."<br>";

	}
	
	function ajouterarticle($article){
		$sql="insert into article (id_article,type,contenue,titre,image) values (:id_article, :type, :contenue, :titre, :image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_article=$article->getid();
        $type=$article->get_type();
        $contenue=$article->getcontenue();
	    $titre=$article->gettitre();
		$image=$article->get_image();

		
        $req->bindValue(':id_article',$id_article);
		$req->bindValue(':type',$type);
		$req->bindValue(':contenue',$contenue);
		$req->bindValue(':titre',$titre);
		$req->bindValue(':image',$image);
		
            $req->execute();
           
	}
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
	} 
	}
		


	function afficherarticles(){
			
		$sql="SELECT * FROM article order by dateajout desc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerarticle($titre){
		$sql="DELETE FROM article where titre= :titre";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':titre',$titre);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierarticle($article,$id_article){
		$sql="UPDATE article SET id_article=:id_articlen,contenue=:contenue,titre=:titre,image=:image WHERE id_article=:id_article";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_articlen=$article->getid();
        $type=$article->get_type();
        $contenue=$article->getcontenue();
        $titre=$article->gettitre();
        $image=$article->get_image();
		$req->bindValue(':id_articlen',$id_articlen);
		$req->bindValue(':id_article',$id_article);
		$req->bindValue(':contenue',$contenue);
		$req->bindValue(':titre',$titre);
		$req->bindValue(':image',$image);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
        }
		
	}
	function recupererarticle($id_article){
		$sql="SELECT * from article where id_article='$id_article'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function recupererarticle1($titre){
		$sql="SELECT * from article where titre='$titre'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function vuesnumber($vues,$id_article){
		$sql="UPDATE article SET vues=:vues WHERE id_article=:id_article";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        


		$datas = array(':id_article'=>$id_article, ':vues'=>$vues );
		$req->bindValue(':id_article',$id_article);
		$req->bindValue(':vues',$vues);
		

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function rechercherarticle($titre){
		$sql="SELECT * from article where titre=$titre";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>	