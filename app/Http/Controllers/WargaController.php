<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rumah;
use App\Detailkk;
use DB;

class WargaController extends Controller
{
	function index(Request $request)
	{
		$listpendidikan = DB::select('SELECT * from pendidikan');
		$jumlah['rumah'] = DB::select('select count(*) as jml from rumah');
		$jumlah['kepala'] = DB::select('select count(*) as jml from kartu_keluarga');
		$jumlah['penduduk'] = DB::select('select count(*) as jml from detail_kk');
		$jumlah['kematian'] = DB::select('select count(*) as jml from detail_arsip_det_kk');
		$data = DB::select('SELECT jkel,COUNT(*) AS jml FROM detail_kk a join kartu_keluarga b on a.no_kk=b.no_kk join rumah c on c.id_rumah=b.id_rumah where c.id_rt=1 GROUP BY JKEL');
		$agama = DB::select('SELECT agama,COUNT(*) AS jml FROM detail_kk a join kartu_keluarga b on a.no_kk=b.no_kk join rumah c on c.id_rumah=b.id_rumah where c.id_rt=1 GROUP BY AGAMA');
		$pendidikan = DB::select('SELECT pendidikan,COUNT(*) AS jml FROM detail_kk a join kartu_keluarga b on a.no_kk=b.no_kk join rumah c on c.id_rumah=b.id_rumah where c.id_rt=1 GROUP BY pendidikan');
		$penduduk = DB::select('select * from detail_kk a join kartu_keluarga b on a.no_kk=b.no_kk');
		if(isset($request->pendidikan)){
			$penduduk = DB::select("select * from detail_kk a join kartu_keluarga b on a.no_kk=b.no_kk where a.pendidikan = '$request->pendidikan'");
		}
		$combo = $request->pendidikan;
		return view('blog.warga.index', compact('data','agama','pendidikan','jumlah','penduduk','listpendidikan','combo'));

	}

}
