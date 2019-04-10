<?php

class Weakness
{
  public $pokeNickname;
  public $pokeMultiplier;

  public function __construct($pokeNickname, $pokeMultiplier)
  {
    $this->pokeNickname = $pokeNickname;
    $this->pokeMultiplier = $pokeMultiplier;
  }
}
