<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider';

    protected $primaryKey = 'id_slider';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'id_rt','gambar'
    ];
}
