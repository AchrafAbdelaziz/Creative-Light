<?PHP
include "../entities/facture.php";
include "../core/factureC.php";

if (isset($_POST['id_fac']) and isset($_POST['id_client']) and isset($_POST['date1']) and isset($_POST['valeur'])){
$facture1=new facture($_POST['id_fac'],$_POST['id_client'],$_POST['date1'],$_POST['valeur']);
//Partie2
/*
var_dump($facture1);
}
*/
//Partie3
$facture1C=new factureC();
$facture1C->ajoutfacture($facture1);
header('Location: afficherfacture.php');
	
}
else{
	echo "vérifier les champs";
}
//*/

?>