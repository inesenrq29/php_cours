<?php 
//exercice 1
define("TVA", 20);
$prixHT = 10;

echo "Voici le prix: <br>";
echo $prixHT . "HT -" . ($prixHT * (1 + TVA/100)) . "TTC <br>";
?>