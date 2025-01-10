<?php
//exercice 4
$a;
$b;
$c; 
$plusPetit = 0;
$plusGrand = 0;

$a = rand(1,20);
$b = rand(1,20);
$c = rand(1,20);
echo "- nombre a vaut" . $a . "-nombre b vaut" . $b . "-nombre c vaut" . $c;
if (($a<=$b) && ($a<=$c)) {
    $plusPetit = $a; 
} elseif ($b<=$a) {
        $plusPetit = $b;
} else {
            $plusPetit = $c;
        }
    
if($a>=$b && $a>=$c) {
    $plusGrand = $a; }
    elseif($b>=$a){
        $plusGrand = $b; }
        else {
            $plusGrand = $c;
        }
echo "le plus petit est: " . $plusPetit;
echo "le plus grand est: " . $plusGrand;
?>