<?php

class Weakness
{
  // hij pakt de naam van de pokemon en applied de multiplier aan de damage
  public $nickname;
  public $multiplier;

  public function __construct($nickname, $multiplier)
  {
    $this->nickname = $nickname;
    $this->multiplier = $multiplier;
  }
}
