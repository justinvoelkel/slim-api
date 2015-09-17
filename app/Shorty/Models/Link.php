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
    public $table = 'links';
    public $fillable = ['url','code'];
}