<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Daftar extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'admin';
    protected $fillable = [
        'nama',
        'telp',
        'alamat',
        'username',
        'password',
        'hak_akses',
        'image'
    ];
}
