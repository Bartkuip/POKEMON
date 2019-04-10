<?php

class Pokemon {

	public $pokeNickname;
	public $pokeName;
	public $pokeType;
	public $pokeHP;
	public $currentPokeHP;
	public $pokeWeakness;
	public $pokeResistance;
	public $pokeMoves;

	public function __construct($pokeNickname, $pokeName, $pokeType, $pokeHP, $pokeCurrentHP, $pokeWeakness, $pokeResistance, $pokeMoves) {
		$this->pokeNickname = $pokeNickname;
		$this->pokeName = $pokeName;
		$this->pokeType = $pokeType;
		$this->pokeHP = $pokeHP;
		$this->currentPokeHP = $currentPokeHP;
		$this->pokeWeakness = $pokeWeakness;
		$this->pokeResistance = $pokeResistance;
		$this->pokeMoves = $pokeMoves;

	}
}