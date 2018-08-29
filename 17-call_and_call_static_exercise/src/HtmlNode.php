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

	public static function __callStatic($method, $args = [])
	{
		return new HtmlNode($method,static::isArgument($args[0]));
	}


	public function __call($method, array $args = [])
	{
		if (isset($args[0])) {
			$this->attributes[$method] = $args[0];
		}

		return $this;
	}


	public static function isArgument($args){
		if(isset($args)){
			return $args;
		}
	}

	public function render()
	{
		$result = "<{$this->tag} {$this->renderAttributes()}>";
		return $this->isThereContent($this->content,$result);

	}

	public function isThereContent($content,$result)
	{
		if ($content != null) {
			return $result .= $this->content . "</{$this->tag}>";
		}

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