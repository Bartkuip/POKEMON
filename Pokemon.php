<?php

class Pokemon {

	public $nickname;
	private $name;
	private $type;
	public $pokeHP;
	public $currentPokeHP;
	private $weakness;
	private $resistance;
	private $moves;
	// dit maakt de pokemon aan met nickname, naam, het type, hp, hp dat de pokemon nu heeft, zwakte, resistentie, aanvallen
	protected function __construct($nickname, $name, $type, $pokeHP, $currentPokeHP, $weakness, $resistance, $moves) {
		$this->nickname = $nickname;
		$this->name = $name;
		$this->type = $type;
		$this->pokeHP = $pokeHP;
		$this->currentPokeHP = $currentPokeHP;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
		$this->moves = $moves;

	}
}