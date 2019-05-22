<?php 

require 'Attack.php';
require 'Energytype.php';
require 'Weakness.php';
require 'Resistance.php';
require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';


// maakt pikachu en charmeleon aan
$Charmeleon = new Charmeleon("Wild Charmeleon", 60);
$Pikachu = new Pikachu("Ash's Pikachu", 60);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Pokemon battle</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      <?= $Charmeleon->Attack($Pikachu, 'move2'); ?>
      <?= $Pikachu->Attack($Charmeleon, 'move2'); ?>
    <main>
      <section id="charmeleon">
        <div id="bar1">Nickname: <?= $Charmeleon->nickname ?><br>Pokemon: <?= $Charmeleon->name ?><br>Health: <?= $Charmeleon->currentPokeHP?></div>
        <img src="Charmeleon.jpg" alt="Charmeleon" height="200px" width="200px">
      </section>
      <section id="pikachu">
        <div id="bar2">Nickname: <?= $Pikachu->nickname ?><br>Pokemon: <?= $Pikachu->name ?><br>Health: <?= $Pikachu->currentPokeHP?></div> <img src="Pikachu.png" alt="Pikachu" width="200px" height="200px">
      </section>
    </main>
</body>
</html>