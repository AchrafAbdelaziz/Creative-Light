<?PHP
include "../core/factureC.php";
$facture1C=new factureC();
$listefactures=$facture1C->afficherfactures();

//var_dump($listefactures->fetchAll());
?>
<table border="1">
<tr>
<td>id_fac</td>
<td>id_client</td>
<td>date1</td>
<td>valeur</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listefactures as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_fac']; ?></td>
	<td><?PHP echo $row['id_client']; ?></td>
	<td><?PHP echo $row['date1']; ?></td>
	<td><?PHP echo $row['valeur']; ?></td>
	<td><form method="POST" action="supprimerfacture.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_fac']; ?>" name="id_fac">
	</form>
	</td>
	<td><a href="modifierfacture.php?id_fac=<?PHP echo $row['id_fac']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


