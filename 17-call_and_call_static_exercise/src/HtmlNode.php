<?php

namespace Styde;

class HtmlNode
{
    protected $tag;
    protected $content;
    protected $attributes = [];

    public function __construct($tag, $content = null, $attributes = [])
    {
        $this->tag = $tag;
        $this->content = $content;
        $this->attributes = $attributes;
    }


    public static function __callStatic($method, array $args)
    {

        $content = $args[0] ?? null;
        $attribute = $args[1] ?? null;
        $valueAttr = $args[2] ?? null;
        return new HtmlNode($method, $content, [$attribute => $valueAttr]);
    }

    public function __call($method, array $args = [])
    {
        $this->validateArgs($method, $args[0]);
        $this->attributes[$method] = $args[0];
        return $this;
    }

    public function validateArgs($method, $args)
    {
        if (!isset($args)) {
            throw new \Exception("You forgot to pass the value to the attribute $method");
        }

    }

    public function render()
    {
        $result = "<{$this->tag} {$this->renderAttributes()}>";
        if ($this->content != null) {
            $result .= $this->content;
        }

        return $result .= "</{$this->tag}>";
    }

    protected function renderAttributes()
    {
        $result = "";
        foreach ($this->attributes as $name => $value) {
            $result .= sprintf(' %s="%s"', $name, $value);
        }

        return $result;
    }
}