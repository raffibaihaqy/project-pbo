<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Curr extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'curr';
    protected $fillable = ['curr'];
}
