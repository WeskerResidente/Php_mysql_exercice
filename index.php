<?php 
    ob_start();
    $bdd = new PDO('mysql:host=mysql;dbname=Noms;charset=utf8','root','root');
    $request = $bdd->prepare('SELECT prenom, nom FROM Noms');
    $request->execute(array());
    while ($data = $request->fetch()) {
        echo $data['nom'] . ' ' . $data['prenom'];
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
    
    
</body>
</html>