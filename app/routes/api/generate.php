<?php
/**
 * Created by PhpStorm.
 * User: justin
 * Date: 9/8/2015
 * Time: 2:33 PM
 */

$app->post('/api/generate', function() use ($app){
    $payload = json_decode($app->request->getBody());
    var_dump($payload->url);
});