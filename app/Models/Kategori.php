<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

    
}
