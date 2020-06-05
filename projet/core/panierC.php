<?PHP
include "../config.php";
class panierC {
function afficherpanier ($panier){
		echo "id: ".$panier->getid()."<br>";
		echo "date: ".$panier->getdate()."<br>";
		echo "produit: ".$panier->getproduit()."<br>";
	}
	function ajouterpanier($panier){
		$sql="insert into panier (id,date,produit) values (:id, :date,:produit)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$panier->getid();
        $date=$panier->getdate();
        $produit=$panier->getproduit();
		$req->bindValue(':id',$id);
		$req->bindValue(':date',$date);
		$req->bindValue(':produit',$produit);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpaniers(){
		//$sql="SElECT * From panier e inner join formationphp.panier a on e.id= a.id";
		$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpanier($id){
		$sql="DELETE FROM panier where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierpanier($panier,$id){
		$sql="UPDATE panier SET id=:idn, date=:date, produit=:produit WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idn=$panier->getid();
        $date=$panier->getdate();
        $produit=$panier->getproduit();
        $nb=$panier->getNbHeures();
		$datas = array(':idn'=>$idn, ':id'=>$id, ':date'=>$date,':produit'=>$produit);
		$req->bindValue(':idn',$idn);
		$req->bindValue(':id',$id);
		$req->bindValue(':date',$date);
		$req->bindValue(':produit',$produit);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererpanier($id){
		$sql="SELECT * from panier where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListepaniers($idpanier){
		$sql="SELECT * from panier where idpanier=$idpanier";
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