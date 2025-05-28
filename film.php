<?php 
    ob_start();
    $bdd = new PDO('mysql:host=mysql;dbname=mediathèque;charset=utf8','root','root');
    if (!empty($_POST['Titre']) && !empty($_POST['Auteur']) && !empty($genre = $_POST['Genre']) && !empty($_duree = $_POST['Duree']) 
    && !empty($_POST['Synopsis'])){

        $auteur = htmlspecialchars($_POST['Auteur']) ;
        $film = htmlspecialchars($_POST['Titre']);
        $genre = htmlspecialchars($_POST['Genre']);
        $duree = htmlspecialchars($_POST['Duree']);
        $synopsis = htmlspecialchars($_POST['Synopsis']);
    
        $RequestCreate = $bdd->prepare('INSERT INTO media(Auteur,Duree,Genre, Synopsis, Titre)
                                        VALUES(?,?,?,?,?)');
        $data = $RequestCreate->execute(array($auteur,$duree,$genre,$synopsis,$film));
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
            
    <h3>Ajouter un film</h3>
    <form action="film.php" method="post">
            <p>Film</p>
            <input type="text" name="Titre">
            <p>Auteur</p>
            <input type="text" name="Auteur" >
            <p>Durée</p>
            <input type="number" name="Duree" >
            <p>Genre</p>
            <input type="text" name="Genre" >
            <p>Synopsis</p>
            <input type="text" name="Synopsis" >
            <br>
            <br>
            <button>Envoyer</button>                   
    </form>
    <br>
    <a href="index.php">Revenir à l'accueil</a>

</body>
</html>
