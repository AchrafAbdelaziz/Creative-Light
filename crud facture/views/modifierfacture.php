<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/facture.php";
include "../core/factureC.php";
if (isset($_GET['id_fac'])){
	$factureC=new factureC();
    $result=$factureC->recupererfacture($_GET['id_fac']);
	foreach($result as $row){
		$id_fac=$row['id_fac'];
		$id_client=$row['id_client'];
		$date1=$row['date1'];
		$valeur=$row['valeur'];
?>
<form method="POST">
<table>
<caption>Modifier facture</caption>
<tr>
<td>id</td>
<td><input type="number" name="id_fac" value="<?PHP echo $id_fac ?>"></td>
</tr>
<tr>
<td>id client</td>
<td><input type="number" name="id_client" value="<?PHP echo $id_client ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="text" name="date1" value="<?PHP echo $date1 ?>"></td>
</tr>
<tr>
<td>valeur</td>
<td><input type="number" name="valeur" value="<?PHP echo $valeur ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_fac_ini" value="<?PHP echo $_GET['id_fac'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$facture=new facture($_POST['id_fac'],$_POST['id_client'],$_POST['date1'],$_POST['valeur']);
	$factureC->modifierfacture($facture,$_POST['id_fac_ini']);
	echo $_POST['id_fac_ini'];
	header('Location: afficherfacture.php');
}
?>
</body>
</HTMl>