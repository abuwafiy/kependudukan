<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    protected $table = 'rumah';

    protected $primaryKey = 'id_rumah';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'id_rt','alamat','no_blok','telp_rumah','status_rumah'
    ];
}
