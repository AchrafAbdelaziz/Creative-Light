<?PHP
include "../core/panierC.php";
$panierC=new panierC();
if (isset($_POST["id"])){
	$panierC->supprimerpanier($_POST["id"]);
	header('Location: google-map.php');
}

?>