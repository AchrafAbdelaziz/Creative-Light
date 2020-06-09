<?PHP
include "../entities/fidelite.php";
include "../core/fideliteC.php";

if (isset($_POST['id']) and isset($_POST['id_client']) and isset($_POST['nombre_p']) and isset($_POST['date_ex'])){
$fidelite1=new fidelite($_POST['id'],$_POST['id_client'],$_POST['nombre_p'],$_POST['date_ex']);
//Partie2
/*
var_dump($fidelite1);
}
*/
//Partie3
$fidelite1C=new fideliteC();
$fidelite1C->ajoutfidelite($fidelite1);
header('Location: afficherfidelite.php');
	
}
else{
	echo "vérifier les champs";
}
//*/

?>