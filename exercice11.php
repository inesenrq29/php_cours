<?php
//exercice 11
$prix = [5, 50, 23, 11];
$quantité = [10, 1, 4, 3];
$total;

$total = 0;
for ($i = 0; $i < count($prix)-1; $i++) {
    $total += $prix[$i] * $quantité[$i];
}
echo "Le montant total est de " . $total;
?>