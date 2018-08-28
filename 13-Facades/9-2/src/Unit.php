<?php

namespace Styde;


class Unit
{
    protected $hp = 40;
    protected $name;
    protected $weapon;
    protected $armor;
    protected $logger;

    public function __construct($name, Weapon $weapon,$logger)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = new Armors\MissingArmor();
        $this->logger = $logger;

    }

    public static function createSoldier($name,$logger){
    	$soldier = new Unit($name,new Weapons\BasicSword,$logger);
    	$soldier->setArmor(new Armors\BronzeArmor());
    	return $soldier;
	}

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
        return $this;
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function move($direction)
    {
        $this->logger->info("{$this->name} camina hacia $direction");
    }

    public function attack(Unit $opponent)
    {
        $attack = $this->weapon->createAttack();

		$this->logger->info($attack->getDescription($this, $opponent));

        $opponent->takeDamage($attack);
    }

    public function takeDamage(Attack $attack)
    {
        $this->hp = $this->hp - $this->armor->absorbDamage($attack);

		$this->logger->info("{$this->name} ahora tiene {$this->hp} puntos de vida");

        if ($this->hp <= 0) {
            $this->die();
        }
    }

    public function die()
    {
		$this->logger->info("{$this->name} muere");

        exit();
    }
}
