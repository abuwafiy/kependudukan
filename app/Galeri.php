<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';

    protected $primaryKey = 'id_galeri';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'id_profil','nama_galeri','foto_galeri','tanggal_upload'
    ];
}
