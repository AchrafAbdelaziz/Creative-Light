<?PHP
include "../config.php";
class factureC {
function afficherfacture ($facture){
		echo "id_fac: ".$facture->getid_fac()."<br>";
		echo "id_client: ".$facture->getid_client()."<br>";
		echo "date1: ".$facture->getdate1()."<br>";
		echo "valeur: ".$facture->getvaleur()."<br>";
	}
	function ajoutfacture($facture){
		$sql="insert into creativelight.facture (id_fac,id_client,date1,valeur) values (:id_fac,:id_client,:date1,:valeur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_fac=$facture->getid_fac();
        $id_client=$facture->getid_client();
        $date1=$facture->getdate1();
        $valeur=$facture->getvaleur();
		$req->bindValue(':id_fac',$id_fac);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':date1',$date1);
		$req->bindValue(':valeur',$valeur);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherfactures(){
		//$sql="SElECT * From facture e inner join formationphp.facture a on e.id_fac= a.id_fac";
		$sql="SElECT * From creativelight.facture";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerfacture($id_fac){
		$sql="DELETE FROM creativelight.facture  where id_fac=:id_fac";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_fac',$id_fac);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierfacture($facture,$id_fac){
		$sql="UPDATE creativelight.facture SET  id_fac=:id_facc,id_client=:id_client,date1=:date1, valeur=:valeur WHERE id_fac=:id_fac";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_facc=$facture->getid_fac();
		$id_client=$facture->getid_client();
        $date1=$facture->getdate1();
        $valeur=$facture->getvaleur();
        $datas = array(':id_facc'=>$id_facc, ':id_fac'=>$id_fac,':id_client'=>$id_client, ':date1'=>$date1,':valeur'=>$valeur);
		$req->bindValue(':id_facc',$id_facc);
		$req->bindValue(':id_fac',$id_fac);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':date1',$date1);
		$req->bindValue(':valeur',$valeur);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererfacture($id_fac){
		$sql="SELECT * from creativelight.facture where id_fac=$id_fac";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListefactures($id_fac){
		$sql="SELECT * from creativelight.facture  where id_fac=$id_fac";
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