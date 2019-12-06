<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?php
require 'bdd.php';
include ("nav.php");
?>
<body>
    <?php
     $req = $bdd->query('SELECT * FROM jeux');
      
     while($score= $req->fetch()){
?>
<form action="" method="post">
 <p><?php echo $score['nom'];?></p> 
<input type="number" placeholder="tour 1" name="<?php echo $score['id'] ;?>-t1">
<input type="number" placeholder="tour 2"name="<?php echo $score['id'];?>-t2" id="">
<input type="number" placeholder="tour 3"name="<?php echo $score['id'];?>-t3" id="">
<input type="number" placeholder="tour 4" name="<?php echo $score['id'];?>-t4" id="">
<input type="number" placeholder="tour 5" name="<?php echo $score['id'];?>-t5" id="">


<?php



     }
    
    
    ?>
    <p><input type="submit" value="enregistrer"></p>
    </form>
<?php 


foreach($_POST as $list=> $el){
    if ( isset($list)){
  
    echo "element=>".$el;
    $tri = explode('-',$list); // séparation entre l'id et le n°de tour
    $tour = $list[2].$list[3];// recuperation du n° de tour
    //echo $tri;
    echo "LISTE (id)=>".$list[0]."list tour".$tour;

    $req = $bdd->prepare('UPDATE jeux SET '.$tour.' ='.$el.'   WHERE id = '.$list[0].' ');
$req->execute(array($el));
$bdd->exec('UPDATE jeux set total = t1 +t2 +t3 +t4+t5 WHERE id ='.$list[0].' ');
    }
}

//$req = $bdd->prepare('UPDATE jeux set t1 ='$score['id']t1',t2='$score['id']t2',t3 = '$score['id']t3',t4 = '$score['id']t4',t5 = '$score['id']t5' WHERE id='$score['id']);
//$req->execute(array($el));

?>
</body>
</html>