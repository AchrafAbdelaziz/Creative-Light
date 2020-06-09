<?PHP
include "../core/fideliteC.php";
$fidelite1C=new fideliteC();
$listefidelites=$fidelite1C->afficherfidelites();

//var_dump($listefidelites->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>id_client</td>
<td>nombre_p</td>
<td>date_ex</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listefidelites as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['id_client']; ?></td>
	<td><?PHP echo $row['nombre_p']; ?></td>
	<td><?PHP echo $row['date_ex']; ?></td>
	<td><form method="POST" action="supprimerfidelite.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierfidelite.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


