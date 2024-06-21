
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link href="./top.css" rel="stylesheet">
</head>
<body>
    <h2>Se connecter</h2>
    <form action="connexion_account.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Se connecter</button>
    </form>
    <a href="./register.php">Vous n'avez pas de compte ? Créez en un ici !</a><br>
    <a href="./top.php">Retour au menu principal</a>
</body>
</html>
