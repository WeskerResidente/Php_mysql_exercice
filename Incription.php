<?php 
    ob_start();
    if (!empty($_POST['nom']) && !empty($_POST['prenom'] )){

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    
    $RequestCreate = $bdd->prepare('INSERT INTO users(nom,prenom)
                                    VALUES(?,?)');
    $data = $RequestCreate->execute(array($nom,$prenom));
    }

    while ($data = $requestRead->fetch()) {
    echo $data['Titre'] . ' ' 
    . $data['Auteur'] . ' '
    . $data['Genre'] . ' '
    . $data['Duree'] . ' ';
    };  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Inscription</h2>
    <form action="Incription.php" method="post">
        <p>Nom</p>
        <input type="text" name="nom" placeholder="Nom">
        <p>Prenom</p>
        <input type="text" name="prenom" placeholder="Prénom">
        <p>Mot de passe</p>
        <input type="text" name="Mdp" placeholder="Mot de passe">
        
        
    </form>
    <p>Revenir à l'accueil</p>
    <button><a href="index.php">Cliquez ici !</a></button>
</body>
</html>