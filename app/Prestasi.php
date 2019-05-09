<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = 'prestasi';

    protected $primaryKey = 'id_prestasi';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'id_profil','nama_prestasi','tgl_prestasi','nama_kegiatan','penyelenggara','skala'
    ];
}
