<?php
/**
 * Created by PhpStorm.
 * User: justin
 * Date: 9/8/2015
 * Time: 2:33 PM
 */

use Shorty\Models\Link;
use Shorty\Presenters\ErrorPresenter as Error;
use Shorty\Presenters\LinkPresenter;

$app->post('/api/generate', function () use ($app)
{
    $payload = json_decode($app->request->getBody());

    if (empty($payload) || empty(trim($payload->url))) {
        $app->response->setStatus(400);
        return $app->response->write(
            new Error(1000, 'A url is required')
        );
    }

    if (!filter_var($payload->url, FILTER_VALIDATE_URL)) {
        $app->response->setStatus(400);
        return $app->response->write(
            new Error(1001, 'A valid url is required')
        );
    }

    $link = Link::where('url', $payload->url)->first();

    if ($link) {
        $app->response->setStatus(201);
        return $app->response->write(
            new LinkPresenter($link)
        );
    }

    $newLink = Link::create([
        'url'=>$payload->url
    ]);

    $newLink->update([
        "code" => base_convert($newLink->id, 10, 36)
    ]);

    return $app->response->write(json_encode([
        "url"=>$payload->url,
        "generated" => [
            "url" => $app->config('baseUrl')."/".$newLink->code,
            "code" => $newLink->code
        ]
    ]));

});
