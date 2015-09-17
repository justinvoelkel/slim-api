<?php
/**
 * Created by PhpStorm.
 * User: justin
 * Date: 9/8/2015
 * Time: 2:33 PM
 */

use Shorty\Models\Link;

$app->post('/api/generate', function () use ($app)
{
    $payload = json_decode($app->request->getBody());

    if (empty($payload) || empty(trim($payload->url))) {
        $app->response->setStatus(400);
        return $app->response->write(
            json_encode([
                "error" => [
                    "code" => 1000,
                    "message" => "A URL is required"
                ]
            ])
        );
    }
//    $response = Link::where('url', $payload->url)->first();
//    var_dump($response->code);
});
