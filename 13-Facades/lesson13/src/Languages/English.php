<?php

namespace Styde\Languages;

use Styde\Language;

class English extends Language
{

    protected $messages = [
        'BasicBowAttack' => ':unit shoot a arrow :opponent',
        'BasicSwordAttack' => ':unit attack with to sword a :opponent',
        'CrossBowAttack' => ':unit shoot an arrow a :opponent',
        'FireBowAttack' => ':unit shoot an fire arrow to :opponent',
        'Life' => ':unit has :hp of life',
        'Die' => ':unit dead'
    ];


}