<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calcul de Factorielle</title>
</head>
<body>
    <h1>Calcul de la Factorielle</h1>
    <form method="post" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" id="nombre" name="nombre" min="0" required>
        <button type="submit">Calculer</button>
    </form>

    <?php
    //exercice 9
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $saisie = intval($_POST['nombre']);
        echo "<h2>Résultats</h2>";
        echo "<p>La factorielle de $saisie (Version boucle) : " . factorielleBoucle($saisie) . "</p>";
        echo "<p>La factorielle de $saisie (Version récursive) : " . factorielleRecursive($saisie) . "</p>";
    }

    function factorielleBoucle($saisie) {
        $resultat = 1;
        for ($cpt = 1; $cpt <= $saisie; $cpt++) {
            $resultat *= $cpt;
        }
        return $resultat;
    }

    function factorielleRecursive($saisie) {
        if ($saisie <= 1) {
            return 1;
        } else {
            return $saisie * factorielleRecursive($saisie - 1);
        }
    }
    ?>
</body>
</html>