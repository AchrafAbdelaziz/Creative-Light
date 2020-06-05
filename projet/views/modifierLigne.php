
<?PHP
include "../entities/ligne.php";
include "../core/ligneC.php";
if (isset($_GET['idpanier'])){
	$ligneC=new ligneC();
    $result=$ligneC->recupererligne($_GET['idpanier']);
	foreach($result as $row){
		$idpanier=$row['idpanier'];
		$idproduit=$row['idproduit'];
		$prix=$row['prix'];
		$qt=$row['qteures'];
		$tarifH=$row['tarifHoraire'];
?>
<form method="POST">
<table>
<caption>Modifier ligne</caption>
<tr>
<td>idpanier</td>
<td><input type="number" name="idpanier" value="<?PHP echo $idpanier ?>"></td>
</tr>
<tr>
<td>idproduit</td>
<td><input type="number" name="idproduit" value="<?PHP echo $idproduit ?>"></td>
</tr>
<tr>
<td>prix</td>
<td><input type="text" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td>qt</td>
<td><input type="number" name="qt" value="<?PHP echo $qt ?>"></td>
</tr>
<tr>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idpanier_ini" value="<?PHP echo $_GET['idpanier'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$ligne=new ligne($_POST['idpanier'],$_POST['idproduit'],$_POST['prix'],$_POST['qt'],$_POST['tarifH']);
	$ligneC->modifierligne($ligne,$_POST['idpanier_ini']);
	echo $_POST['idpanier_ini'];
	header('Location: afficherligne.php');
}
?>
