<?php
//exercice 8
$tailleCarre = 0;
$resultat = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tailleCarre = (int)$_POST['taille'];
    
    if ($tailleCarre > 0) {
        $grandeLigne = str_repeat("*", $tailleCarre) . "<br>";
        $petiteLigne = "*" . str_repeat("&nbsp;", $tailleCarre - 2) . "*<br>";

        for ($k = 1; $k <= $tailleCarre; $k++) {
            if ($k == 1 || $k == $tailleCarre) {
                $resultat .= $grandeLigne;
            } else {
                $resultat .= $petiteLigne;
            }
        }
    } else {
        $resultat = "Veuillez entrer une taille supérieure à 0.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Générateur de Carré</title>
</head>
<body>
    <h1>Générateur de Carré</h1>
    <form method="POST">
        <label for="taille">Entrez la taille du carré :</label>
        <input type="number" name="taille" id="taille" min="1" required>
        <button type="submit">Dessiner</button>
    </form>

    <?php if (!empty($resultat)) : ?>
        <h2>Voici votre carré :</h2>
        <div class="carre">
            <?= $resultat ?>
        </div>
    <?php endif; ?>
</body>
</html>
