<?php
/**
 * Created by PhpStorm.
 * User: justinvoelkel
 * Date: 10/7/15
 * Time: 5:23 PM
 */

namespace Shorty\Presenters;

use Shorty\Models\Link;
use Slim\Slim;

class RemovePresenter extends BasePresenter
{
    protected $link;

    public function __construct(Link $link)
    {
        $this->link = $link;
    }

    public function __toString()
    {
        return $this->encodeOutput(
            [
                "url" => $this->link->url,
                "removed" => [
                    "url" => Slim::getInstance()->config('baseUrl').'/'.$this->link->code,
                    "code" => $this->link->code
                ]

            ]
        );
    }
}