<?php 
    ob_start();
    $bdd = new PDO('mysql:host=mysql;dbname=mediathèque;charset=utf8','root','root');

    $requestRead = $bdd->prepare('SELECT Titre, Auteur, Genre, Duree FROM media ORDER BY id DESC LIMIT 3');
    $requestRead->execute(array());

    // if (!empty($_POST['nom']) && !empty($_POST['prenom'] )){

    //     $nom = $_POST['nom'];
    //     $prenom = $_POST['prenom'];
    
    //     $RequestCreate = $bdd->prepare('INSERT INTO users(nom,prenom)
    //                                     VALUES(?,?)');
    //     $data = $RequestCreate->execute(array($nom,$prenom));
    // }

    //     while ($data = $requestRead->fetch()) {
    //     echo $data['Titre'] . ' ' 
    //     . $data['Auteur'] . ' '
    //     . $data['Genre'] . ' '
    //     . $data['Duree'] . ' ';
    // };  
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

    <h1>3 Derniers films</h1>
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
    <p> Vous voulez rajoute un film ?</p>
    <button><a href="film.php">Cliquez ici !</a></button>
    <p>Envie de voir touts les films ?</p>
    <button><a href="listes_films.php">Cliquez ici !</a></button>
    <p>Pas encore inscrit ?</p>
    <button><a href="Incription.php">Cliquez ici !</a></button>

</body>

</html>