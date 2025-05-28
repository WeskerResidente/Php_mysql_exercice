<?php 
    ob_start();
    if (!empty($_POST['nom']) && !empty($_POST['prenom'] && !empty($_POST['MdP'] ))){

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mdp = sha1($_POST['MdP']);
    
    $RequestCreate = $bdd->prepare('INSERT INTO users(nom,prenom,MdP)
                                    VALUES(?,?,?)');
    $data = $RequestCreate->execute(array($nom,$prenom,$mdp));
    }
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
        <input type="password" name="MpD" placeholder="Mot de passe">
        <button type="submit">Enregistrer</button>
        
        
    </form>
    <p>Revenir à l'accueil</p>
    <button><a href="index.php">Cliquez ici !</a></button>
</body>
</html>