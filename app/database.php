<?php
/**
 * Created by PhpStorm.
 * User: justin
 * Date: 9/4/2015
 * Time: 3:15 PM
 */
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver'=>'mysql',
    'host'=>'localhost',
    'database'=>'shorty',
    'username'=>'dev',
    'password'=>'password',
    'charset'=>'utf8',
    'collation'=>'utf8_unicode_ci',
    'prefix'=>''
]);

$capsule->bootEloquent();