<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    protected $table = 'kartu_keluarga';

    protected $primaryKey = 'no_kk';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'no_kk','id_rumah','alamat','kode_pos','rtrw','provinsi','kota','kecamatan','kelurahan','status_kk'
    ];
}
