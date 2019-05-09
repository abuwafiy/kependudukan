<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReportController extends Controller
{
    function index()
	{	$jumlah['rumah'] = DB::select('select count(*) as jml from rumah');
		$jumlah['kepala'] = DB::select('select count(*) as jml from kartu_keluarga');
		$jumlah['penduduk'] = DB::select('select count(*) as jml from detail_kk');
		$jumlah['kematian'] = DB::select('select count(*) as jml from detail_arsip_det_kk');
		$data = DB::select('SELECT jkel,COUNT(*) AS jml FROM detail_kk a join kartu_keluarga b on a.no_kk=b.no_kk join rumah c on c.id_rumah=b.id_rumah where c.id_rt=1 GROUP BY JKEL');
		$agama = DB::select('SELECT agama,COUNT(*) AS jml FROM detail_kk a join kartu_keluarga b on a.no_kk=b.no_kk join rumah c on c.id_rumah=b.id_rumah where c.id_rt=1 GROUP BY AGAMA');
		$pendidikan = DB::select('SELECT pendidikan,COUNT(*) AS jml FROM detail_kk a join kartu_keluarga b on a.no_kk=b.no_kk join rumah c on c.id_rumah=b.id_rumah where c.id_rt=1 GROUP BY pendidikan');
		return view('pages.report.index', compact('data','agama','pendidikan','jumlah'));
	}

}
