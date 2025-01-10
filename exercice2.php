<?php
//exercice 2
$aleatoireVariable = rand(0,20);
echo "Nombre: " . $aleatoireVariable . "<br>";
if ($aleatoireVariable<7) {
    echo "Bonjour";
} else if($aleatoireVariable<14) {
    echo "Salut";
} else {
    echo "Hello";
}
?>