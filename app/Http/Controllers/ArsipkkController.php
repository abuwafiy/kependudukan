<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ArsipKK;

class ArsipkkController extends Controller
{
   function index(Request $request){
		$data = DB::select("SELECT a.*,b.* from kartu_keluarga a join detail_arsip b on a.no_kk=b.no_kk  order by a.id_rumah desc");
		return view('pages.rumah.arsip',compact('data'));
	}

    function store(Request $request){
    	$data = new ArsipKK();
    	$data->id_rumah = $request->id_rumah;
    	$data->no_kk = $request->no_kk;
    	$data->tanggal_arsip = $request->tanggal_arsip;
    	$data->keterangan = $request->keterangan;
    	$data->save();
    	return redirect('admin/rumah/'.$request->id_rumah.'/edit');
    }

    function destroy(Request $request){
    	$datas = ArsipKK::find($request->id);
		$data = ArsipKK::find($request->id)->delete();
		if($data){
			return redirect('admin/rumah/'.$request->id.'/edit');
		}
    }
}
