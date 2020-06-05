<?PHP
include "../config.php";
class ligneC {
function afficherligne ($ligne){
		echo "idpanier: ".$ligne->getidpanier()."<br>";
		echo "idproduit: ".$ligne->getidproduit()."<br>";
		echo "prix: ".$ligne->getprix()."<br>";
		echo "qt: ".$ligne->getqt()."<br>";
	}
	function ajouterligne($ligne){
		$sql="insert into ligne (idpanier,idproduit,prix,qt) values (:idpanier, :idproduit,:prix,:qt)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idpanier=$ligne->getidpanier();
        $idproduit=$ligne->getidproduit();
        $prix=$ligne->getprix();
        $qt=$ligne->getqt();
		$req->bindValue(':idpanier',$idpanier);
		$req->bindValue(':idproduit',$idproduit);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':qt',$qt);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlignes(){
		$sql="SElECT * From ligne e inner join panier a on e.idpanier= a.id";
		//$sql="SElECT * From ligne";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerligne($idpanier){
		$sql="DELETE FROM ligne where idpanier= :idpanier";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idpanier',$idpanier);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierligne($ligne,$idpanier){
		$sql="UPDATE ligne SET idpanier=:idpaniern, idproduit=:idproduit,prix=:prix,qt=:qt WHERE idpanier=:idpanier";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idpaniern=$ligne->getidpanier();
        $idproduit=$ligne->getidproduit();
        $prix=$ligne->getprix();
        $nb=$ligne->getqt();
		$datas = array(':idpaniern'=>$idpaniern, ':idpanier'=>$idpanier, ':idproduit'=>$idproduit,':prix'=>$prix,':qt'=>$qt);
		$req->bindValue(':idpaniern',$idpaniern);
		$req->bindValue(':idpanier',$idpanier);
		$req->bindValue(':idproduit',$idproduit);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':qt',$qt);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererligne($idpanier){
		$sql="SELECT * from ligne where idpanier=$idpanier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelignes($idpanier){
		$sql="SELECT * from ligne where idpanier=$idpanier";
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