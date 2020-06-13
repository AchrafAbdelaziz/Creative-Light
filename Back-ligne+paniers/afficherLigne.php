<?PHP
include "../core/ligneC.php";
$ligne1C=new ligneC();
$listelignes=$ligne1C->afficherlignes();

//var_dump($listelignes->fetchAll());
?>
<table border="1">
<tr>
<td>idpanier</td>
<td>idproduit</td>
<td>prix</td>
<td>qt</td>
<td>supprimer</td>
<td>modifier</td>

</tr>

<?PHP
foreach($listelignes as $row){
	?>
	<tr>
	<td><?PHP echo $row['idpanier']; ?></td>
	<td><?PHP echo $row['idproduit']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><?PHP echo $row['qt']; ?></td>
	<td><form method="POST" action="supprimerligne.php">
	
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idpanier']; ?>" name="idpanier">
	</form>
	</td>
	<td><a href="modifierligne.php?idpanier=<?PHP echo $row['idpanier']; ?>">
	Modifier</a></td>
</tr>
<tr>
	
	<input type="hidden" value="<?PHP echo $row['idpanier']; ?>" name="idpanier">
</form>
</tr>
	<?PHP
}
?>
</table>
</body>
</html>


