<?php

namespace Styde;

class Attack
{
    protected $damage;
    protected $magical;
    protected $key;

    public function __construct($damage, $magical, $key)
    {
        $this->damage = $damage;
        $this->magical = $magical;
        $this->key = $key;
    }

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return Translator::get($this->key, [
            'unit' => $attacker->getName(),
            'opponent' => $opponent->getName(),
        ]);
    }

    public function messages($key, Unit $attacker, $hp = null)
    {

        return Translator::get($key, [
            'unit' => $attacker->getName(),
            'hp' => $hp,
        ]);
    }



    public function getDamage()
    {
        return $this->damage;
    }

    public function isMagical()
    {
        return $this->magical;
    }

    public function isPhysical()
    {
        return ! $this->isMagical();
    }
}