<?PHP
include "../core/panierC.php";
$panierC=new panierC();
if (isset($_POST["submit-search"])){
	$panierC->recherche($_POST["search"]);
	header('Location: Rechercher.php');
}

?>