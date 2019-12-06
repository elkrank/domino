<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
require 'bdd.php';
include ("nav.php");
?>
<form action="" method="post">
<h1>Attention si vous cliquez sur le bouton tout les données du tournois vont être supprimer ! </h1>
<h2>A utiliser uniquement  avant de lancer un nouveau tournoi</h2>

<input name ='suppression'type="submit" value="SUPPRIMER TOUTES LES DONNEES DU TOURNOI">
<?php 
if (isset($_POST['suppression'])){
    $bdd->exec(' DELETE FROM jeux');
    echo'Toutes les données du tounois on était supprimées';
}
?>
</form>
</body>
</html>