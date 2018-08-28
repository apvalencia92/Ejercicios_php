<?php


namespace Styde;


class Spanish implements Language
{
	protected $messages = [

		'BasicBowAttack' => ':unit dispara una flecha :opponent',
		'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
		'CrossBowAttack' => ':unit dispara una flecha a :opponent',
		'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
		'TakeDamage' => ':name ahora tiene :hp puntos de vida',
		'Die'	=> ':name muere'
	];

	public function getMessage()
	{
		return $this->messages;
	}


}