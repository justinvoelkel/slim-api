<?php
/**
 * Created by PhpStorm.
 * User: justinvoelkel
 * Date: 9/18/15
 * Time: 4:52 PM
 */

namespace Shorty\Presenters;

class ErrorPresenter extends BasePresenter
{
    protected $code;
    protected $message;

    public function __construct($code, $message)
    {
        $this->code = $code;
        $this->message = $message;
    }

    public function __toString()
    {
        return $this->encodeOutput([
            "error" => [
                "code" => $this->code,
                "message" => $this->message
            ]
        ]);
    }

}