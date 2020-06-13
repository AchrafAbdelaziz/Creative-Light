<?PHP
include "../entities/ligne.php";
include "../core/ligneC.php";

if (isset($_POST['idpanier']) and isset($_POST['idproduit']) and isset($_POST['prix']) and isset($_POST['qt'])){
$ligne1=new ligne($_POST['idpanier'],$_POST['idproduit'],$_POST['prix'],$_POST['qt']);
//Partie2
/*
var_dump($ligne1);
}
*/
//Partie3
$ligne1C=new ligneC();
$ligne1C->ajouterligne($ligne1);
header('Location: index.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>