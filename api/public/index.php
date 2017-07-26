<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => 
    [
        'displayErrorDetails' => true,

        // Database Connection
    	'db' => [
	        'dsn' => 'sqlite:' . __DIR__ . '/../src/storage/ppcode.db',
	        'user' => null,
	        'pass' => null,
 	   ],

    ],
]);

// Set up dependencies
$container = $app->getContainer();
// require __DIR__ . '/../src/dependencies.php';

$container['db'] = function ($c) {
    $db = $c->get('settings')['db'];
    $pdo = new PDO($db['dsn'], $db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

require __DIR__ . '/../src/myfunction.php';
require __DIR__ . '/../src/routes.php';

$app->run();