<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rt extends Model
{
    protected $table = 'rt';

    protected $primaryKey = 'id_rt';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'id_rt','username','password','id_rw','nama_rt','level','deskripsi','telepon','email','alamat'
    ];
}
