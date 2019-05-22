<?php 

class Pikachu extends Pokemon{
	public $name = 'Pikachu';
	public $pokeHP = '60';

	public function __construct($nickname, $currentPokeHP)
	{
    // pikachu abilities dat zijn thundershock en thunderbolt, zijn weakness is  fire en die multiplied met 1.5x, hij resist 20 fighting damage en hij is electric type.
    $this->move1 = new Moveset('Thundershock', 20);
    $this->move2 = new Moveset('Thunderbolt', 50); 
    $this->weakness = new Weakness('fireType', 1.5);
    $this->resistance = new Resistance('fightingType', 20); 
    $this->energy = new Energytype('electricType');
    parent::__construct($nickname, $this->name, $this->electricType, $this->pokeHP, $currentPokeHP, new Weakness('fireType', 1.5), $this->resistance, $this->move2);
}
  // berekend de attack met weakness en resistance
  public function Attack($target, $attack)
  {
    $damage = $this->$attack->damage;
    if ($this->energy->type === $target->pokeWeakness->nickname) {
      $damage = $damage * $target->pokeWeakness->multiplier;
    }
    if ($this->energy->type === $target->resistance->nickname) {
      $damage = $damage - $target->resistance->resistance;
    }

    // slaat hp op
    $pokeHP = $target->pokeHP - $damage;
    return "<p>" . $target->nickname . " has taken " . $damage . " damage from " . $this->$attack->attack . ". It was super effective. </p>" . "<p>" . $this->nickname . "'s health is now: " . $pokeHP . ".</p>";
  }
}