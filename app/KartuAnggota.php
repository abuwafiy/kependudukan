<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KartuAnggota extends Model
{
    protected $table = 'kartu_anggota';

    protected $primaryKey = 'id_kartu';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'nama_kartu'
    ];
}
