<?PHP
include "../core/ligneC.php";
$ligneC=new ligneC();
if (isset($_POST["idpanier"])){
	$ligneC->supprimerligne($_POST["idpanier"]);
	header('Location: afficherligne.php');
}

?>