<?php
/**
 * Created by PhpStorm.
 * User: justinvoelkel
 * Date: 9/18/15
 * Time: 5:10 PM
 */

namespace Shorty\Presenters;

use Shorty\Models\Link;
use Slim\Slim;

class LinkPresenter extends BasePresenter
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
                "url"=>$this->link->url,
                "generated" => [
                    "url" => Slim::getInstance()->config('baseUrl').'/'.$this->link->code,
                    "code" => $this->link->code
                ]
            ]
        );
    }

}