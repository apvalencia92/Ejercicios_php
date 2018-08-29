<?php

namespace Styde;

require "../vendor/autoload.php";

//$node = (new HtmlNode('textarea', 'Styde'))->name('content');
//
//echo $node->render();


$node = HtmlNode::textarea('Contenido abrumador')
	->name('content')
	->id('contenido');

echo $node->render();
