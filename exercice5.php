<?php
//exercice 5
define("DOLLAR", 1.22);
define("ROUBLES", 91.14);
define("YUANS", 7.89);
define("LIVRES", 0.89);

$valeurInitiale = 0;
$valeurConvertie = 0;
$devise = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valeurInitiale = (float) $_POST["valeurInitiale"];
    $devise = strtolower(trim($_POST["devise"]));
    
    switch ($devise) {
        case "dollar":
        case "$":
            $valeurConvertie = $valeurInitiale * DOLLAR;
            break;
        case "rouble":
        case "roubles":
            $valeurConvertie = $valeurInitiale * ROUBLES;
            break;
        case "yuan":
        case "yuans":
            $valeurConvertie = $valeurInitiale * YUANS;
            break;
        case "livre":
        case "livres":
            $valeurConvertie = $valeurInitiale * LIVRES;
            break;
        default:
            $messageErreur = "La devise saisie n'existe pas";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur de devise</title>
</head>
<body>
    <h1>Convertisseur de devise</h1>

    <form method="POST">
        <label for="valeurInitiale">Saisir la somme en euro:</label>
        <input type="number" step="0.01" name="valeurInitiale" value="<?= htmlspecialchars($valeurInitiale) ?>" required>
        <br>
        
        <label for="devise">Saisir la devise (dollar, rouble, yuan, livre):</label>
        <input type="text" name="devise" value="<?= htmlspecialchars($devise) ?>" required>
        <br>
        
        <input type="submit" value="Convertir">
    </form>

    <?php if ($valeurConvertie > 0): ?>
        <p><?= $valeurInitiale ?> € = <?= $valeurConvertie ?> <?= ucfirst($devise) ?></p>
    <?php elseif (isset($messageErreur)): ?>
        <p style="color:red;"><?= $messageErreur ?></p>
    <?php endif; ?>
</body>
</html>