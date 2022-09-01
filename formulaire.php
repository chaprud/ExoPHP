<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <form action="" method="post">
        <p>Prix Article HT:</p>
        <p><input type="nombre" name="prixHt"></p>
        <p>Nombre d'article :</p>
        <p><input type="nombre" name="article"></p>
        <p>taux de TVA :</p>
        <p><input type="nombre" name="tva"></p>
        <p><input type="submit" value="calculer" name="calculer"></p>
    </form>
</body>
</html>
</body>
</html>

<?php

    if (!empty($_POST["prixHt"]) AND !empty($_POST["article"]) AND !empty($_POST["tva"])) {
        $total = $_POST["prixHt"]*$_POST["article"]*$_POST["tva"]; 
    echo "le montant est de :" .$total. "€"; 
    }

    

?>