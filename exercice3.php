<?php
//exercice 3
$nombre;
$tentative;
$nombre = -1;
$tentative = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $tentative = $_POST['tentative'];

    $tentative++;
    
    if ($nombre % 2 != 0) {
        echo "Le nombre n'est pas pair <br>";
    }
    if ($nombre % 3 != 0) {
        echo "Le nombre n'est pas divisible par 3 <br>";
    }

    if ($nombre % 2 == 0 && $nombre % 3 == 0) {
        echo "Le nombre " . $nombre . " est un multiple de 3 et est pair";
    } else {
        echo "Nombre de tentative: " . $tentative . "<br>";
    }
}
?>

<form method="POST" action="">
    <label for="nombre">Saisir un nombre pair et divisible par 3:</label>
    <input type="number" name="nombre" id="nombre" required>
    <input type="hidden" name="tentative" value="<?= $tentative; ?>">
    <button type="submit">Soumettre</button>
</form>