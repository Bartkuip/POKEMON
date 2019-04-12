<?php 

class Pikachu extends Pokemon{
	public $pokeName = 'Pikachu';
	public $pokeHP = '60';

	public function __construct($pokeNickname, $pokeCurrentHP)
	{
    $this->pokeMove1 = new Moveset('Thundershock', 20);
    $this->pokeMove2 = new Moveset('Thunderbolt', 50); 
    $this->pokeWeakness = new Weakness('fireType', 1.5);
    $this->pokeResistance = new Resistance('fightingType', 20); 
    $this->electricType = new Energytype('electricType');
    parent::__construct($pokeNickname, $this->pokeName, $this->electricType, $this->pokeHP, $currentPokeHP, new Weakness('fireType', 1.5), $this->pokeResistance, $this->pokeMove1 , $this->pokeMove2);
}
  public function Attack($pokeTarget, $pokeAttack)
  {
    $pokeDamage = $this->$pokeAttack->pokeDamage;
    if ($this->electricType->type === $pokeTarget->pokeWeakness->pokeNickname) {
      $pokeDamage = $pokeDamage * $pokeTarget->pokeWeakness->pokeMultiplier;
    }
    if ($this->electricType->type === $pokeTarget->pokeResistance->pokeNickname) {
      $pokeDamage = $pokeDamage - $pokeTarget->pokeResistance->pokeResistance;
    }
    if ($pokeDamage < 0) {
      $pokeDamage = 0;
    }
    $pokeHP = $pokeTarget->pokeHP - $pokeDamage;
    return "<p>" . $pokeTarget->pokeNickname . " has taken " . $pokeDamage . " damage from " . $this->$pokeAttack->pokeAttack . ". It was super effective. </p>" . "<p>" . $this->pokeNickname . "'s health is now: " . $pokeHP . ".</p>";
  }
}