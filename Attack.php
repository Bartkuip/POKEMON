<?php

class Moveset
{
	// de move die word gebruikt door de pokemon (move 1 en 2)
    public $attack;
    // de damagge van de move die de user gebruikt op de target ook move 1 en 2
    public $damage;

    public function __construct($attack, $damage)
    {
        $this->attack = $attack;
        $this->damage = $damage;
    }
}
