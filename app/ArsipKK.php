<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArsipKK extends Model
{
    protected $table = 'detail_arsip';

    protected $primaryKey = 'id_arsip';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'id_rumah','no_kk','tanggal_arsip','keterangan'
    ];
}
