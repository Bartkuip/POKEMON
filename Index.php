<?php 

require 'Attack.php';
require 'Energytype.php';
require 'Weakness.php';
require 'Resistance.php';
require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';


$Pikachu = new Pikachu("Pika", 60);
$Charmeleon = new Charmeleon("Char", 60);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <main>
      <section>
        <img src="Pikachu.png" alt="Pikachu" width="200px" height="200px">
        <p>Pokemon: <?= $Pikachu->pokeNickname ?><br/>Pokemon: <?= $Pikachu->pokeName ?></p>
      </section>
      <section>
        <img src="Charmeleon.jpg" alt="Charmeleon" height="200px" width="200px">
        <p>Pokemon: <?= $Charmeleon->pokeNickname ?><br/>Pokemon: <?= $Charmeleon->pokeName ?></p>
      </section>
    </main>
</body>
</html>