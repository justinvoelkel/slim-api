<?php
/**
 * Created by PhpStorm.
 * User: justinvoelkel
 * Date: 9/18/15
 * Time: 4:51 PM
 */

namespace Shorty\Presenters;


class BasePresenter
{
    public function encodeOutput($input)
    {
        return json_encode($input);
    }
}
