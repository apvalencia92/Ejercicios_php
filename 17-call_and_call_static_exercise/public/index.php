<?php

namespace Styde;

require "../vendor/autoload.php";


$node = HtmlNode::textarea('styde','class','form-control')
	->name('content')
	->id('contenido');

echo $node->render();
