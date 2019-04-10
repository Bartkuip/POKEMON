<?php 

// heeft een naam, energytype, hitpoints
class Pikachu extends Pokemon{
	public $pokeName = 'Pikachu';
	public $pokeHealth = '60';

	public function __construct($pokeNickname, $pokeCurrentHP)
	{
    $this->pokeWeakness = new Weakness('fireType', 1.5);
    $this->pokeResistance = new Resistance('fightingType', 20);

	$this->pokeMove1 = new Moveset('Thundershock', 20);
    $this->pokeMove2 = new Moveset('Thunderbolt', 50);
    $this->electricType = new Energytype('electricType');
    parent::__construct($pokeNickname, $this->pokeName, $this->electricType, $this->pokeHealth, $currentPokeHP, new Weakness('fireType', 1.5), $this->pokeResistance, $this->pokeMove1 , $this->pokeMove2);
}

}