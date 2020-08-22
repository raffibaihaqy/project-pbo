<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Kategori extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'kategori';
    protected $fillable = [
        'nama_kategori'
    ];

    public static function boot(){
        parent::boot();
        self::creating(function ($model){
            $model->pro_id = $model->count() + 1;
        });
    }

    public function proKat()
    {
        return $this->hasMany(InventoryProduk::class);
    }
}
