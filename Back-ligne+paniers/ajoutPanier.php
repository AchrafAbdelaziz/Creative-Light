<?PHP
include "../entities/panier.php";
include "../core/panierC.php";

if (isset($_POST['id']) and isset($_POST['date']) and isset($_POST['produit'])){
$panier1=new panier($_POST['id'],$_POST['date'],$_POST['produit']);
//Partie2
/*
var_dump($panier1);
}
*/
//Partie3
$panier1C=new panierC();
$panier1C->ajouterpanier($panier1);
header('Location: google-map.php');
	
}
else{
	echo "vérifier les champs";
}
//*/

?>