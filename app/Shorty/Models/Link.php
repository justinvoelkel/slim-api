<?php
/**
 * Created by PhpStorm.
 * User: justin
 * Date: 9/4/2015
 * Time: 3:28 PM
 */

namespace Shorty\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

Class Link extends Eloquent
{
    protected $table = 'links';
    protected $fillable = ['url','code'];

    public function generateShortcode()
    {
        return  base_convert(($this->id + 100000), 10, 36);

    }
}