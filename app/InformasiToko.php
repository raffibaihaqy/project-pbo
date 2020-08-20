<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class InformasiToko extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'informasitoko';
    protected $fillable = [
        'nama_instansi',
        'telp',
        'kode_pos',
        'deskripsi',
        'alamat',
        'image'
    ];
}
