<?PHP
include "../entities/facture.php";
include "../core/factureC.php";
$facture=new facture(15,14,5/5/2020,554);
$facturerC=new factureC();
$facturerC->afficherfacture($facture);
echo "****************";
echo "<br>";
echo "id:".$facture->getid_fac();
echo "<br>";
echo "id_client:".$facture->getid_client();
echo "<br>";
echo "date1:".$facture->getdate1();
echo "<br>";
echo "valeur:".$facture->getvaleur();
echo "<br>";
 



?>