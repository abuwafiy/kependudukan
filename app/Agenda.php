<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
   	protected $table = 'agenda';

    protected $primaryKey = 'id_agenda';

    public $timestamps = false;
    
    public $incrementing = false;

    protected $fillable = [
        'id_profil','nama_agenda','tgl_agenda','mulai','selesai','isi_agenda',
    ];
}

