<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 13/01/16
 * Time: 11:47 PM
 */

namespace TeachMe\Entities;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    public static function getClass()
    {
        return get_class(new static);
    }

}