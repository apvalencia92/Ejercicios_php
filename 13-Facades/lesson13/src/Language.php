<?php


namespace Styde;


abstract class Language
{
    protected $messages;

    public function getMessages()
    {
        return $this->messages;
    }

}

