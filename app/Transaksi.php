<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Transaksi extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'transaksi';
    protected $fillable = [
        'kode_transaksi'
    ];
}
