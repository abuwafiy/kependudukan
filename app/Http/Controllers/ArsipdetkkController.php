<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArsipDetKK;
use DB;

class ArsipdetkkController extends Controller
{
	function index(Request $request){
		$data = DB::select("SELECT a.*,b.tanggal_arsip,b.id_detail_arsip from detail_kk a join detail_arsip_det_kk b on a.nik=b.nik and a.no_kk=b.no_kk WHERE b.no_kk = '$request->id'");
		return view('pages.kartukeluarga.arsipdet',compact('data'));
	}

    function store(Request $request){
    	$data = new ArsipDetKK();
    	$data->nik = $request->nik;
    	$data->no_kk = $request->no_kk;
    	$data->tanggal_arsip = $request->tanggal_arsip;
    	$data->keterangan = $request->keterangan;
    	$data->save();
    	return redirect('admin/detailkeluarga/'.$request->no_kk);
    }

    function destroy(Request $request){
    	$datas = ArsipDetKK::find($request->id);
		$data = ArsipDetKK::find($request->id)->delete();
		if($data){
			return redirect('admin/detailkeluarga/'.$datas->no_kk);
		}
    }
}
