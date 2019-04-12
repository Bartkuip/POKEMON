<?php 

require 'Attack.php';
require 'Energytype.php';
require 'Weakness.php';
require 'Resistance.php';
require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';


$Pikachu = new Pikachu("Ash's Pikachu", 60);
$Charmeleon = new Charmeleon("Wild Charmeleon", 60);

echo $Charmeleon->Attack($Pikachu, 'pokeMove2');
echo $Pikachu->Attack($Charmeleon, 'pokeMove2');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pokemon battle</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <main>
      <section id="charmeleon">
        <div id="bar1">Nickname: <?= $Charmeleon->pokeNickname ?><br>Pokemon: <?= $Charmeleon->pokeName ?><br>Health: <?= $Charmeleon->currentPokeHP ?></div>
        <img src="Charmeleon.jpg" alt="Charmeleon" height="200px" width="200px">
      </section>
      <section id="pikachu">
        <div id="bar2">Nickname: <?= $Pikachu->pokeNickname ?><br>Pokemon: <?= $Pikachu->pokeName ?><br>Health: <?= $Pikachu->currentPokeHP ?></div> <img src="Pikachu.png" alt="Pikachu" width="200px" height="200px">
      </section>
    </main>
</body>
</html>