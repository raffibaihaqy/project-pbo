<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class InventoryProduk extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'produk';
    protected $fillable = [
        'nama','unit',
        'curr','harga_beli',
        'harga_jual','disc',
        'stok','barcode',
        'status', 'expired',
        'image', 'kategori',
        'keterangan', 'ket',
    ];

    public function katPro()
    {
        return $this->belongsTo(Kategori::class);
    }
}
