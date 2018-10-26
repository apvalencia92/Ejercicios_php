<?php

namespace Styde\Languages;

use Styde\Language;


class Spanish extends Language
{
    protected $messages = [
        'BasicBowAttack' => ':unit dispara una flecha :opponent',
        'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
        'CrossBowAttack' => ':unit dispara una flecha a :opponent',
        'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
        'Life' => ':unit tiene :hp de vida',
        'Die' => ':unit muere'
    ];

}