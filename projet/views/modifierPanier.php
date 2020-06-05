<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/panier.php";
include "../core/panierC.php";
if (isset($_GET['id'])){
	$panierC=new panierC();
    $result=$panierC->recupererpanier($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$date=$row['date'];
		$produit=$row['produit'];
?>
<form method="POST">
<table>
<caption>Modifier panier</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="date" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<tr>
<td>produit</td>
<td><input type="text" name="produit" value="<?PHP echo $produit ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$panier=new panier($_POST['id'],$_POST['date'],$_POST['produit']);
	$panierC->modifierpanier($panier,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherpanier.php');
}
?>
</body>
</HTMl>