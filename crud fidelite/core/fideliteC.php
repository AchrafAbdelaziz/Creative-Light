<?PHP
include "../config.php";
class fideliteC {
function afficherfidelite ($fidelite){
		echo "id: ".$fidelite->getid()."<br>";
		echo "id_client: ".$fidelite->getid_client()."<br>";
		echo "nombre_p: ".$fidelite->getnombre_p()."<br>";
		echo "date_ex: ".$fidelite->getdate_ex()."<br>";
	}
	function ajoutfidelite($fidelite){
		$sql="insert into creativelight.fidelite (id,id_client,nombre_p,date_ex) values (:id,:id_client,:nombre_p,:date_ex)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$fidelite->getid();
        $id_client=$fidelite->getid_client();
        $nombre_p=$fidelite->getnombre_p();
        $date_ex=$fidelite->getdate_ex();
		$req->bindValue(':id',$id);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':nombre_p',$nombre_p);
		$req->bindValue(':date_ex',$date_ex);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherfidelites(){
		//$sql="SElECT * From fidelite e inner join formationphp.fidelite a on e.id= a.id";
		$sql="SElECT * From creativelight.fidelite";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerfidelite($id){
		$sql="DELETE FROM creativelight.fidelite  where id=:id";
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
	function modifierfidelite($fidelite,$id){
		$sql="UPDATE creativelight.fidelite SET  id=:id,id_client=:id_client,nombre_p=:nombre_p, date_ex=:date_ex WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$fidelite->getid();
		$id_client=$fidelite->getid_client();
        $nombre_p=$fidelite->getnombre_p();
        $date_ex=$fidelite->getdate_ex();
        $datas = array(':idd'=>$idd, ':id'=>$id,':id_client'=>$id_client, ':nombre_p'=>$nombre_p,':date_ex'=>$date_ex);
		$req->bindValue(':id',$id);
		$req->bindValue(':id',$id);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':nombre_p',$nombre_p);
		$req->bindValue(':date_ex',$date_ex);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererfidelite($id){
		$sql="SELECT * from creativelight.fidelite where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListefidelites($id){
		$sql="SELECT * from creativelight.fidelite  where id=$id";
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