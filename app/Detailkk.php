<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailkk extends Model
{
    protected $table = 'Detail_kk';

    protected $primaryKey = 'nik';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'no_kk','nik','nama_lengkap','jkel','tempat_lahir','tanggal_lahir','agama','pendidikan','pekerjaan','status_kawin','status_keluarga','paspor','kitas','ayah','ibu'
    ];
}
