<?php
$loader = require(dirname(__DIR__) . '/vendor/autoload.php');
$loader->add('', dirname(__DIR__) . '/src/DietcakeDemo/controllers');

define('DC_ACTION', 'dc_action');
define('VIEWS_DIR', dirname(__DIR__) . '/src/DietcakeDemo/views/');

Dispatcher::invoke();
