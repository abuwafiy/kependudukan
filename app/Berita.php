<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $primaryKey = 'id_berita';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'id_kategori_berita','id_profil','judul_berita','foto_berita','isi_berita','tgl_berita','status_berita'
    ];
}
