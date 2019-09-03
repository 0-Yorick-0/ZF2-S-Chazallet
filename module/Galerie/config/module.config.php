<?php
return [
	'controllers' => [
		'invokables' => [
			'Galerie\Controller\Index' => 'Galerie\Controller\IndexController',
		],
	],
	'view_manager' => [
		//chargement précis (plus performant)
		'template_map' => [
			'galerie/index/index' => __DIR__ . '/../view/galerie/index/index.phtml',
			'galerie/index/edit' => __DIR__ . '/../view/galerie/index/edit.phtml',
			'galerie/index/del' => __DIR__ . '/../view/galerie/index/del.phtml',
			'galerie/index/view' => __DIR__ . '/../view/galerie/index/view.phtml',
		],
		//chargement standard (moins performant)
		'template_path_stack' => [
			'galerie' => __DIR__ . '/../view',
		]
	],
];