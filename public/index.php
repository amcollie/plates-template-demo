<?php

declare(strict_types=1);

use League\Plates\Engine;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$templates = new Engine(null, 'tpl');
$templates->addFolder('views', dirname(__DIR__) . '/views');
$templates->addFolder('layouts', dirname(__DIR__) . '/views/layouts');

echo $templates->render(
    'views::index', 
    [
        'name' => 'Michael Jones',
        'foods' => [
            'curry chicken',
            'white rice',
            'coleslaw',
            'plantains'
        ]
    ]
);