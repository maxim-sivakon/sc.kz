<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'script.css',
	'js' => 'script.js',
	'rel' => [
		'ui.qrauthorization',
		'landing.widget',
		'main.core',
	],
	'skip_core' => false,
];