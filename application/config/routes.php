<?php

return [
	// MainController
	'portfolio' => [
		'controller' => 'portfolio',
		'action' => 'index',
	],
	'' => [
		'controller' => 'portfolio',
		'action' => 'index',
	],
	'portfolio/{page:\d+}' => [
		'controller' => 'portfolio',
		'action' => 'index',
	],
];