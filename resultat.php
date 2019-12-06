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
<table>
    <tr>
        <td>Joueur</td>
        <td>Tour 1 </td>
        <td>Tour 2</td>
        <td>Tour 3</td>
        <td>Tour 4</td>
        <td>Tour 5 </td>
        <td>TOTAL</td>
    </tr>
<?php
     $req = $bdd->query('SELECT * FROM jeux ORDER BY total DESC');
      
     while($score= $req->fetch()){
         $total = $score['total'];
?>
<tr>
<td><?php echo $score['nom']; ?></td><td><?php echo $score['t1']; ?></td><td><?php echo $score['t2']; ?></td><td><?php echo $score['t3']; ?></td><td><?php echo $score['t4']; ?></td><td><?php echo $score['t5']; ?></td>
<td><?php echo $total; ?></td>
</tr>
     <?php 
    }?>  
     </table> 
</body>
</html>