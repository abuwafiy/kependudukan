<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    protected $table = 'kartu_anggota';

    protected $primaryKey = 'id_rumah';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'id_kartu','id_rumah'
    ];
}
