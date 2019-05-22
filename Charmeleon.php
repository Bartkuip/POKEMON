<?php 

class Charmeleon extends Pokemon{
	public $name = 'Charmeleon';
	public $pokeHP = '60';

	public function __construct($nickname, $currentPokeHP)
	{
    $this->move1 = new Moveset('Headbutt', 10);
    $this->move2 = new Moveset('Flamethrower', 30);
    $this->weakness = new Weakness('waterType', 2);
    $this->resistance = new Resistance('electricType', 10);
    $this->energy = new Energytype('electricType');
    parent::__construct($nickname, $this->name, $this->electricType, $this->pokeHP, $currentPokeHP, new Weakness('waterType', 2), $this->resistance, $this->move2);
}
  public function Attack($target, $attack)
  {
    $damage = $this->$attack->damage;
    if ($this->energy->type === $target->weakness->nickname) {
      $damage = $damage * $target->weakness->multiplier;
    }
    if ($this->energy->type === $target->pokeResistance->nickname) {
      $damage = $damage - $target->resistance->resistance;
    }

    $pokeHP = $target->pokeHP - $damage;

    return "<p>" . $target->nickname . " has taken " . $damage . " damage from " . $this->$attack->attack . ". It was super effective. </p>" . "<p>" . $this->nickname . "'s health is now: " . $pokeHP . ".</p>";
  }
}