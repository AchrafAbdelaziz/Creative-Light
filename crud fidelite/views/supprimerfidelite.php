<?PHP
include "../core/fideliteC.php";
$fideliteC=new fideliteC();
if (isset($_POST["id"])){
	$fideliteC->supprimerfidelite($_POST["id"]);
	header('Location: afficherfidelite.php');
}

?>