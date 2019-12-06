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
<h1>Inscription</h1>

<form action="" method="post">
<input type="text"name="nom">
<input type="submit" value="inscrire">
</form>
<?php
if(isset($_POST['nom'])){
$req = $bdd->prepare('INSERT INTO jeux (nom) VALUES(?)');
$req->execute(array($_POST['nom']));
}
?>
</body>
</html>