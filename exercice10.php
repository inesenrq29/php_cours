<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de cercle</title>
</head>
<body>
    <h1>Calcul du Périmètre ou de l'Aire d'un Cercle</h1>
    <form method="post" action="">
        <label for="rayon">Entrez le rayon du cercle :</label>
        <input type="number" id="rayon" name="rayon" min="0" step="0.01" required>
        <br><br>
        <label for="choix">Choisissez une option :</label>
        <select id="choix" name="choix" required>
            <option value="1">Calculer le périmètre</option>
            <option value="2">Calculer l'aire</option>
        </select>
        <br><br>
        <button type="submit">Calculer</button>
    </form>

    <?php
    //exercice 10
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $rayon = floatval($_POST['rayon']);
        $choix = intval($_POST['choix']);

        if ($choix == 1) {
            echo "<h2>Résultat</h2>";
            echo "<p>Le périmètre du cercle avec un rayon de $rayon est : " . retournePerimetre($rayon) . "</p>";
        } elseif ($choix == 2) {
            echo "<h2>Résultat</h2>";
            echo "<p>L'aire du cercle avec un rayon de $rayon est : " . retourneAire($rayon) . "</p>";
        } else {
            echo "<p>Choix invalide.</p>";
        }
    }

    function retournePerimetre($rayon) {
        return 2 * $rayon * pi(); 
    }

    function retourneAire($rayon) {
        return ($rayon * $rayon) * pi(); 
    }
    ?>
</body>
</html>
