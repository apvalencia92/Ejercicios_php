<?php

namespace Styde;

require '../vendor/autoload.php';


Translator::setLanguage(new English());


Log::setLogger(new HtmlLogger());


$ramm = Unit::createSoldier('Ramm')
	->setWeapon(new Weapons\FireBow)
	->setArmor(new Armors\SilverArmor());

$silence = new Unit('Silence', new Weapons\FireBow);


$silence->attack($ramm);


$silence->attack($ramm);

$ramm->attack($silence);
