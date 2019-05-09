<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArsipDetKK extends Model
{
    protected $table = 'detail_arsip_det_kk';

    protected $primaryKey = 'id_detail_arsip';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
       'no_kk','nik','tanggal_arsip','keterangan'
    ];
}
