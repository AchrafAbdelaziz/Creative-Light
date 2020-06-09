<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/fidelite.php";
include "../core/fideliteC.php";
if (isset($_GET['id'])){
	$fideliteC=new fideliteC();
    $result=$fideliteC->recupererfidelite($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$id_client=$row['id_client'];
		$nombre_p=$row['nombre_p'];
		$date_ex=$row['date_ex'];
?>
<form method="POST">
<table>
<caption>Modifier fidelite</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>id client</td>
<td><input type="number" name="id_client" value="<?PHP echo $id_client ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="text" name="nombre_p" value="<?PHP echo $nombre_p ?>"></td>
</tr>
<tr>
<td>date_ex</td>
<td><input type="number" name="date_ex" value="<?PHP echo $date_ex ?>"></td>
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
	$fidelite=new fidelite($_POST['id'],$_POST['id_client'],$_POST['nombre_p'],$_POST['date_ex']);
	$fideliteC->modifierfidelite($fidelite,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherfidelite.php');
}
?>
</body>
</HTMl>