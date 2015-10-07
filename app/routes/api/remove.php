<?php
/**
 * Created by PhpStorm.
 * User: justinvoelkel
 * Date: 9/25/15
 * Time: 3:01 PM
 */

use Shorty\Models\Link;
use Shorty\Presenters\RemovePresenter;

$app->delete('/api/:code', function($code) use ($app)
{
    //lookup the code
    //if code exists delete
    //if code does not exist move ahead

    $link = Link::where('code', $code)->first();

    if (!$link) {
        $app->notFound();
    }

    try {
        $link->delete();
    }
    catch (exception $e) {
        return $app->response->write($e);
    }

    //write appropriate response
    return $app->response->write(
        new RemovePresenter($link)
    );
});
