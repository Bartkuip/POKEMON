<?php

class Moveset
{
    public $pokeAttack;
    public $pokeDamage;

    public function __construct($pokeAttack, $pokeDamage)
    {
        $this->pokeAttack = $pokeAttack;
        $this->pokeDamage = $pokeDamage;
    }
}
