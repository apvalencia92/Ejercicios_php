<?php


namespace Styde;


class English implements Language
{
	protected $messages = [
		'BasicBowAttack' => ':unit shoot an arrow :opponent',
		'BasicSwordAttack' => ':unit attack with the sword :opponent',
		'CrossBowAttack' => ':unit shoot an arrow to :opponent',
		'FireBowAttack' => ':unit shoot a fire arrow at :opponent',
		'TakeDamage' => ':name now it :hp points of life',
		'Die'	=> ':name death'
	];


	public function getMessage(){
		return $this->messages;
	}

}