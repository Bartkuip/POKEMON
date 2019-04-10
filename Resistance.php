<?php

class Resistance
{
  public $pokeNickname;
  public $pokeResistance;

  public function __construct($pokeName, $pokeResistance)
  {
    $this->pokeNickname = $pokeNickname;
    $this->pokeResistance = $pokeResistance;
  }
}
