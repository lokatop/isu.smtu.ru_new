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
    'module/portfolio/edit_portfolio_practice' => [
        'controller' => 'portfolio',
        'action' => 'edit',
    ],
    'module/portfolio/edit_portfolio_practice/{id:\d+}' => [
        'controller' => 'portfolio',
        'action' => 'edit',
    ],
];