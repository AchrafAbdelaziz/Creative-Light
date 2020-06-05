<?PHP
include "../entities/ligne.php";
include "../core/ligneC.php";
$ligne=new ligne(75757575,75757575,'25D',20);
$lignerC=new ligneC();
$lignerC->afficherligne($ligne);
echo "****************";
echo "<br>";
echo "idpanier:".$ligne->getidpanier();
echo "<br>";
echo "idproduit:".$ligne->getidproduit();
echo "<br>";
echo "prix:".$ligne->getprix();
echo "<br>";
echo "qt:".$ligne->getqt();
echo "<br>";



?>