<?php
/**
 * Created by PhpStorm.
 * User: justin
 * Date: 9/4/2015
 * Time: 5:18 PM
 */
use Shorty\Models\Link;

$app->get('/:code', function ($code) use ($app) {
    $link = Link::where('code', $code)->first();

    if (!$link) {
        $app->notFound();
    }

    $app->response->redirect($link->url);
});
