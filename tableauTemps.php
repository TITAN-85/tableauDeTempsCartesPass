
<!DOCTYPE html>
<html lang="zxx">

<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Alexandru Candu 2295298">
    <link rel="stylesheet" href="style.css">
    <title>Projet Final</title>
</head>

<body>
    <h1 class="title">Projet Finale</h1>
    <nav>
    <a href="index.php" role="menuitem" aria-roledescription="menuitem">Accueil</a>

        <a href="tableauTemps.php" role="menuitem" aria-roledescription="menuitem">Tableau de Temps</a>
        <a href="pass.php" role="menuitem" aria-roledescription="menuitem">Mot de passe</a>
        <a href="cartes.php" role="menuitem" aria-roledescription="menuitem">Paquet de cartes</a>
    </nav>
    <div>
        <form class="formTt" action="tableauTemps-tablea.php" method="get">
            <input type="time" name="time" placeholder="Devenez l'heure">
            <input type="submit" value="Envoyez">
        </form>
    </div>
</body>

</html>