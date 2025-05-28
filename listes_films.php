<?php 
    ob_start();
    $bdd = new PDO('mysql:host=mysql;dbname=mediathèque;charset=utf8','root','root');
    $requestRead = $bdd->prepare('SELECT Titre, Auteur, Genre, Duree FROM media ORDER BY id DESC');
    $requestRead->execute(array());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Touts les films</h1>
    <ul>
        <?php while ($data = $requestRead->fetch()): ?>
            <li>
                <div>
                    <?= htmlspecialchars($data['Titre']) ?>
                </div>
                <div>
                    <p>Auteur :<span> <?= htmlspecialchars($data['Auteur']) ?></p>
                    <p>Genre : <span> <?= htmlspecialchars($data['Genre']) ?></p>
                    <p>Durée :<span> <?= htmlspecialchars($data['Duree']) ?></p>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
        <p>Revenir à l'accueil</p>
    <button><a href="index.php">Cliquez ici !</a></button>
</body>
</html>