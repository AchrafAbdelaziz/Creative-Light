<?PHP
include "../core/factureC.php";
$factureC=new factureC();
if (isset($_POST["id_fac"])){
	$factureC->supprimerfacture($_POST["id_fac"]);
	header('Location: afficherfacture.php');
}

?>