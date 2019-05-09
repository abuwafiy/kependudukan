<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kateogri_berita';

    protected $primaryKey = 'id_kategori_berita';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'nama_kategori'
    ];
}
