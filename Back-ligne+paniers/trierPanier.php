<?PHP
include "../core/panierC.php";
$panierC=new panierC();
if (isset($_POST["id"])){
	$panierC->trierpanier($_POST["id"]);
	header('Location: Trier.php');
}

?>