<?php 

// heeft een naam, energytype, hitpoints
class Charmeleon extends Pokemon{
	public $pokeName = 'Charmeleon';
	public $pokeHealth = '60';

	public function __construct($pokeNickname, $pokeCurrentHP)
	{
    $this->pokeWeakness = new Weakness('waterType', 2);
    $this->pokeResistance = new Resistance('electricType', 10);

	$this->pokeMove1 = new Moveset('Headbutt', 10);
    $this->pokeMove2 = new Moveset('Flare', 30);
    $this->electricType = new Energytype('electricType');
    parent::__construct($pokeNickname, $this->pokeName, $this->electricType, $this->pokeHealth, $currentPokeHP, new Weakness('waterType', 2), $this->pokeResistance, $this->pokeMove1 , $this->pokeMove2);
}

}