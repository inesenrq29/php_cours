<?php
//exercice 6
const TVA = 0.2;
$prix = 0;
$choix = 0;
$nombreDeProduits = 0;
$totalHT = 0;
$totalTTC = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $choix = (int)$_POST['produit'];
    $nombreDeProduits = (int)$_POST['nombre'];

    switch ($choix) {
        case 1:
            $prix = 400;
            break;
        case 2:
            $prix = 700;
            break;
        case 3:
            $prix = 200;
            break;
        case 4:
            $prix = 900;
            break;
        default:
            echo "Produit inexistant\n";
    }

    $totalHT = $prix * $nombreDeProduits;
    $totalTTC = $totalHT * (1 + TVA);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Achat</title>
</head>
<body>
    <h1>Formulaire d'Achat</h1>

    <form method="POST">
        <label for="produit">Choisissez un produit :</label>
        <select name="produit" id="produit" required>
            <option value="1">TV (400 euros)</option>
            <option value="2">Ordinateur (700 euros)</option>
            <option value="3">Téléphone (200 euros)</option>
            <option value="4">Portable (900 euros)</option>
        </select><br><br>

        <label for="nombre">Combien de produits voulez-vous ?</label>
        <input type="number" name="nombre" id="nombre" required min="1"><br><br>

        <button type="submit">Calculer</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
        <h2>Résumé de votre achat</h2>
        <p>Produit choisi: 
            <?php 
                switch ($choix) {
                    case 1:
                        echo "TV";
                        break;
                    case 2:
                        echo "Ordinateur";
                        break;
                    case 3:
                        echo "Téléphone";
                        break;
                    case 4:
                        echo "Portable";
                        break;
                }
            ?>
        </p>
        <p>Prix unitaire: <?php echo $prix; ?> euros</p>
        <p>Quantité: <?php echo $nombreDeProduits; ?></p>
        <p>Total HT: <?php echo $totalHT; ?> euros</p>
        <p>Total TTC: <?php echo $totalTTC; ?> euros</p>
    <?php endif; ?>
</body>
</html>