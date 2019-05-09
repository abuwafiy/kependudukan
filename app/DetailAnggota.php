<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailAnggota extends Model
{
	protected $table = 'detail_anggota';

	protected $primaryKey = 'id_rumah';

	public $timestamps = false;

	public $incrementing = false;

	protected $fillable = [
		'id_rumah','id_kartu'
	];
}
