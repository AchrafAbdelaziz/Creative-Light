<?PHP
include "../core/panierC.php";
$panier1C=new panierC();
$listepaniers=$panier1C->afficherpaniers();

//var_dump($listepaniers->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>produit</td>
<td>date</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listepaniers as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['produit']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><form method="POST" action="supprimerPanier.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierpanier.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


