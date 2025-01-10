<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Utilisateur</title>
</head>
<body>
    <h1>Connexion</h1>
    <form method="post" action="">
        <label for="login">Login :</label>
        <input type="text" id="login" name="login" required>
        <br><br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Se connecter</button>
    </form>

    <?php
    //exercice 12
    $listeUtilisateur = [
        ["Tya", "test1"],
        ["Milo", "test2"],
        ["Lili", "test3"]
    ];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $log = trim($_POST['login']);
        $mdp = trim($_POST['password']);
        $connecte = estConnecte($listeUtilisateur, $log, $mdp);

        if ($connecte) {
            echo "<h2>Bienvenue, $log ! Vous êtes connecté.</h2>";
        } else {
            echo "<h2>Erreur : combinaison login/mot de passe incorrecte. Veuillez réessayer.</h2>";
        }
    }

    function estConnecte($utilisateurs, $login, $password) {
        foreach ($utilisateurs as $utilisateur) {
            if ($login === $utilisateur[0] && $password === $utilisateur[1]) {
                return true;
            }
        }
        return false;
    }
    ?>
</body>
</html>