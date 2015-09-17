<?php
/**
 * Created by PhpStorm.
 * User: justin
 * Date: 9/4/2015
 * Time: 2:40 PM
 */
use Slim\Slim;
require '../vendor/autoload.php';

$app = new Slim();

$app->config([
    'baseUrl' => 'http://192.168.56.101/api/public'
]);

require '../app/database.php';
require '../app/routes.php';